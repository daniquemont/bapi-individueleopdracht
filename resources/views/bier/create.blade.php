@extends('bier.layout')

@section('content')

    <form class="" action="/bieren" method="post">
        @csrf

        <input type="text" name="naam" value="">
        <input type="text" name="merk" value="">
        <input type="number" name="alcoholpercentage" value="">
        <input type="number" name="kleur_EBC" value="">
        <input type="number" name="bitter_EBU" value="">
        <input type="text" name="biersoort" value="">
        <input type="text" name="foto" value="">
        <button type="submit" name="button">Let's go</button>
    </form>
@endsection
