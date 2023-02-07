@extends('layouts.main-layout')

@section('content')
    
    <div> New person </div>
    <form method="POST" action="{{ route('person.store')}}">
        @csrf
        <label for="firstName">firstName</label>
        <input type="text" name="firstName">
        <br>
        <label for="lastName">lastName</label>
        <input type="text" name="lastName">
        <br>
        <label for="dateOfBirth">dateOfBirth</label>
        <input type="date" name="dateOfBirth">
        <br>
        <label for="height">height</label>
        <input type="number" name="height">
        <br>
        <input type="submit" value="CREATE NEW PERSON">
    </form>
@endsection