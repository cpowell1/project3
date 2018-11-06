<div id='results'>
    @isset($petName, $size, $petAge)
        <p>{{ $petName }} is a(n) {{ $petAge }} and weighs {{ $size }} pound(s). {{ $petName }} needs {{ $results }} cup(s) of food per day.</p>
    @endisset
</div>