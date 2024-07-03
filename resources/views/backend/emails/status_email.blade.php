<!DOCTYPE html>
<html>

<head>
    <title>{{ @config('app.name') }}</title>
</head>

<body>
    <h1>Mail from {{ @config('app.name') }} ( {{ $details['application']['code'] }} )</h1>
    <br>
    <p>Dear {{ $details['application']['name'] }},</p>
    <p>Your Application's status has been updated to "{{ $details['status'] }}"</p>
    <br>

    @if ($details['application']['status_id'] == 8)
        <p>
            {{ $details['application']['comments'] }}
        </p>
    @endif
    <br>
    <p>Best Regards,<br>
        CVI Education & Management</p>
</body>

</html>
