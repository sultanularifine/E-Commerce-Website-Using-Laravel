<!DOCTYPE html>
<html>
<head>
    <title>{{@config('app.name')}}</title>
</head>
<body>
    <h1>Mail from {{@config('app.name')}} ( {{$details['code']}} )</h1>
    <br>
    <p>Dear {{$details['name']}},</p>
    <p>Your Application has been accepted. To check your application's current status, <a href="https://cviedu.my/application/status" target="_blank">Click Here</a></p>
   
    <br>
    <p>Best Regards,<br>
        CVI Education & Management</p>
</body>
</html>