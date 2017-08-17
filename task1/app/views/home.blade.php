<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Home Laravel</title>
    </head>
    <body>
        <h2>Home Laravel</h2>
        <div>
            <div><a href="{{URL::to('articles')}}"> articles</a></div>
            <div><a href="{{URL::to('about')}}"> about</a></div>
            <div><a href="{{URL::to('contact')}}"> contact</a></div>
        </div>
    </body>
</html>
