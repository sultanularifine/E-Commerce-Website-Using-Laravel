<!DOCTYPE html>
<html>
<head>
    <title>{{@config('app.name')}}</title>
</head>
<body>
    <h1>Mail from {{@config('app.name')}}</h1>
    <br>
    <p>Dear {{$agent['agency_name']}},</p>
    <p>
        Thanks for expressing your interest. We will keep you informed about the  Application status after our technical team has conducted the necessary review. Should you have any inquiries or require assistance, please feel free to contact us at <a href="tel:+60102664265">+60102664265</a> or via email at <a href="mailto:admission@cviedu.my">admission@cviedu.my</a>
    </p>
    
    <br>
    <p>Thank you</p>
    <p>Best Regards,<br>
    CVIEM Team <br>
        <a href="https://cviedu.my" target="_blank">www.cviedu.my</a>
    </p>

</body>
</html>