<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('assets/backend/css/certificate.css') }}">
</head>

<body>
    <div class="hero-image" style="height: 100%;">
        <div class="hero-text">
            <h1>{{ $studentCourse?->student->name }}</h1>
            <p>Who has successfully completed the <strong>{{ $studentCourse?->course->name }}</strong> at <strong>CVI Education and
                    Management</strong>. Student Id: <strong>{{ $studentCourse?->student->code }}</strong> <br> Issue Date: <strong>{{ date('d/m/Y', strtoTime($studentCourse->updated_at)) }}</strong></p>

            <div class="hero-bottom">
                <table class="table table-borderless">
                    <tr>
                        <td><img src="data:image/png;base64, {!! $qrCode !!}"></td>
                        <td class="text-center">
                            <span class="administrator">Mohammed Kaosar</span><br>
                            <span>Administrator</span>
                        </td>
                        <td class="text-right">
                            <img src="{{ asset('assets/frontend/images/badge.png') }}" alt="" width="120px" height="120px">
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"></script>
</body>

</html>
