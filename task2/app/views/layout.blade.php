<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>
    @section('title')
    @show
    </title>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" 
      integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" 
      crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" 
      integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" 
      crossorigin="anonymous"></head>
<body>
<nav >
    <div class="container">
        <div >
            <a href="#">Task 2 </a>
        </div>
    </div>
</nav>

<div class="container">
@section('artist')
@show
@section('artistId')
@show
@section('album')
@show
@section('track')
@show


</div>

<footer >
    <div class="container">
        
    </div>
</footer>
</body>
</html>