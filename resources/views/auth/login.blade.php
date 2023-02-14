<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Scheherazade+New:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('/css/main.css')}}">
    <link rel="icon" href="{{ asset('/images/logo1.png') }}">
    <title>عصام</title>
</head>

<body>
    <div class="bg">
        <img class="main-img" src="{{ asset('/images/logo1.png')}}" width="35%">
        <img src="{{ asset('/images/logo2.png')}}" width="50%">
    </div>
    <section class="container">
        <div class="container-2">
            <div class="txt">تسجيل الدخول</div>
            <form class="inputs" method="POST" action="{{ route('login') }}">
                @csrf
                <input class="@error('username') is-invalid @enderror" name="username" placeholder="Enter Your Email">
                @error('username')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror

                <input type="password" name="password" placeholder="Enter Your Password">
                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
                <div class="remember">
                    <input type="checkbox" name="remember">
                    <label>Remember me</label>
                </div>
                <button type="submit" id="submit">{{ __('login') }}</button>
            </form>
        </div>
    </section>
</body>

</html>
