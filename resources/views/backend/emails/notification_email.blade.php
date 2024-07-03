<!DOCTYPE html>
<html>
<head>
    <title>{{@config('app.name')}}</title>
</head>
<body>
    <p>Dear {{$data['agency_name']}},<br>
        A New {{ $type }} "{{ $data['file_name'] }}" has been created. Check it out!!!
    </p>

    <p>Best Regards,<br>
        CVIEM Team <br>
        <a href="https://cviedu.my" target="_blank">www.cviedu.my</a>
    </p>
</body>
</html>