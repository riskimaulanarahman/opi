{{-- layout --}}
@extends('layouts.master')

{{-- tab title --}}
@section('title')
    Dashboard
@endsection

@php $isHr = true @endphp
@if ($isHr)
    <x-dashboard title="HR"/>
@else
    <x-dashboard title="OAsys"/>
@endif
