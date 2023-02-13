@extends('layouts.parent')
@section('css')
<link rel="stylesheet" href="{{ asset('css/assignment.css') }}">
@endsection
@section('title')
الواجب
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
        <td>نوع الواجب</td>
        <td>التاريخ</td>
        <td>التسليم</td>
    </tr>
    <tbody class="inputs">
        @foreach ($hws as $hw)
        <tr>
            {{-- <td>{{ $attend->attend_record }}</td> --}}
            <td>{{ $hw->name }}</td>
            <td>{{ $hw->date }}</td>
            <td>
                @if ($hw->hw=='0')
                {{ "لم يتم تسليمة" }}
                @else
                {{ "تم تسليمة" }}
                @endif
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
