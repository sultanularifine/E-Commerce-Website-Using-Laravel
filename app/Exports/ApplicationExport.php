<?php

namespace App\Exports;

use App\Models\Application;
use App\Models\User;
use App\Models\Status;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class ApplicationExport implements FromCollection, WithHeadings, WithMapping
{
    protected $app;

    public function __construct($request)
    {
        $this->app = $request;
    }

    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        $intake_month = !empty($this->app->intake_month) ? $this->app->intake_month : '';
        $intake_year = !empty($this->app->intake_year) ? $this->app->intake_year : '';
        $destination = !empty($this->app->destination) ? $this->app->destination : '';
        $university = !empty($this->app->university) ? $this->app->university : '';
        $agent = !empty($this->app->agent_id) ? $this->app->agent_id : '';
        $status = !empty($this->app->status_id) ? $this->app->status_id : '';

        $application = Application::with(['agent','status']);
        
        if ($intake_month != '') {
            $application = $application->where('intake_month', $intake_month);
        }
        if ($intake_year != '') {
            $application = $application->where('intake_year', $intake_year);
        }
        if ($destination != '') {
            $application = $application->where('study_destination', $destination);
        }
        if ($university != '') {
            $application = $application->where('prepared_institution1', $university);
        }
        if ($agent != '') {
            $application = $application->where('agent_id', $agent);
        }
        if ($status != '') {
            $application = $application->where('status_id', $status);
        }

        $application = $application->get();
        return $application;
    }

    public function headings(): array
    {
        return ["Application ID", "Name", "Phone", "Email", "Passport No", "Country", "University", "Intake Month", "Intake Year", "Referrer", "Applied At", "Status"];
    }

    public function map($application): array{
        $fields = [
        $application->code,
        $application->name,
        $application->mobile,
        $application->email,
        $application->passport,
        $application->study_destination,
        $application->prepared_institution1,
        $application->intake_month,
        $application->intake_year,
        !empty($application->agent_id) ? $application->agent->agency_name : '',
        $application->created_at,
        $application->status->name
      ];

     return $fields;
 }
}
