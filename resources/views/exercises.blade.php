@extends('layouts.parent')
@section('css')
<link rel="stylesheet" href="{{ asset('css/task.css') }}">
@endsection
@section('title')
الاختبارات
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
        <td>نوع الاختبار</td>
        <td>التاريخ</td>
        <td>الدرجة</td>
    </tr>
    <tbody class="inputs">
        @foreach ($exercises as $exercise)
        <tr>
            {{-- <td>{{ $attend->attend_record }}</td> --}}
            <td>{{ $exercise->name }}</td>
            <td>{{ $exercise->date }}</td>
            <td>
                <span class="percent">
                    <h1>{{ $exercise->degree }}</h1>  <!-- الدرجة  -->
                    <h1>{{ $exercise->maximum }}</h1> <!-- الدرجة العظمى -->
                </span>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
