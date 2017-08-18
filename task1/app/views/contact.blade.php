@extends('layout')

@section('title')
Contact-us
@stop


@section('contact')
<h1>Contact-us</h1>

@if ($error == 1)
<div >Not all fields are filled out</div>
@endif
<form method="post" class="form-vertical">
    Name:<input type="text" name="name" class="form-control" id="inputEmail3" placeholder="Name"/>
    Message:<input type="text" name="message" 
                   type="email" class="form-control" id="inputEmail3" placeholder="Email"/>
    <button type="submit">Send</button>
</form>
@stop