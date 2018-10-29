@extends('layouts.master')

@section('title')
    {{ $name }}
@endsection

@push('head')
@endpush

@section('content')
    <p>You are reading the food amount for {{ $name }}</p>
@endsection
