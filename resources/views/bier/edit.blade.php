@extends('bier.layout')

@section('content')

    <form class="" action="/editbieren" method="post">
        @csrf
        @method('PUT')

        <input type="text" name="naam" value="{{ $bier->naam }}">
        <input type="text" name="merk" value="{{ $bier->merk }}">
        <input type="number" name="alcoholpercentage" value="{{ $bier->alcoholpercentage }}">
        <input type="number" name="kleur_EBC" value="{{ $bier->kleur_EBC }} ">
        <input type="number" name="bitter_EBU" value="{{ $bier->bitter_EBU }}">
        <input type="text" name="biersoort" value="{{ $bier->biersoort }}">
        <button type="submit" name="button">Let's go</button>
    </form>
@endsection


