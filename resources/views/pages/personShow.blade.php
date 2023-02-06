@extends('layouts.main-layout')

@section('content')
    
    <div></div> People: <br> 
    FIRST NAME: {{ $person -> firstName}} <br>
    LAST NAME: {{ $person -> lastName}}</div><br>
    DATE OF BIRTH: <span>{{ $person -> dateOfBirth}}</span> <br>
    HEIGHT: <span>{{ $person -> height}}</span>
@endsection