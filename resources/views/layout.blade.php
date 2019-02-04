
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
</head>
<body>
    <p>
        <ul>
            <li><a href="/">Home</a></li>
            <li><a href="/contact">Contat</a></li>
            <li><a href="/about">About</a> us</li>
        </ul>
    </p>
    @yield('content')
</body>
</html>