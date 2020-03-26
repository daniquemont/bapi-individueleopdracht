@extends('bier.layout')

@section('content')
    <div class="grid-container">
            @foreach($bieren as $bier)
                <div class="grid-item">    
                    <h1>{{$bier -> naam}}</h1>
                    <img src="{{ $bier -> foto }}" alt="{{$bier -> naam}}">
                    <a href="/update/{{$bier->naam}}" class="button">Edit</a>
                </div>
            @endforeach
    </div>
@endsection