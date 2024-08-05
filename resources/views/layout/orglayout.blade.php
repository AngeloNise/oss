<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Office of the Student Services</title>
    <link rel="stylesheet" href="/css/loginuser.css">
</head>
<body>
    <div class="sidebaruser">
        <ul>
            <li><a href="{{ url('/Homepage') }}">Home</a></li>
            <li><a href="#">Upcoming Events</a></li>
            <li><a href="{{ url('/In-Campus') }}">In-Campus</a></li>
            <li><a href="#">Off-Campus</a></li>
            <li><a href="{{ url('/Application') }}">Application</a></li>
        </ul>
    </div>
    @yield('content')
    <footer>
        <p> © 2024 Polytechnic University of the Philippines | Terms of Use | Privacy Statement</p>
    </footer>
</body>
</html>