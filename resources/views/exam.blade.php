@extends('layouts.parent')
@section('title')
الامتحانات
@endsection
@section('css')
<link rel="stylesheet" href="{{ asset('css/exam.css') }}">
@endsection
@section('hidden-title')
<h1 class="hidden-title">@yield('title')</h1>
@endsection
@section('center')
@yield('title')
@endsection
@section('content')
<table style="width:100%">
    <tr class="titles">
        {{-- <td>رقم الحصة</td> --}}
        <td>نوع الامتحان</td>
        <td>التاريخ</td>
        <td>الدرجة</td>
        <td>الدفع</td>
    </tr>
    <tbody class="inputs">
        @foreach ($exams as $exam)
        <tr>
            {{-- <td>{{ $attend->attend_record }}</td> --}}
            <td>{{ $exam->name }}</td>
            <td>{{ $exam->date }}</td>
            <td>
                <span class="percent">
                    <h1>{{ $exam->degree }}</h1>  <!-- الدرجة  -->
                    <h1>{{ $exam->maximum }}</h1> <!-- الدرجة العظمى -->
                </span>
                </td>
            <td>{{ $exam->payed }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
