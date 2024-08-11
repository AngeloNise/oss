<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Office of the Student Services</title>
    <link rel="stylesheet" href="/css/test.css">
</head>
<body>
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
                <li><a href="{{ url('/test') }}">Home</a></li>
                <li><a href="#">Account Settings</a></li>
                <li><a href="{{ url('/Dashboard') }}">Dashboard</a></li>
                <li><a href="{{ url('/Application') }}">Application</a></li>
                <li><a href="#">Download Annexes</a></li>
                <li><a href="#">Pre-Evaluation</a></li>
                <p>Upcoming Events<p>
                <li><a href="{{ url('/In-Campus') }}">In-Campus</a></li>
                <li><a href="#">Off-Campus</a></li>
                <!--<li><a href="#">Log-Out</a></li>-->
            </ul>            
        </div>   
    </div>  
    <div class="centerbody">
        <div class="center">
            <h1>Office of the Student Services</h1>
            <p>
                &nbsp; &#160; &nbsp; &#160;The Office of Student Services is concerned with non-academic experiences of student in the areas of Student Affairs and Services and Institutional Student Programs and Services to facilitate holistic student development. The office services and programs that relate to student welfare and student development such as: Information and Orientation Service, Student Handbook Development, Leadership Training and Development Programs, Student Organizations and Activities Services, Student Council, Student Discipline, Student Publication, Cultural Programs, Social and Community Involvement Programs, and Monitoring and Evaluation on Student Affairs and Services.
            </p>
        </div>
    
        <div class="contact-info">
            <div>
                <h3>Office of the Student Services</h3>
                <p>Contact Information Email: studentservices@pup.edu.ph</p>
            </div>
    
            <div>
                <h3>Postal Mail</h3>
                <p>Office of the Student Services, Room 212 Charlie del Rosario Student Development Center, PUP A. Mabini Campus, Anonas St., Sta. Mesa Manila, Philippines 1016</p>
            </div>
    
            <div>
                <h3>Telephone</h3>
                <p>(63 2) 335-1 PUP (335-1787) or 335-1777 local 352</p>
            </div>
        </div>
    </div>
    <div class="login-option">
    </div>
</body>
</html>
