<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>@yield('title', 'Laravel site')</title>
    <style>
        .links {
            display: flex;
            list-style-type: none;
            padding: 0px;
        }
        .links li {
            margin: 5px;
        }

        .is-complete {
            text-decoration: line-through;
        }
        .wrap-container {
            width: 75%;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <header>
        <ul class="links">
            <li><a href="/">Home</a></li>
            <li><a href="/contact">Contact me</a></li>
            <li><a href="/about">About me</a></li>
            <li><a href="/todos">My TODO list</a></li>
        </ul>
    </header>
    <div class="wrap-container">
        @yield('content')
    </div>
</body>
</html>