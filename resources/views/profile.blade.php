<link rel="stylesheet" href="{{ asset('css/profile.css') }}">
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Scheherazade+New:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/profile.css') }}">
    <link rel="icon" href="{{ asset('images/logo1.png') }}">
    <title>الحساب الشحصى</title>
</head>
<body>

    <div class="bg">
        <img src="{{ asset('images/logo1.png') }}" width="35%">
        <img src="{{ asset('images/logo2.png') }}" width="50%">
    </div>

    <div class="back">
        <a href="{{ url()->previous() }}">الرجوع</a>
    </div>

    <div class="flex">
        <div class="container">
            <div class="logo"><img src="{{ asset(session()->get('image')) }}" alt="profile photo"></div>
            <h1>{{ Auth()->user()->name }}</h1>
            <div class="info">
                <span>
                    <h2>كود الطالب</h2>
                    <h3>{{ auth()->user()->id }}</h3>
                </span>
                <span>
                    <h2>عدد الحصص</h2>
                    <h3>{{ $lectures }}</h3>
                </span>
                <span>
                    <h2>عدد الامتحانات</h2>
                    <h3>{{ $exams }}</h3>
                </span>
                <div>
                    <span class="percentage">
                        <h2>نسبة الحضور</h2>
                        <span>
                            <h4>{{ $lectures_attend }}</h4> <!-- الدرجة -->
                            <h5>{{ $lectures }}</h5> <!-- العظمى -->
                        </span>
                    </span>
                    <span class="percentage">
                        <h2>نسبة تسليمات الواجب</h2>
                        <span>
                            <h4>{{ $homework }}</h4> <!-- الدرجة -->
                             <h5>{{ $lectures }}</h5> <!-- العظمى -->
                        </span>
                    </span>
                </div>
            </div>
        </div>
    </div>
    <div class="parent-number">
        <p>رقم ولى الامر : <span>{{ Auth()->user()->p_phone }}</span></p>
    </div>
    <div class="personal-number">
        <p>رقم الطالب : <span>{{ Auth()->user()->phone }}</span></p>
    </div>
</body>
</html>
