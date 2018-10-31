@extends('layouts.master')

@section('title')
@endsection

@push('head')
@endpush

@section('content')
    @isset($petName, $size, $petAge)
        <p>{{ $petName }} is a(n) {{ $petAge }} and weights {{ $size }}. {{ $petName }} need {{$size}} cup(s) of food per day.</p>
    @endisset



@endsection
