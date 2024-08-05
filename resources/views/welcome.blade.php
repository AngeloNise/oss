@extends('layout.guestlayout')
@section('content')
<header>
    <nav>
        <button type="button">Log In!</button>
    </nav>
</header>

<div class="main-content">
    <div class="login-box">
        <h2>Hello, Welcome!</h2>
        <form action="login.php" method="POST">
            <input type="text" name="webmail" placeholder="Webmail" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit">Log In</button>
            <a href="#">Forgot password?</a>
        </form>
    </div>
    <h1>Office of the Student Services</h1>
    <div class="txtinfo">
        <p>
            &nbsp; &#160; &nbsp; &#160;The Office of Student Services is concerned with non-academic experiences of student in the areas of Student Affairs and Services and Institutional Student Programs and Services to facilitate holistic student development. The office services and programs that relate to student welfare and student development such as: Information and Orientation Service, Student Handbook Development, Leadership Training and Development Programs, Student Organizations and Activities Services, Student Council, Student Discipline, Student Publication, Cultural Programs, Social and Community Involvement Programs, and Monitoring and Evaluation on Student Affairs and Services.
        </p>
    </div>
    <div class="contact-info">
        <div>
            <h3>Office of the Student Services</h3>
            <p>Contact Information</p>
            <p>Email: studentservices@pup.edu.ph</p>
        </div>
        <div>
            <h3>Postal Mail</h3>
            <p>Office of the Student Services, Room 212 Charlie del Rosario Student Development Center, PUP A. Mabini Campus, Anonas St., Sta. Mesa Manila, Philippines 1016</p>
        </div>
        <div>
            <h3>Telephone</h3>
            <p>(63 2) 335-1 PUP (335-1787) or</p>
            <p>335-1777 local 352</p>
        </div>
    </div>
</div>
@endsection
