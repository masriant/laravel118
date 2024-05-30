<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title ? $title . ' | Laravel 11' : 'Laravel 11' }}</title>
</head>
<body>
    <ul>
        <li><a href="/">home</a></li>
        <li><a href="/about">about</a></li>
        <li><a href="/contact">contact</a></li>
        <li><a href="/gallery">gallery</a></li>
        <li><a href="/users">users</a></li>
    </ul>

    {{ $slot }}
</body>
</html>
