<!DOCTYPE html>
<html>
<head>
    <title>{{@config('app.name')}}</title>
</head>
<body>
    <h1>Mail from {{@config('app.name')}}</h1>
    <br>
    <p>Dear {{$arrival['name']}},</p>
    <p>Thank you for sending us your Arrival Information.<br>
        Departing Country : {{ $arrival['departing_country'] }}<br>
        Flight Name : {{ $arrival['flight_name'] }}<br>
        Flight Number : {{ $arrival['flight_number'] }}<br>
        Arrival Date & Time : {{ date('d-m-Y | H:i a', strtotime($arrival['arrival_date_time'])) }}<br>
    </p>
    <p>Please find attached here with the scanned copy of the tickets.<br>
    Please Note : Applicant failing to come by this flight on the mentioned date and time Please inform us.</p>
    <br>
    <p>Warm Regards,<br>
    CVI Education & Management</p>
</body>
</html>