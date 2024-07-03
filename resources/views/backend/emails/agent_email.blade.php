<!DOCTYPE html>
<html>
<head>
    <title>{{@config('app.name')}}</title>
</head>
<body>
    <h1>Mail from {{@config('app.name')}} ( {{$agent['code']}} )</h1>
    <br>
    <p>A new Consultant "{{$agent['agency_name']}}" has applied.</p>
    <p>Agent ID: {{$agent['code']}}</p>

</body>
</html>