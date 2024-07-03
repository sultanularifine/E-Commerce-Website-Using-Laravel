<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ @config('app.name') }}</title>
    <style>
        .table {
            border: 1px solid #dee2e6;
            width: 100%;
        }

        .table tr:nth-child(odd) {
            background: #f2f2f2;
        }

        .fw-bold {
            font-weight: bold;
        }
        .table td{
            border: none;
            padding: 10px 0px 10px 2px;
        }
        .float-right{
            text-align: right;
        }
        #center{
            display: flex;
            height: 100px;
        }
    </style>
</head>

<body>
    <h1 style="text-align:center;"><u>Application Form</u></h1>
    <div id="center">
        <img src="{{ asset('assets/backend/img/logo-full.png') }}" alt="" width="70%">
        <img style="float:right" src="{{ asset('storage/applications/' . $application->code . '/' . $application->photo) }}" alt="" width="10%">
    </div>
    <div>
        <table class="table">
            <tr>
                <td class="fw-bold">Application Id</td>
                <td>{{ $application->code }}</td>

                <td class="fw-bold">Name</td>
                <td>{{ $application->name }}</td>
            </tr>
            <tr>
                <td class="fw-bold">Email</td>
                <td>{{ $application->email }}</td>

                <td class="fw-bold">Mobile No</td>
                <td>{{ $application->mobile }}</td>
            </tr>
            <tr>
                <td class="fw-bold">Date of Birth</td>
                <td>{{ $application->birth_date }}</td>

                <td class="fw-bold">Marital Status</td>
                <td>{{ $application->maritial_status }}</td>
            </tr>
            <tr>
                <td class="fw-bold">Passport No</td>
                <td>{{ $application->passport }}</td>

                <td class="fw-bold">Passport Expire Date</td>
                <td>{{ $application->passport_expire }}</td>
            </tr>
            <tr>
                <td class="fw-bold">Nationality</td>
                <td>{{ $application->nationality }}</td>

                <td class="fw-bold">Country of Residence</td>
                <td>{{ $application->country_of_residence }}</td>
            </tr>
            <tr>
                <td class="fw-bold">Address</td>
                <td colspan="3">{{ $application->address }}</td>
            </tr>
            <tr>
                <td class="fw-bold">SSC/Equivalent/</td>
                <td>{{ $application->ssc }}</td>

                <td class="fw-bold">Year of Completion</td>
                <td>{{ $application->ssc_year }}</td>
            </tr>
            <tr>
                <td class="fw-bold">Institute</td>
                <td>{{ $application->ssc_institute }}</td>

                <td class="fw-bold">CGPA </td>
                <td>{{ $application->ssc_cgpa }}</td>
            </tr>
            <tr>
                <td class="fw-bold">HSC/Diploma/Equivalent</td>
                <td>{{ $application->hsc }}</td>

                <td class="fw-bold">Year of Completion</td>
                <td>{{ $application->hsc_year }}</td>
            </tr>
            <tr>
                <td class="fw-bold">Institute </td>
                <td>{{ $application->hsc_institute }}</td>

                <td class="fw-bold">CGPA </td>
                <td>{{ $application->hsc_cgpa }}</td>
            </tr>
            <tr>
                <td class="fw-bold">Bachelor/Equivalent</td>
                <td>{{ $application->bachelor }}</td>

                <td class="fw-bold">Year of Completion</td>
                <td>{{ $application->bachelor_year }}</td>
            </tr>
            <tr>
                <td class="fw-bold">Institute</td>
                <td>{{ $application->bachelor_institute }}</td>

                <td class="fw-bold">CGPA</td>
                <td>{{ $application->bachelor_cgpa }}</td>
            </tr>
            <tr>
                <td class="fw-bold">Master/Equivalent</td>
                <td>{{ $application->master }}</td>

                <td class="fw-bold">Year of Completion</td>
                <td>{{ $application->master_year }}</td>
            </tr>
            <tr>
                <td class="fw-bold">Institute</td>
                <td>{{ $application->master_institute }}</td>

                <td class="fw-bold">CGPA</td>
                <td>{{ $application->master_cgpa }}</td>
            </tr>
            <tr>
                <td class="fw-bold">IELTS Score (if any)</td>
                <td>{{ $application->ielts }}</td>

                <td class="fw-bold">Study Destination (if any)</td>
                <td>{{ $application->study_destination }}</td>
            </tr>
            <tr>
                <td class="fw-bold">Intake Month</td>
                <td>{{ $application->intake_month }}</td>

                <td class="fw-bold">Intake Year</td>
                <td>{{ $application->intake_year }}</td>
            </tr>
            <tr>
                <td class="fw-bold">Prepared Institution 1 (if any)</td>
                <td>{{ $application->prepared_institution1 }}</td>

                <td class="fw-bold">Subject of Interest (if any)</td>
                <td>{{ $application->subject_of_interest1 }}</td>
            </tr>
            <tr>
                <td class="fw-bold">Prepared Institution 2 (if any)</td>
                <td>{{ $application->prepared_institution2 }}</td>

                <td class="fw-bold">Subject of Interest (if any)</td>
                <td>{{ $application->subject_of_interest2 }}</td>
            </tr>
            <tr>
                <td class="fw-bold">How do you know about us?</td>
                <td>{{ $application->source }}</td>

                <td class="fw-bold">Referrer</td>
                <td>
                    @foreach ($agents as $agent)
                        @if ($agent->id == $application->agent_id)
                            {{ $agent->agency_name }}
                        @endif
                    @endforeach
                </td>
            </tr>
            <tr>
                <td class="fw-bold">Working Place</td>
                <td colspan="3">{{ $application->working_place }}</td>
            </tr>
            <tr>
                <td class="fw-bold">Worked As (Position)</td>
                <td>{{ $application->working_position }}</td>
            
                <td class="fw-bold">Duration (Experience)</td>
                <td>{{ $application->experience }}</td>
            </tr>
            <tr>
                <td class="fw-bold">Remarks</td>
                <td>{{ $application->remarks }}</td>
            </tr>
            </tbody>
        </table>
    </div>
</body>

</html>
