<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container-fluid sticky-top">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse d-flex flex-column align-items-end" id="navbarNavAltMarkup">
        <ul class="navbar-nav me-2 ml-auto float-right">
            <li class="nav-item"><a href="#about" class="nav-link">About</a></li>
            <li class="nav-item"><a href="#experience" class="nav-link">Experience</a></li>
            <li class="nav-item"><a href="#skills" class="nav-link">Skills</a></li>
            <li class="nav-item"><a href="#education" class="nav-link">Education</a></li>
            <li class="nav-item"><a href="#contact" class="nav-link">Contact</a></li>
        </ul>
        </div>
    </div>
    </nav>

    <section id="main">
        <h1>Hi, My Name is Allen Cabansag</h1>
        
        <h3>I am a Web Developer</h3>
        <p>
            I am Web Programmer with a passion in graphic design, 
            providing simple and elegant solutions. I enjoy collaborating 
            with fellow developers and clients to create excellent work 
            aligned with their needs and goals
        </p>

        <img src="img/absolute/allen_1.png" alt="Allen_1">
    </section>

    <section id="about">

        <div>
            <img src="img/absolute/allen_2.png" alt="Allen_2">
        </div>

        <h1>Who am I?</h1>
        
        <p>
            I am Allen Cabansag, I am a Web Developer
            homegrown from National University of Laguna.
            I enjoy working both on graphic and web design,
            with a strong focus on creating elegant and
            simplistic models.

            I work using Sass for my front-end design while
            using my knowledge in PHP and MySQL for the back-end
            design using the help of the Laravel Framework
        </p>
    </section>
        
    <section id="experience">
        <h1>Experience</h1>
            <div>
                <img src="img/absolute/sugarstop.png" alt="sugarstop">
                <h4>SUGARSTOP</h4>
                <p>I LED A PROJECT THAT DEVELOPED A FULLY FUNCTIONAL POINT TO SALE WEBSITE</p>
            </div>

            <div>
                <img src="img/absolute/ax_fitness.png" alt="ax-fitness">
                <h4>AX-FITNESS</h4>
                <p>I LED A PROJECT THAT DEVELOPED A FULLY FUNCTIONAL PROMOTIONAL WEBSITE FOR A LOCAL FITNESS GYM BUSINESS</p>
            </div>

            <div>
                <img src="img/absolute/evaluation.png" alt="evaluation-form">
                <h4>EVALUATION FORM</h4>
                <p>HELPED IN DEVELOPNG A SAMPLE EVALUATION FORM THAT BOTH STUDENTS AND TEACHERS CAN USE</p>
            </div>
    </section>

    <section id="education">
        <h1>Education</h1>

        <div>
            <img src="img/absolute/loa.png" alt="loa">
            <h2>LYCEUM OF ALABANG</h2>
            <h3>(SY 2021-2022)</h3>

            <ol>
                <li>GRADUATED WITH HONORS</li>
                <li>BEST IN THESIS WRITING</li>
                <li>BEST IN WEB PROGRAMMING</li>
            </ol>
        </div>

        <div>
            <img src="img/absolute/nu.webp" alt="nu">
            <h2>NATIONAL UNIVERSITY OF LAGUNA</h2>
            <h3>(SY 2022-2026)</h3>

            <ol>
                <li>CREATIVE OFFICER IN STUDENT COUNCIL</li>
                <li>DEANS' LISTER 2022-2023</li>
                <li>DEANS' LISTER 2023-2024</li>
            </ol>
        </div>
    </section>

    <section class="skills" id="skills">
        <h1>SKills</h1>
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
        <h1>Contact</h1>

        <div>
            <img src="img/svg/linkedin.svg" alt="linkedin"><a href=""></a></img>
            <img src="img/svg/github.svg" alt="github"><a href=""></a></img>
            <img src="img/svg/facebook.svg" alt="facebook"><a href=""></a></img>
        </div>

        <form action="">
            <input type="text" name="" id="" placeholder="YOUR NAME">
            <input type="text" name="" id="" placeholder="YOUR EMAIL">
            <input type="text" name="" id="" placeholder="YOUR PHONE NO.">
            <input type="textarea" name="" id="" placeholder="YOUR REQUEST">
        </form>
    </section>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>