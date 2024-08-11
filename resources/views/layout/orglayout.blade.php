<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Office of the Student Services</title>
    <link rel="stylesheet" href="/css/loginuser.css">
    <link rel="stylesheet" href="/css/download.css">
    <script>
        function confirmDownload(event) {
            var userConfirmed = confirm("Are you sure you want to download this file?");
            if (!userConfirmed) {
                event.preventDefault();
            }
        }
    </script>
</head>
<div class="sb">
    <input type="checkbox" id="sidebar">
    <label for="sidebar" class="open">
        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#5f6368"><path d="M120-240v-80h720v80H120Zm0-200v-80h720v80H120Zm0-200v-80h720v80H120Z"/></svg>
    </label>
    
    <label id="overlay" for="sidebar"></label>

    <div class="link-container">
        <label for="sidebar" class="close">
            <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#5f6368"><path d="m256-200-56-56 224-224-224-224 56-56 224 224 224-224 56 56-224 224 224 224-56 56-224-224-224 224Z"/></svg>
        </label>
        <ul>
            <li><a href="{{ url('/Homepage') }}">Home</a></li>
            <li><a href="{{ url('/Account-Settings') }}">Account Settings</a></li>
            <li><a href="{{ url('/Dashboard') }}">Dashboard</a></li>
            <li><a href="{{ url('/Application') }}">Application</a></li>
            <li><a href="{{ url('/Download') }}">Download Forms</a></li>
            <li><a href="{{ url('/Pre-Evaluation') }}">Pre-Evaluation</a></li>
            <p>Upcoming Events<p>
            <li><a href="{{ url('/In-Campus') }}">In-Campus</a></li>
            <li><a href="#">Off-Campus</a></li>
            <!--<li><a href="#">Log-Out</a></li>-->
        </ul>            
    </div>   
</div>  
    @yield('content')
</body>
</html>