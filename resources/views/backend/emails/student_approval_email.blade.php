<!DOCTYPE html>
<html>
<head>
    <title>{{@config('app.name')}}</title>
</head>
<body>
    <h1>Mail from {{@config('app.name')}} ( {{$details['code']}} )</h1>

    <p>Dear {{$details['name']}},</p>
    <p>Your Application has been accepted. Your default password is "123456". You can change your password from profile settings after logging into your account. To log in to your account, <a href="https://cviedu.my/login" target="_blank">Click Here</a></p>
   
    <br>
    <p>Best Regards,<br>
        CVI Education & Management</p>
</body>
</html>