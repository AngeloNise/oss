<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Office of the Student Services</title>
    <link rel="stylesheet" href="/css/guest.css">
</head>
<body>
    <div class="sidebar">
        <ul>
            <li><a href="{{ url('/') }}">Home</a></li>
            <li><a href="#">Upcoming Events</a></li>
            <li><a href="{{ url('/In-Campus') }}">In-Campus</a></li>
            <li><a href="#">Off-Campus</a></li>
        </ul>
    </div>
    @yield('content')
    <header>
        <nav>
            <div class="button-wrapper">
                <button class="header-button">Log In!</button>
            </div>
        </nav>
    </header>
</body>
</html>