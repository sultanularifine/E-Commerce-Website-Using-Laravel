<?php

namespace Database\Seeders;

use App\Models\Status;
use Illuminate\Database\Seeder;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Applicationstatuses = ['New Application', 'Received', 'Completed'];

        $Applicantstatuses = ['New', 'Received', 'Completed', 'Flight'];

        foreach ($Applicationstatuses as $st) {
            $status = new Status();
            $status->name = $st;
            $status->type = 1;
            $status->save();
        }

        foreach ($Applicantstatuses as $st) {
            $status = new Status();
            $status->name = $st;
            $status->type = 2;
            $status->save();
        }

        $status = new Status();
        $status->name = 'Pending';
        $status->type = 1;
        $status->save();
    }
}
