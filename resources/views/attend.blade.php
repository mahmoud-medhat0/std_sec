@extends('layouts.parent')
@section('css')
<link rel="stylesheet" href="{{ asset('css/attend.css') }}">
@endsection
@section('title')
الحضور
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
        <td>نوع الحصه</td>
        <td>التاريخ</td>
        <td>الحضور</td>
        <td>الدفع</td>
        <td>الباقي</td>
    </tr>
    <tbody class="inputs">
        @foreach ($attends as $attend)
        <tr>
            {{-- <td>{{ $attend->attend_record }}</td> --}}
            <td>{{ $attend->name }}</td>
            <td>{{ $attend->date }}</td>
            <td>
                @switch($attend->attendence)
                @case('0')
                {{ "انتظار تعويض" }}
                @break
                @case('1')
                {{ "تم الحضور" }}
                @break
                @case('2')
                {{ "غياب" }}
                @break
                @endswitch
            </td>
            <td>
                @switch($attend->payed)
                @case('-')
                {{ "مؤجلة" }}
                @break
                @default
                {{ $attend->payed }}
                @endswitch
            </td>
            <td>{{ $attend->reset }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
