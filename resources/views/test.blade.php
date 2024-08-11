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
                <li><a href="#">Download Forms</a></li>
                <li><a href="#">Pre-Evaluation</a></li>
                <p>Upcoming Events<p>
                <li><a href="{{ url('/In-Campus') }}">In-Campus</a></li>
                <li><a href="#">Off-Campus</a></li>
                <!--<li><a href="#">Log-Out</a></li>-->
            </ul>            
        </div>   
    </div>

    <div class="download-section">
        <div class="downloads">
            <h2>Fund Raising Download</h2>
            <div class="file-list">
                <div class="file">
                    <a href="/path/to/your/file1.docx" download>
                        <img src="/thumbnail/guidelinestn.jpg" alt="Thumbnail 1">
                        <p>Executive Order No. 12, Series of 2024 - Revised Guidelines on Fund-Raising Activities of Students</p>
                    </a>
                </div>
                <div class="file">
                    <a href="/path/to/your/file2.docx" download>
                        <img src="/thumbnail/annexAtn.jpg" alt="Thumbnail 2">
                        <p>Executive Order No. 12-Annex A - Fund Raising Activity Application Form</p>
                    </a>
                </div>
                <div class="file">
                    <a href="/path/to/your/file3.xlsx" download>
                        <img src="/thumbnail/annexBtn.jpg" alt="Thumbnail 3">
                        <p>Executive Order No. 12-Annex B- Financial Report</p>
                    </a>
                </div>
                <div class="file">
                    <a href="/path/to/your/file4.xlsx" download>
                        <img src="/thumbnail/annexCtn.jpg" alt="Thumbnail 4">
                        <p>Executive Order No. 12-Annex C - Acknowledgment Receipt for Equipment Form</p>
                    </a>
                </div>
            </div>
        </div>
        
        <div class="downloads">
            <h2>Off-Campus Download</h2>
            <div class="file-list">
                <div class="file">
                    <a href="/path/to/your/file5.pdf" download>
                        <img src="/thumbnail/annexA-Htn.jpg" alt="Thumbnail 5">
                        <p>Executive Order No. 11-Annexes-A to H</p>
                    </a>
                </div>
                <div class="file">
                    <a href="/path/to/your/file6.docx" download>
                        <img src="/thumbnail/OCannexI-Ltn.jpg" alt="Thumbnail 6">
                        <p>Executive Order No. 11-Annexes-I-L</p>
                    </a>
                </div>
                <div class="file">
                    <a href="/path/to/your/file4.docx" download>
                        <img src="/thumbnail/budreq.jpg" alt="Thumbnail 7">
                        <p>Executive Order No. 11-BUDGETARY REQUIREMENTS</p>
                    </a>
                </div>
                <div class="file">
                    <a href="/path/to/your/file5.pdf" download>
                        <img src="/thumbnail/OCguidelinestn.jpg" alt="Thumbnail 8">
                        <p>Executive Order No. 11-PROCESS MANUAL FOR OFF-CAMPUS STUDENT ACTIVITY</p>
                    </a>
                </div>
                <div class="file">
                    <a href="/path/to/your/file6.docx" download>
                        <img src="/thumbnail/OCguidelinestn.jpg" alt="Thumbnail 9">
                        <p>Executive Order No. 11-Revised Guidelines for the Conduct of Off-Campus Student Activities</p>
                    </a>
                </div>
                <div class="file">
                    <a href="/path/to/your/file4.docx" download>
                        <img src="/thumbnail/parentconsent.jpg" alt="Thumbnail 10">
                        <p>Executive Order No. 11-TEMPLATE NOTARIZED PARENTAL CONSENT</p>
                    </a>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>
