@extends('layouts.parent')
@section('css')
<link rel="stylesheet" href="{{ asset('css/menu.css') }}">
@endsection
@section('title')
الصفحه الرئيسيه
@endsection
@section('center')
<center><a class="bar-code" href="{{ route('pdf') }}">بار كود</a></center>
@endsection
@section('content')
<div class="container">
<a href="{{ route('exc') }}"><img src="{{ asset('images/tests.png') }}">
    <h1>الإختبارات</h1>
</a>
<a href="{{ route('exm') }}"><img src="{{ asset('images/tests.png') }}">
    <h1>الإمتحانات</h1>
</a>
<a href="{{ route('hw') }}"><img src="{{ asset('images/homework.png') }}">
    <h1>الواجب</h1>
</a>
<a href="{{ route('attend') }}"><img src="{{ asset('images/attend.png') }}">
    <h1>الحضور</h1>
</a>
</div>
@endsection
