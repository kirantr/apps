@extends('layout')

@section('title')
Track
@stop

@section('track')
<p> Track: {{$track->Name}}</p>

Composer: {{$track->Composer}};<br>
Album: {{$album}}
Genre: {{$genre->Name}}<br>
<h2>{{$artist->Name}}</h2>

@stop