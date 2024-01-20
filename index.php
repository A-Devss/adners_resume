<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adner's Resume</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style/index.css">
    <link rel="stylesheet" href="style/mediaquery.css">

    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
   

</head>
<body>

<?php include_once "front-end/navbar.php"; ?>
    <div class="profile-container "  style=" display: none; width: 100%; height: 100%; justify-content: center; align-items: center;">
                <div class="card">
                    <div class="card-header">
                        <img src="image/profile.png" class="card-img-top" alt="...">
                    </div>
                </div>
    </div>
<div class="container-fluid pb-2 main" style="background: #efefef; height: auto;">
    <div class="container-fluid mt-2 p-0 details" style="background:#343434; height: 20rem; display: flex; flex-wrap: wrap;">
        <div class="s p-4"  style=" height: 100%;" >
       
            <ul class="list-group ul1">
                <h2 class="list-group-item px-0" style="font-weight: bold;">Adner Mondarez Devila</h2>
                <ul class="list-group list-group-horizontal">
                    <li class="list-group-item h hs" >Address </li>
                    <li class="list-group-item hs">Paliparan III, Dasmarinas Cavite</li>
                </ul>
                <ul class="list-group list-group-horizontal">
                    <li class="list-group-item h hs">Email </li>
                    <li class="list-group-item link hs">adnerdevila23@gmail.com</li>
                </ul>
                <ul class="list-group list-group-horizontal">
                    <li class="list-group-item h hs">Mobile </li>
                    <li class="list-group-item hs ">+63-998-322-7047</li>
                </ul>
                <ul class="list-group list-group-horizontal">
                    <li class="list-group-item h hs">D.O.B</li>
                    <li class="list-group-item hs">8-18-2001</li>
                </ul>
            </ul>
        </div>

        <div class="s s2"  style=" width: 50%; height: 100%; display: flex; justify-content: center; align-items: center;">
            <div class="card">
                <div class="card-header hd" style="width: 18rem;">
                    <img src="image/profile.png" class="card-img-top" alt="...">
                </div>
            </div>
        </div>
    </div>
    <hr class="my-2">
    <div class="container-fluid mt-0; p-0">
     
    <!-- About -->
        <div class="container-fluid p-4" style="width: 100%; font-size: 15px;">
            <div class="row">
                <div class="container mb-2 p-3" id="about-me-section">
                    <a class="m-0" href="#"><h4>About me</h2></a>

                    <p>I am an Information Technology student at the STI College Cavite Branch seeking
                    an internship program at Orange and Bronze Software Labs Inc. I know that I have
                    the passion and academic foundation to work as an intern.</p>
                    <p>Possessing a good understanding of programming language, and SQL for effective
                    database management, I would like to apply and enhance my skills in web
                    software development in a real-world professional setting.</p>
                    <p>I am enthusiastic about contributing to the company’s innovative project and
                    gaining hands-on experience in the rapidly developing information technology
                    industry.</p>
                </div>

                <div class="container  mb-2 p-3" id="skills-section">
                    <a class="m-0" href=""><h4>Skills and Achievements</h2></a>
                    <ul class="list-group">
                        <li class="mx-4">Proficiency in programming languages like PHP.</li>
                        <li class="mx-4">Web development: knowledge of HTML, CSS, JavaScript. </li>
                        <li class="mx-4">Skills in database design, SQL querying, and database management system
        (MySQL).</li>
                        <li class="mx-4">Familiarity with cybersecurity principles, including firewall, encryption, and
        vulnerability assessment.</li>
                        <li class="mx-4">Communicate well with the team, can do problem-solving of code, and has
        teamwork adaptability.</li>
                    </ul>
                </div>

                <div class="container  mb-2 p-3" id="education-section">
                    <a class="m-0" href=""><h4>Education</h2></a>
        
                    <ul class="list-group list-group-horizontal">
                        <li class="list-group-item e " >2008 – 2013</li>
                        <li class="list-group-item e2">Pintong Gubat Elementary School, Paliparan Rd, Dasmariñas,
                Cavite.</li>
                    </ul>
                    <ul class="list-group list-group-horizontal">
                        <li class="list-group-item e ">2014 – 2018</li>
                        <li class="list-group-item e2">Paliparan III Junior high School, Paliparan III, Phase 3, City of
                Dasmariñas, Cavite</li>
                    </ul>
                    <ul class="list-group list-group-horizontal">
                        <li class="list-group-item e ">2018 – 2020</li>
                        <li class="list-group-item e2">Paliparan III Senior high School, Paliparan III, Phase 3, City of
                Dasmariñas, Cavite</li>
                    </ul>
                    <ul class="list-group list-group-horizontal">
                        <li class="list-group-item e ">2020 – Present</li>
                        <li class="list-group-item e2">STI College – Dasmariñas, Cavite,
                Batchelor of Science in Information Technology (BSIT)</li>
                    </ul>
                </div>

                <div class="container mb-2 p-3" id="work-exp-section">
                    <a class="m-0" href=""><h4>Work and Project Experience</h2></a>
                    
                    <ul class="list-group ">
                        <li class="list-group" style="font-weight: bold;">Caparal Appliances & Furniture – Main Branch</li>
                        <li class="list-group">Emilio Aguinaldo Highway Salitran, Dasmariñas, Cavite
    January 2020 to February 2020</li>
                        <li class="mx-5" >Immersion</li>
                    </ul>
                    <br>
                    <ul class="list-group ">
                        <li class="list-group" style="font-weight: bold;">Japcha</li>
                        <li class="list-group">2023 – present</li>
                        <li class="mx-5" >A capstone project – “Web-based Ordering System”</li>
                        <li class="mx-5" >Project proposal for implementation of e-commerce.</li>
                    </ul>
                    <br>
                </div>

                <div class="container  mb-2 p-3" id="personal-info-section">
                    <a class="m-0" href=""><h4>Personal Information</h2></a>
        
                    <ul class="list-group list-group-horizontal">
                        <li class="list-group-item e " >Age </li>
                        <li class="list-group-item e2">22 years old</li>
                    </ul>
                    <ul class="list-group list-group-horizontal">
                        <li class="list-group-item e ">Birth date </li>
                        <li class="list-group-item e2">August 18, 2001</li>
                    </ul>
                    <ul class="list-group list-group-horizontal">
                        <li class="list-group-item e ">Civil status</li>
                        <li class="list-group-item e2">Single</li>
                    </ul>
                    <ul class="list-group list-group-horizontal">
                        <li class="list-group-item e ">Citizenship</li>
                        <li class="list-group-item e2">Filipino</li>
                    </ul>
                </div>

                <div class="container mb-2 p-3" id="achievement-section">
                    <a class="m-0" href=""><h4>Other Achievements</h2></a>

                    <ul class="list-group">
                        <li class="mx-4" >Graduated in Senior High as with Honor</li>
                        <li class="mx-4" >CSS National Certification (NC) II Passer</li>
                        <li class="mx-4" >Oracle Academy: Database Foundations</li>
                        <li class="mx-4" >Oracle Academy: Database Systems</li>
                        <li class="mx-4" >Huawei Talent Online: Network Foundations</li>
                    </ul>
                </div>

                <div class="container mb-2 p-3" id="computer-skill-section">
                    <a class="m-0" href=""><h4>Computer Skills</h2></a>
                    
                    <p>Programming Environment: Visual Studio Code, MySQL.</p>
                </div>

                <div class="container mb-2 p-3" id="interest-section">
                    <a class="m-0" href=""><h4>Interests</h2></a>

                    <ul class="list-group">
                        <li class="mx-4" >I play online games as a hobby</li>
                        <li class="mx-4" >I also like to travel</li>
                    </ul>
                </div>
 <p class="mt-3 p-3">I hereby declare that the information above is true and accurate to the best of my
knowledge.</p>
                <div class="col" style="max-width: 220px;">
                    <div class="card" style=" background: transparent !important; border: none;">
                    <img src="image/signature_2.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-title">Adner Mondarez Devila</p>
                        <p class="card-text">(Applicant)</p>
                    </div>
                    </div>
                </div>
                    
            </div>        
        </div>
    </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" ></script>
<script src="js/index.js"></script>
</body>
</html>