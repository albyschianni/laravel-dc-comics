@extends('layouts.main-layout')

@section('content')
    <h1>PEOPLE:</h1>

    <ul>
        @foreach ($people as $person)
            <li> 
                <a href="{{ route('person.show', $person)}}">
                    {{ $person -> firstName }}  {{ $person -> lastName }}  
                </a>
                - 
                <a href="{{ route('person.delete', $person)}}">X</a>
            </li>
        @endforeach
    </ul>
@endsection