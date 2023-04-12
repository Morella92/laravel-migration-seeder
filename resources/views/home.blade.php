@extends('layouts.layouts')

@section('content')

    <div class="container">
        <h1>Upcoming Trains</h1>
        <ul>
            @foreach ($trains as $train)
                <li>{{ $train->departure_station }} to {{ $train->arrival_station }} at {{ $train->departure_time}}</li>
            @endforeach
        </ul>
    </div>
    
@endsection
