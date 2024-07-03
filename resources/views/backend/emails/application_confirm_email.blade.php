<!DOCTYPE html>
<html>
<head>
    <title>{{@config('app.name')}}</title>
</head>
<body>
    <h1>Mail from {{@config('app.name')}} ( {{$application['code']}} )</h1>
    <br>
    <p>Dear {{$application['name']}},</p>
    <p>Your Application has been submitted successfully. To check your application's current status, <a href="https://cviedu.my/application/status" target="_blank">Click Here</a></p>
    <p>Passport No: {{$application['passport']}}</p>
    <p>Application No: {{$application['code']}}</p>
    
    <br>
    <p>Thank you<br>
    CVI Education & Management</p>

</body>
</html>