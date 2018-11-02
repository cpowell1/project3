@extends('layouts.master')

@section('title')
@endsection

@push('head')
@endpush

@section('content')

        <h1>Nutro Dog Food Calculator</h1>

        <form method='GET' action='/info-process'>
            <label>Your Pet's Name:
                <input type='text' name='petName' value='{{$petName}}'>
            </label>

            <label for='size'>Select Your Pet's Size:</label>
            <select name='size' id='size'>
                <option value=' '>Choose one...</option>
                <option value='0-15'>up to 15 lbs.</option>
                <option value='16-25'>16-25lbs.</option>
                <option value='26-40'>26-40lbs.</option>
                <option value='41-60'>41-60lbs.</option>
                <option value='61-80'>61-80lbs.</option>
                <option value='81-100'>81-100lbs.</option>
                <option value='Over 100'>Over 100lbs.</option>
            </select>

            <label class='age'>Your Pet's Age:</label>
            <ul id='checkboxes'>
                <li>
                    <label><input type='checkbox'
                                  name='petAge'
                                  value='Puppy'>Puppy</label>
                </li>
                <li>
                    <label><input type='checkbox'
                                  name='petAge'
                                  value='Adult'>Adult</label>
                </li>
                <li>
                    <label><input type='checkbox'
                                  name='petAge'
                                  value='Senior'>Senior</label>
                </li>
            </ul>

            <input type='submit' value='Enter' id='submit'>

        </form>

        @if(count($errors) > 0)
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif


    <div id='results'>
        @isset($petName, $size, $petAge)
            <p>{{ $petName }} is a(n) {{ $petAge }} and weighs {{ $size }} pound(s). {{ $petName }} needs {{ $results }} cup(s) of food per day.</p>
        @endisset


    </div>

@endsection



