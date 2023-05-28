@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Trains</h1>
    <ul>
        @foreach ($trains as $train)
        <li>
            <p>
                <strong>Partenza da </strong>{{ $train->departure_station}}
            </p>
            
            <p>
                <strong>Partenza da </strong>{{ $train->arrival_station}}
            </p>

        </li>
            
        @endforeach
    </ul>

</div>
    
@endsection