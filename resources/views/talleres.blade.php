@extends('layout')

@section('title', 'Talleres')

@section('content')

    <h2>Talleres</h2>
    <ul>
        @if($talleres)
            @foreach($talleres as $item)
                <li>{{ $item['titulo'] }}</li>
            @endforeach
        @else
            <li>No existe ningun taller que mostar</li>
        @endif
    </ul>
@endsection