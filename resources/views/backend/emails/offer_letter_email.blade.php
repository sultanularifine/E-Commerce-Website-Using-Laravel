<!DOCTYPE html>
<html>
<head>
    <title>{{@config('app.name')}}</title>
</head>
<body>
    <h1>Mail from {{@config('app.name')}} ( {{$details['application']['code']}} )</h1>
    <br>
    <p>Dear {{$details['application']['name']}},</p>
    <p>{{$details['message']}}</p>
   
    <br>
    <p>Best Regards,<br>
    CVI Education & Management</p>
</body>
</html>