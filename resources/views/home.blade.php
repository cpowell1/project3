@extends('layouts.master')

@section('title')
@endsection

@push('head')
@endpush

@section('content')

    <h1>Nutro Dog Food Calculator</h1>

    <form method='GET' action='{{ url('/info-process') }}'>
        <label>Your Pet's Name:
            <input type='text' name='petName' id="petName" value='{{$petName}}'>
        </label>
        @include('modules.error', ['field' => 'petName'])

        <label for='size'>Select Your Pet's Size:</label>
        <select name='size' id='size'>
            <option value=' ' {{ (old('size', $size) == ' ') ? 'selected' : '' }}>Choose one...</option>
            <option value='0-15' {{ (old('size', $size) == '0-15') ? 'selected' : '' }}>up to 15 lbs.</option>
            <option value='16-25' {{ (old('size', $size) == '16-25') ? 'selected' : '' }}>16-25lbs.</option>
            <option value='26-40' {{ (old('size', $size) == '26-40') ? 'selected' : '' }}>26-40lbs.</option>
            <option value='41-60' {{ (old('size', $size) == '41-60') ? 'selected' : '' }}>41-60lbs.</option>
            <option value='61-80' {{ (old('size', $size) == '61-80') ? 'selected' : '' }}>61-80lbs.</option>
            <option value='81-100' {{ (old('size', $size) == '81-100') ? 'selected' : '' }}>81-100lbs.</option>
            <option value='Over 100' {{ (old('size', $size) == 'Over 100') ? 'selected' : '' }}>Over 100lbs.</option>
        </select>
        @include('modules.error', ['field' => 'size'])

        <label class='age'>Your Pet's Age:</label>
        <ul id='checkboxes'>
            <li>
                <label><input type='checkbox'
                              name='petAge'
                              value='Puppy' {{ (old('petAge', $petAge) == 'Puppy') ? 'checked' : '' }}>Puppy</label>
            </li>
            <li>
                <label><input type='checkbox'
                              name='petAge'
                              value='Adult' {{ (old('petAge', $petAge) == 'Adult') ? 'checked' : '' }}>Adult</label>
            </li>
            <li>
                <label><input type='checkbox'
                              name='petAge'
                              value='Senior' {{ (old('petAge', $petAge) == 'Senior') ? 'checked' : '' }}>Senior</label>
            </li>
        </ul>
        @include('modules.error', ['field' => 'petAge'])

        <input type='submit' value='Enter' id='submit' name='submit'>

    </form>

    @isset($results)
        @include('modules.results')
    @endisset







@endsection



