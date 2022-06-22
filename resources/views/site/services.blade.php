<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/services.css') }}">
</head>

<body>
    <h1>Tiws is service page</h1>
    <a href="{{ route('getHome') }}">Home page</a>
    <br>
    <a href="{{ route('getAbout') }}"> About page</a> 
    <img src="{{ asset('images/Letter.jpg') }}" alt="Image">
</body>
</html>