@extends('layout')

@section('title')
    Articles
@stop
@section('articles')
<h1>Articles</h1>


@foreach($list as $val)
    <a href="{{URL::to('article/'.$val)}}">Article #{{$val}}</a><br>
@endforeach

@stop