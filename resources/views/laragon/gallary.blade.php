<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GALLARY</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>

<body>
    <h1 class="font-bold text-center"> GALLARY NG BISAYA</h1>
    <br>
    <ul>
        <a href="{{ route('index') }}"><li>home ng bisaya</li></a>
        <a href="{{ route('gallary') }}"><li>gallary ng bisaya</li></a>
        <a href="{{ route('services')}}"><li>services ng bisaya</li></a>
        <a href="{{ route('about') }}"><li>about ng bisaya</li></a>
    </ul>



</body>
</html>