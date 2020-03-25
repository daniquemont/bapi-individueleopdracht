@extends('bier.layout')

@section('content')
    <div class="grid-container">
            @foreach($bieren as $bier)
                <div class="grid-item">    
                    <h1>{{$bier -> naam}}</h1>
                    <a href="/bier/{{$bier->naam}}/edit" class="button">Edit</a>
                </div>
            @endforeach
    </div>
@endsection