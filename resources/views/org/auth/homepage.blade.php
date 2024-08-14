@extends('layout.orglayout')
@section('content')
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
    <div class="nav-item dropdown">
        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
            {{ Auth::user()->name }}
        </a>

        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="{{ route('logout') }}"
               onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </div>
    </div>
    
@endsection