<!DOCTYPE html>
<html>
<head>
    <title>{{@config('app.name')}}</title>
</head>
<body>
    <h1>Mail from {{@config('app.name')}} Contact</h1>
    <p><b>Subject:</b> {{$contact['subject']}} </p>
    <br>
    <p><b>Name:</b> {{$contact['name']}} </p>
    <p><b>Email:</b> {{$contact['email']}} </p>
    <p><b>Phone:</b> {{$contact['phone']}} </p>
    <p><b>Message:</b> {{$contact['message']}} </p>
</body>
</html>