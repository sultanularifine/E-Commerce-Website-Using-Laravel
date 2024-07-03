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
            margin-top: 20px;
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
    </style>
</head>

<body>
    <div>
        <h2 style="text-align:center; margin-bottom: 40px"><u>Recruitment Partner Registration Form</u></h2>
        <img src="{{ asset('storage/agents/'. $agent->code. '/' . $agent->logo) }}" alt="" width="20%">
    </div>
    <div>
        <table class="table">
            <tr>
                <td class="fw-bold">Agent Id</td>
                <td>: {{ $agent->code }}</td>
            </tr>
            <tr>
                <td class="fw-bold">Agency Name</td>
                <td>: {{ $agent->agency_name }}</td>
            </tr>
            <tr>
                <td class="fw-bold">Contact No</td>
                <td>: {{ $agent->phone }}</td>
            </tr>
            <tr>
                <td class="fw-bold">Email</td>
                <td>: {{ $agent->email }}</td>
            </tr>
            <tr>
                <td class="fw-bold">Contact Person</td>
                <td>: {{ $agent->contact_person }}</td>
            </tr>
            <tr>
                <td class="fw-bold">Designation</td>
                <td>: {{ $agent->designation }}</td>
            </tr>
            <tr>
                <td class="fw-bold">Web Adress</td>
                <td>: {{ $agent->web_address }}</td>
            </tr>
            <tr>
                <td class="fw-bold">Skype</td>
                <td>: {{ $agent->skype }}</td>
            </tr>
            <tr>
                <td class="fw-bold">Country</td>
                <td>: {{ $agent->country }}</td>
            </tr>
            <tr>
                <td class="fw-bold">City</td>
                <td>: {{ $agent->city }}</td>
            </tr>
            <tr>
                <td class="fw-bold">ZipCode</td>
                <td>: {{ $agent->zipcode }}</td>
            </tr>
            <tr>
                <td class="fw-bold">Address</td>
                <td>: {{ $agent->address }}</td>
            </tr>
            </tbody>
        </table>
    </div>
</body>

</html>
