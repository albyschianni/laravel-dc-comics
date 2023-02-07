@extends('layouts.main-layout')

@section('content')

    <div> New person </div>
    <form method="POST" action="{{ route('person.update', $person)}}">
        @csrf
        <label for="firstName">firstName</label>
        <input type="text" name="firstName" value="{{$person -> firstName}}">
        <br>
        <label for="lastName">lastName</label>
        <input type="text" name="lastName" value="{{$person -> lastName}}">
        <br>
        <label for="dateOfBirth">dateOfBirth</label>
        <input type="date" name="dateOfBirth" value="{{$person -> dateOfBirth}}">
        <br>
        <label for="height">height</label>
        <input type="number" name="height" value="{{$person -> height}}">
        <br>
        <input type="submit" value="UPDATE PERSON">
    </form>
@endsection