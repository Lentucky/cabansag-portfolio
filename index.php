<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/styles.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Work+Sans:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container-fluid sticky-top">
        <a class="navbar-brand" href="#main"><img src="img/absolute/logo.png" class="nav-logo" alt=""></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse d-flex flex-column align-items-end" id="navbarNavAltMarkup">
        <ul class="navbar-nav me-2 ml-auto float-right me-5">
            <li class="nav-item mx-3"><a href="#about" class="nav-link">About</a></li>
            <li class="nav-item mx-3"><a href="#experience" class="nav-link">Experience</a></li>
            <li class="nav-item mx-3"><a href="#education" class="nav-link">Education</a></li>
            <li class="nav-item mx-3"><a href="#skills" class="nav-link">Skills</a></li>
            <li class="nav-item mx-3"><a href="#contact" class="nav-link">Contact</a></li>
        </ul>
        </div>
    </div>
    </nav>

    <section class="main" id="main">
        <div class="main-word">
            <h1 class="header-h1 main-h1"><span style="color:#8c8c8c">Hi, My Name is</span> Allen Cabansag</h1>
            <h3 class="main-h3">I am a <span style="color:#A83A2B">Web Developer</span></h3>
            <p>
                I am Web Programmer with a passion in graphic design,
                providing simple and elegant solutions. I enjoy collaborating
                with fellow developers and clients to create excellent work
                aligned with their needs and goals
            </p>

            <a href="#about" class="btn btn-red">Read more?</a>
        </div>
        <img src="img/absolute/allen_1.png" alt="Allen_1" class = "main-img">
    </section>

    <section class="about" id="about">

        <img class="about-img" src="img/absolute/allen_2.png" alt="Allen_2">

        <div class="about-word">
            <h1 class="about-h1 header-h1">Who am I?</h1>
            
            <p >
                I am Allen Cabansag, I am a Web Developer
                homegrown from National University of Laguna.
                I enjoy working both on graphic and web design,
                with a strong focus on creating elegant and
                simplistic models.
            </p>

            <p>
                I work using Sass for my front-end design while
                using my knowledge in PHP and MySQL for the back-end
                design using the help of the Laravel Framework
            </p>
        </div>
    </section>
        
    <section class="experience" id="experience">
        <h1 class="header-h1 ex-h1 ">Experience</h1>
            <div class="ex">
                <div class="ex-set-1">
                    <div class="card">
                        <img class="card-img" src="img/absolute/sugarstop.png" alt="sugarstop">
                        <div class="card-container">
                            <h4>SUGARSTOP</h4>
                            <p>I LED A PROJECT THAT DEVELOPED A FULLY FUNCTIONAL POINT TO SALE WEBSITE</p>
                        </div>
                    </div>
                    <div class="card card-2">
                        <img class="card-img" src="img/absolute/evaluation.png" alt="evaluation-form">
                        <div class="card-container">
                            <h4>EVALUATION FORM</h4>
                            <p>HELPED IN DEVELOPNG A SAMPLE EVALUATION FORM THAT BOTH STUDENTS AND TEACHERS CAN USE</p>
                        </div>
                    </div>
                </div>
                <div class="ex-set-2">
                    <div class="card">
                        <img class="card-img" src="img/absolute/ax_fitness.png" alt="ax-fitness">
                        <div class="card-container">
                            <h4>AX-FITNESS</h4>
                            <p>I LED A PROJECT THAT DEVELOPED A FULLY FUNCTIONAL PROMOTIONAL WEBSITE FOR A LOCAL FITNESS GYM BUSINESS</p>
                        </div>
                    </div>
                </div>
            </div>


    </section>

    <section class="education" id="education">
        <h1 class="educ-h1 header-h1">Education</h1>

        <div class="education-content">
            <div class="education-word">
                <h2 style="color:#79281d">LYCEUM OF ALABANG</h2>
                <h3>(SY 2021-2022)</h3>
                <ol>
                    <li>GRADUATED WITH HONORS</li>
                    <li>BEST IN THESIS WRITING</li>
                    <li>BEST IN WEB PROGRAMMING</li>
                </ol>
            </div>

            <img class="educ-img" src="img/absolute/loa.png" alt="loa">
        </div>

        <div class="education-content">
            <img class="educ-img" src="img/absolute/nu.webp" alt="nu">
            
            <div class="education-word">
                <div class="educ-header">
                    <h2 style="color:#79281d">NATIONAL UNIVERSITY OF LAGUNA</h2>
                    <h3>(SY 2022-2026)</h3>
                </div>
                <ol>
                    <li>CREATIVE OFFICER IN STUDENT COUNCIL</li>
                    <li>DEANS' LISTER 2022-2023</li>
                    <li>DEANS' LISTER 2023-2024</li>
                </ol>
            </div>
        </div>
    </section>

    <section class="skills" id="skills">
        <h1 class="skills-h1 header-h1">SKILLS</h1>
            <div class="skills-div">
                <img src="img/svg/laravel.svg" alt="laravel" class="img-svg">
                <img src="img/svg/sass.svg" alt="sass" class="img-svg">
                <img src="img/svg/python.svg" alt="python" class="img-svg">
                <img src="img/svg/html.svg" alt="html" class="img-svg">
                <img src="img/svg/css.svg" alt="css" class="img-svg">
                <img src="img/svg/javascript.svg" alt="javascript" class="img-svg">
                <img src="img/svg/java.svg" alt="java" class="img-svg">
                <img src="img/svg/php.svg" alt="php" class="img-svg">
                <img src="img/svg/python.svg" alt="python" class="img-svg">
                <img src="img/svg/solidity.svg" alt="solidity" class="img-svg">
                <img src="img/svg/nodejs.svg" alt="nodejs" class="img-svg">
            </div>
    </section>

    <section id="contact">
        <h1 class="contact-h1 header-h1">CONTACT ME</h1>

        <div class="contact-links">
            <img class="contact-svg" src="img/svg/linkedin.svg" alt="linkedin"><a href=""></a></img>
            <img class="contact-svg" src="img/svg/github.svg" alt="github"><a href=""></a></img>
            <img class="contact-svg" src="img/svg/facebook.svg" alt="facebook"><a href=""></a></img>
        </div>


        <form class="cf">
            <div class="half left cf">
                <input type="text" id="name" placeholder="Name">
                <input type="email" id="email" placeholder="Email address">
                <input type="text" id="phone" placeholder="Your Phone Number">
            </div>
            <div class="half right cf">
                <textarea name="message" type="text" id="input-message" placeholder="Message"></textarea>
            </div>

            <input type="submit" value="Submit" id="submit">
        </form>
    </section>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>