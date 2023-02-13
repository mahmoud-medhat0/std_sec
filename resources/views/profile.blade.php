@extends('layouts.parent')
@section('css')
<link rel="stylesheet" href="{{ asset('css/profile.css') }}">
@endsection
@section('title')
الحساب الشخصي
@endsection
@section('center')
@yield('title')
@endsection
@section('content')
<div class="card">
    <img src="@if (Auth::user()->gender =='m')
    {{ asset('images/UserBoy.png') }}
    @else
    {{ asset('images/GirlUser.png') }}
    @endif">
    <h1>{{ Auth()->user()->name }}</h1>
    <div class="info">
        <div>
            <h1>كود الطالب</h1>
            <h3>{{ auth()->user()->id }}</h3>
        </div>
        <div>
            <h1>عدد المحاضرات</h1>
            <h3>7956465</h3>
        </div>
        <div>
            <h1>عدد الامتحانات</h1>
            <h3>64562165</h3>
        </div>
        <div>
            <h1>ترتيب الطالب</h1>
            <h3>64562165</h3>
        </div>
        <div>
            <span>
                <h2>27</h2> <!-- الدرجة -->
                <h2>50</h2> <!-- الدرجة العظمى -->
            </span>
            <h1>نسبة الواجب</h1>
        </div>
        <div>
            <span>
                <h2>27</h2> <!-- الدرجة -->
                <h2>50</h2> <!-- الدرجة العظمى -->
            </span>
            <h1>نسبة الحضور</h1>
        </div>
    </div>
    <div class="info-2">
        <div>
            <h1>الاسم :</h1>
            <h3>{{ Auth()->user()->name }}</h3>
        </div>
        <div>
            <h1>رقم التليفون :</h1>
            <h3>{{ Auth()->user()->phone }}</h3>
        </div>
        <div>
            <h1>رقم ولى الامر :</h1>
            <h3>{{ Auth()->user()->p_phone }}</h3>
        </div>
    </div>
</div>
@endsection
