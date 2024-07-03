<?php

namespace App\Exports;

use App\Models\Applicant;
use App\Models\Application;
use App\Models\User;
use App\Models\Status;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class ApplicantExport implements FromCollection, WithHeadings, WithMapping
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
        $name = !empty($this->app->name) ? $this->app->name : '';
        $passport = !empty($this->app->passport) ? $this->app->passport : '';
        $university_id = !empty($this->app->university_id) ? $this->app->university_id : '';
        $status_id = !empty($this->app->status_id) ? $this->app->status_id : '';

        $applicant = Applicant::with(['agent', 'university', 'status'])->orderBy('id', 'DESC');
        if ($name != '') {
            $applicant = $applicant->where('name', 'like', '%' . $name . '%');
        }
        if ($passport != '') {
            $applicant = $applicant->where('passport', $passport);
        }
        if ($university_id != '') {
            $applicant = $applicant->where('university_id', $university_id);
        }
        if ($status_id != '') {
            $applicant = $applicant->where('status_id', $status_id);
        } else {
            $applicant = $applicant->whereNotIn('status_id', [12]);
        }

        $applicant = $applicant->get();
        return $applicant;
    }

    public function headings(): array
    {
        return ["Name", "Passport No", "University", "Program", "Referrer", "EMGS Fee", "Nationality", "Status"];
    }

    public function map($applicant): array
    {
        $fields = [
            $applicant->name,
            $applicant->passport,
            $applicant->university->name,
            $applicant->program,
            ($applicant->agent_id)? $applicant->agent->agency_name : '',
            $applicant->emgs_fee,
            $applicant->nationality,
            $applicant->status->name
        ];

        return $fields;
    }
}
