<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Arrival Info</title>
    <style>
        table {
            border: 1px solid #dee2e6;
            width: 100%;
        }

        tr:nth-child(odd) {
            background: #f2f2f2;
        }

        .font-weight-bold {
            font-weight: bold;
        }
        td {
            padding: 10px 5px;
            font-size: 17px;
        }
        .heading{
            text-align: center;
            font-weight: bold;
        }
    </style>
</head>

<body>
    <div class="card">
        <div class="card-head">
            <h1 class="heading"><u>Arrival Info</u></h1>
        </div>
        <div>
            <table style="">
                <tr>
                    <td class="font-weight-bold">Name</td>
                    <td>{{ $arrival->name }}</td>
                </tr>
                <tr>
                    <td class="font-weight-bold">Mobile No</td>
                    <td>{{ $arrival->mobile }}</td>
                </tr>
                <tr>
                    <td class="font-weight-bold">Email</td>
                    <td>{{ $arrival->email }}</td>
                </tr>
                <tr>
                    <td class="font-weight-bold">Passport No</td>
                    <td>{{ $arrival->passport }}</td>
                </tr>
                <tr>
                    <td class="font-weight-bold">University</td>
                    <td>{{ $arrival->university->name }}</td>
                </tr>
                <tr>
                    <td class="font-weight-bold">Departing Country</td>
                    <td >{{ $arrival->departing_country }}</td>
                </tr>
                <tr>
                    <td class="font-weight-bold">Flight Name</td>
                    <td>{{ $arrival->flight_name }}</td>
                </tr>
                <tr>
                    <td class="font-weight-bold">Flight Number</td>
                    <td>{{ $arrival->flight_number }}</td>
                </tr>
                <tr>
                    <td class="font-weight-bold">Booking / PNR Number</td>
                    <td>{{ $arrival->booking_number }}</td>
                </tr>
                <tr>
                    <td class="font-weight-bold">Boarding Airport </td>
                    <td>{{ $arrival->boarding_airport }}</td>
                </tr>
                <tr>
                    <td class="font-weight-bold">Airport of Final Arrival</td>
                    <td>{{ $arrival->arrival_airport }}</td>
                </tr>
                <tr>
                    <td class="font-weight-bold">Departing Date & Time</td>
                    <td>{{ date('d-m-Y | H:i', strtotime($arrival->departing_date_time)) }}</td>
                </tr>
                <tr>
                    <td class="font-weight-bold">Arrival Date & Time </td>
                    <td>{{ date('d-m-Y | H:i', strtotime($arrival->arrival_date_time)) }}</td>
                </tr>
                @role('Super Admin')
                <tr>
                    <td class="font-weight-bold">Reference </td>
                    <td>{{ $arrival->reference }}</td>
                </tr>
                @endrole
            </table>
        </div>
    </div>
</body>

</html>