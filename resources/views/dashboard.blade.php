@extends('layouts')
@section('content')


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        .homepage-image {
            width: 100%;
            height: auto;
        }
        .content {
            text-align: center;
            padding: 50px;
        }
    </style>
</head>
<body>
    <div class="content">
        <h1>Welcome to Our Website</h1>
        <p>This is the homepage.</p>
        <img src="/assets/img/1.jpg" alt="Homepage Image" class="homepage-image">
    </div>
</body>
</html>
@endsection