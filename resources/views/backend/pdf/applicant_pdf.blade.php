<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Application (Malaysia) List</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
    <style>
        thead tr:first-child {
            background: #daecf5;
        }

        td {
            vertical-align: text-top;
            word-break: break-all;
            word-wrap: break-word;
        }
    </style>
</head>

<body>
    <h1 class="text-center"><u>Application (Malaysia) List</u></h1>
    <div class="table-responsive mt-4">
        <table class="table table-bordered table-striped">
            <thead>
                <tr class="">
                    <th>SL</th>
                    <th>Name</th>
                    <th class="text-center">Passport</th>
                    <th>Institute</th>
                    <th>Nationality</th>
                    <th>Program</th>
                    <th>Ref</th>
                    <th class="text-right">Fee</th>
                    <th>Status</th>
                    <th class="text-right">Updated</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($applicants as $applicant)
                    <tr>
                        <td>{{ $loop->index + 1 }}</td>
                        <td>{{ $applicant->name }}</td>
                        <td class="text-center">{{ $applicant->passport }}</td>
                        <td>{{ $applicant->university->name }}</td>
                        <td>{{ $applicant->nationality }}</td>
                        <td>{{ $applicant->program }}</td>
                        <td>{{ $applicant?->agent?->agency_name }}</td>
                        <td class="text-right">{{ $applicant->emgs_fee }}</td>
                        <td>{{ $applicant->status->name }}</td>
                        <td class="text-right">{{ date('d-m-Y', strtotime($applicant->updated_date)) }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"></script>
</body>

</html>
