@extends('layout')

@section('title')
Home page
@stop

@section('home')
<div class="text-center"><h2>Home Laravel</h2></div>

<div class="navi"> 
    <ul class="nav nav-tabs">
        <li role="presentation" class="active">
            <a href="{{URL::to('articles')}}"> articles</a>
        </li>
        <li role="presentation" class="active">
            <a href="{{URL::to('about')}}"> about</a>
        </li>
        <li role="presentation" class="active">
            <a href="{{URL::to('contact')}}"> contact-us</a>
        </li>
    </ul>
</div>

