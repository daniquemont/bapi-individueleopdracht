@extends('bier.layout')

@section('content')
        <div class="middle-border">
        <h1> {{$bier-> naam}} </h1>
        @if($bier-> naam == 'Hoegaarden Wit')
            <h2>{{$bier-> merk}}</h2>
        @endif
        </div>
@endsection
