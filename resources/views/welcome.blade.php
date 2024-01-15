<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>MY DIGITAL PROTFOLIO</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    {{-- <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon"> --}}

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i|Playfair+Display:400,400i,500,500i,600,600i,700,700i&subset=cyrillic"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">

</head>

<body>

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex flex-column align-items-center justify-content-center position-relative px-0">
        <video src="{{ asset('assets/img/hero-video.mp4') }}" autoplay muted loop="true" style="object-fit:cover"
            class="w-100 h-100 p-0 m-0 custom-video">
        </video>
        <div class="position-absolute text-center">
            <h1>Hi, I'm Raja Ahmer!</h1>
            <h2>I am a Software Engineer</h2>
            <div>
                <a href="#about" class="btn-get-started scrollto d-flex justify-content-center"><i
                        class="bi bi-chevron-double-down"></i></a>
            </div>
        </div>
    </section><!-- End Hero -->

    <!-- ======= Header ======= -->
    <header id="header" class="d-flex align-items-center">
        <div class="container d-flex align-items-center justify-content-between">

            <div class="logo">
                <h1><a href="{{ url('/') }}">My Digital Protfolio</a></h1>
                <!-- Uncomment below if you prefer to use an image logo -->
                <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
            </div>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
                    <li><a class="nav-link scrollto" href="#about">About</a></li>
                    <li><a class="nav-link scrollto" href="#resume">Resume</a></li>
                    <li><a class="nav-link scrollto" href="#certificate">Certificates</a></li>
                    <li><a class="nav-link scrollto" href="#services">Services</a></li>
                    <li><a class="nav-link scrollto" href="#portfolio">Portfolio</a></li>
                    {{-- <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="#">Drop Down 1</a></li>
                            <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i
                                        class="bi bi-chevron-right"></i></a>
                                <ul>
                                    <li><a href="#">Deep Drop Down 1</a></li>
                                    <li><a href="#">Deep Drop Down 2</a></li>
                                    <li><a href="#">Deep Drop Down 3</a></li>
                                    <li><a href="#">Deep Drop Down 4</a></li>
                                    <li><a href="#">Deep Drop Down 5</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Drop Down 2</a></li>
                            <li><a href="#">Drop Down 3</a></li>
                            <li><a href="#">Drop Down 4</a></li>
                        </ul>
                    </li> --}}
                    <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
                    {{-- @if (Route::has('login'))
                        <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                            @auth
                                <li><a class="nav-link" href="{{ url('/dashboard') }}">Dashboard</a></li>
                            @else
                                <li><a class="nav-link" href="{{ route('login') }}">Login</a></li>
                            @endauth
                        </div>
                    @endif --}}

                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->

    <main id="main">

        <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <div class="container">

                <div class="row no-gutters">
                    <div
                        class="image col-xl-5 d-flex align-items-stretch justify-content-center justify-content-lg-start">
                    </div>
                    <div class="col-xl-7 ps-0 ps-lg-5 pe-lg-1 d-flex align-items-stretch">
                        <div class="content d-flex flex-column justify-content-center">
                            <h3>About</h3>
                            <p>
                                Highly skilled and versatile Full-Stack Developer with expertise in HTML, CSS,
                                Bootstrap, JavaScript, jQuery, MySQL, PostgreSQL, PHP, Laravel, Python, C++, Java, and
                                proficient in Version Control with Git & GitHub. Adept at creating dynamic and
                                responsive web applications, with a strong foundation in database management.
                                Detail-oriented and committed to delivering high-quality, scalable solutions to meet
                                diverse client needs. Proven ability to collaborate in cross-functional teams and adapt
                                to emerging technologies for continuous improvement.
                            </p>
                            <div class="row">
                                <div class="col-md-6 d-md-flex align-items-md-stretch">
                                    <div class="count-box">
                                        <i class="bi bi-emoji-smile"></i>
                                        <span data-purecounter-start="0" data-purecounter-end="5"
                                            data-purecounter-duration="1" class="purecounter"></span>
                                        <p><strong>Happy Clients</strong></p>
                                    </div>
                                </div>

                                <div class="col-md-6 d-md-flex align-items-md-stretch">
                                    <div class="count-box">
                                        <i class="bi bi-journal-richtext"></i>
                                        <span data-purecounter-start="0" data-purecounter-end="8"
                                            data-purecounter-duration="1" class="purecounter"></span>
                                        <p><strong>Projects</strong></p>
                                    </div>
                                </div>

                                <div class="col-md-6 d-md-flex align-items-md-stretch">
                                    <div class="count-box">
                                        <i class="bi bi-clock"></i>
                                        <span data-purecounter-start="0" data-purecounter-end="2"
                                            data-purecounter-duration="1" class="purecounter"></span>
                                        <p><strong>Years of experience</strong></p>
                                    </div>
                                </div>

                                {{-- <div class="col-md-6 d-md-flex align-items-md-stretch">
                                    <div class="count-box">
                                        <i class="bi bi-award"></i>
                                        <span data-purecounter-start="0" data-purecounter-end="15"
                                            data-purecounter-duration="1" class="purecounter"></span>
                                        <p><strong>Awards</strong> rerum asperiores dolor alias quo reprehenderit eum et
                                            nemo pad der</p>
                                    </div>
                                </div> --}}
                            </div>
                        </div><!-- End .content-->
                    </div>
                </div>

            </div>
        </section><!-- End About Section -->

        <!-- ======= Skills Section ======= -->
        <section id="skills" class="skills section-bg">
            <div class="container">

                <div class="section-title">
                    <h2>Skills</h2>

                </div>

                <div class="row skills-content">

                    <div class="col-lg-6">

                        <div class="progress">
                            <span class="skill">HTML <small>(5)</small> <i class="val">95%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="95" aria-valuemin="0"
                                    aria-valuemax="100"></div>
                            </div>
                        </div>

                        <div class="progress">
                            <span class="skill">CSS <small>(3)</small> <i class="val">90%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0"
                                    aria-valuemax="100"></div>
                            </div>
                        </div>

                        <div class="progress">
                            <span class="skill">Bootstrap <small>(v5)</small> <i class="val">90%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0"
                                    aria-valuemax="100"></div>
                            </div>
                        </div>

                        <div class="progress">
                            <span class="skill">JavaScript <small>(ES6)</small> <i class="val">65%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="65" aria-valuemin="0"
                                    aria-valuemax="100"></div>
                            </div>
                        </div>

                        <div class="progress">
                            <span class="skill">jQuery <small>(3.7)</small> <i class="val">70%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0"
                                    aria-valuemax="100"></div>
                            </div>
                        </div>

                        <div class="progress">
                            <span class="skill">MySQL <small>(8.2)</small> <i class="val">65%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="65" aria-valuemin="0"
                                    aria-valuemax="100"></div>
                            </div>
                        </div>

                        <div class="progress">
                            <span class="skill">Agile <i class="val">70%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0"
                                    aria-valuemax="100"></div>
                            </div>
                        </div>

                        <div class="progress">
                            <span class="skill">Linux (OS) <i class="val">65%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="65" aria-valuemin="0"
                                    aria-valuemax="100"></div>
                            </div>
                        </div>

                    </div>

                    <div class="col-lg-6">

                        <div class="progress">
                            <span class="skill">PHP <i class="val">70%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0"
                                    aria-valuemax="100"></div>
                            </div>
                        </div>

                        <div class="progress">
                            <span class="skill">Laravel <i class="val">70%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0"
                                    aria-valuemax="100"></div>
                            </div>
                        </div>

                        <div class="progress">
                            <span class="skill">Python <i class="val">40%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="40" aria-valuemin="0"
                                    aria-valuemax="100"></div>
                            </div>
                        </div>

                        <div class="progress">
                            <span class="skill">C++ <i class="val">45%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="45" aria-valuemin="0"
                                    aria-valuemax="100"></div>
                            </div>
                        </div>

                        <div class="progress">
                            <span class="skill">Java <i class="val">40%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="40" aria-valuemin="0"
                                    aria-valuemax="100"></div>
                            </div>
                        </div>

                        <div class="progress">
                            <span class="skill">PostgreSQL <i class="val">65%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="65" aria-valuemin="0"
                                    aria-valuemax="100"></div>
                            </div>
                        </div>

                        <div class="progress">
                            <span class="skill">Version Control (Git & GitHub) <i class="val">80%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0"
                                    aria-valuemax="100"></div>
                            </div>
                        </div>

                    </div>

                </div>

            </div>
        </section><!-- End Skills Section -->

        <!-- ======= Resume Section ======= -->
        <section id="resume" class="resume section-bg">
            <div class="container">

                <div class="section-title">
                    <h2>Resume</h2>
                    <p>
                        Highly motivated and skilled Software Engineer with expertise in Web
                        Development, Front-End, Back-End and Full-Stack Development, seeking an
                        opportunity to contribute to cutting-edge projects and drive innovation in the
                        technology industry.
                    </p>
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <h3 class="resume-title">Sumary</h3>
                        <div class="resume-item pb-0">
                            <h4>Raja Ahmer Abbas</h4>
                            <p style="text-align: justify !important;">
                                <em>
                                    Highly skilled and versatile Full-Stack Developer with expertise in HTML, CSS,
                                    Bootstrap, JavaScript, jQuery, MySQL, PostgreSQL, PHP, Laravel, Python, C++, Java,
                                    and proficient in Version Control with Git & GitHub. Adept at creating dynamic and
                                    responsive web applications, with a strong foundation in database management.
                                    Detail-oriented and committed to delivering high-quality, scalable solutions to meet
                                    diverse client needs. Proven ability to collaborate in cross-functional teams and
                                    adapt to emerging technologies for continuous improvement.
                                </em>
                            </p>
                            <p>
                            <ul>
                                <li>Islamabad, Pakistan</li>
                                <li>+92 319 500 6898</li>
                                <li>rajaahmer308@gmail.com</li>
                                <li><a href="https://www.linkedin.com/in/raja-ahmer-a-416702209/"
                                        target="_blank">LinkedIn</a></li>
                            </ul>
                            </p>
                        </div>

                        <h3 class="resume-title">Education</h3>
                        <div class="resume-item">
                            <h4>Bachelor of Software Engineering</h4>
                            <h5>2020 - 2024</h5>
                            <p><em>Riphah International University, Islamabad, Pakistan</em></p>
                        </div>
                        <div class="resume-item">
                            <h4>Intermediate in Computer Science (ICS)</h4>
                            <h5>2017 - 2019</h5>
                            <p><em>Islamabad Model College, Islamabad, Pakistan</em></p>
                        </div>
                        <div class="resume-item">
                            <h4>Computer Applications &amp; Office Professional</h4>
                            <h5>2017 - 2018</h5>
                            <p><em>Punjab Vocational Training Council, Islamabad, Pakistan</em></p>
                        </div>
                        <div class="resume-item pb-0">
                            <h4>Secondary School Certificate (SSC)</h4>
                            <h5>2015 - 2017</h5>
                            <p><em>De Western International School, Islamabad, Pakistan</em></p>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <h3 class="resume-title">Professional Experience</h3>
                        <div class="resume-item">
                            <h4>Full Stack Web Developer</h4>
                            <h5>2023 - Present</h5>
                            <p><em><a href="https://islootech.com/" target="_blank">Isloo Tech</a>, Islamabad,
                                    Pakistan </em></p>
                            <p>
                            <ul>
                                <li>Working on Agile Environment</li>
                                <li>Laravel Developer</li>
                            </ul>
                            </p>
                        </div>
                        <div class="resume-item pb-0">
                            <h4>Front-End Web Developer</h4>
                            <h5>2022 - 2023</h5>
                            <p><em>Tool Spectrum, Islamabad, Pakistan</em></p>
                            <p>
                            <ul>
                                <li>Front-End Development of Tool Spectrum Website</li>
                            </ul>
                            </p>
                        </div>

                        <h3 class="resume-title">Projects</h3>
                        <div class="resume-item pb-0">
                            <p>
                            <ul>
                                <li>
                                    <a href="https://imtiaz.ae/" target="_blank">Imtiaz Developments</a> (Working as a
                                    Team)
                                </li>
                                <li><a href="https://j7global.com/" target="_blank">J7 Global</a> (Working as a Team)
                                </li>
                                <li>
                                    <a href="https://github.com/raja-ahmer/" target="_blank">Business to
                                        DoorMarketing</a> (Final Year Project)
                                </li>
                                <li><a href="https://github.com/raja-ahmer/My-Ticketing-App"
                                        target="_blank">V-Desk</a> (Full Stack Development)
                                </li>
                                <li>
                                    <a href="https://github.com/raja-ahmer/ToolSpectrum-Website">Tool Spectrum</a>
                                    (Front-End Development)
                                </li>
                                <li>
                                    <a href="https://github.com/raja-ahmer/Task-Manager-Recent-Updated"
                                        target="_blank">Task Manager</a> (Full Stack Development)
                                </li>
                                <li>
                                    <a href="https://github.com/raja-ahmer/Web_Project" target="_blank">Library
                                        Management System</a> (Full Stack Development)
                                </li>
                                <li>
                                    <a href="https://github.com/raja-ahmer/20038_19744_MAD_Project"
                                        target="_blank">Skill Up</a> (Android Development)
                                </li>
                            </ul>
                            </p>
                        </div>

                        <h3 class="resume-title">Community</h3>
                        <div class="resume-item">
                            <h4>Community Leader & Education Advocate: Empowering Underprivileged Children</h4>
                            <h5>2023 - Present</h5>
                            <p style="text-align: justify !important;"><em>Dedicated community leader with a passion
                                    for education and social impact.
                                    Currently spearheading a school for underprivileged children in affiliation
                                    with BECS (Basic Education Community Schools), JICA (Japan International
                                    Cooperation Agency), and FDE (Federal Directorate of Education) Islamabad,
                                    Pakistan. Offering a self-provided facility to ensure access to education for
                                    those who are unable to afford it. Actively contributing to the community by
                                    fostering a nurturing environment for learning and development.</em></p>
                        </div>
                    </div>
                </div>

            </div>
        </section><!-- End Resume Section -->

        <section id="certificate" class="certificate section-bg">
            <div class="container">
                <div class="section-title">
                    <h2>Certificates</h2>
                    <p>List of certificates that I have earned from different organizations.</p>
                </div>

                <div class="row">
                    <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-2">
                        <div class="icon-box">
                            <a href="https://coursera.org/share/548b8d96a324af6bfc0cc51e83fd8a49" target="_blank"
                                data-toggle="tooltip" data-placement="top"
                                title="HTML, CSS, and Javascript for Web Developers">
                                <img class="w-100"
                                    src="{{ asset('assets/img/certificates/HTML, CSS, and Javascript for Web Developers.png') }}"
                                    alt="HTML, CSS, and Javascript for Web Developers">
                                <div class="icon"></div>
                            </a>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-4">
                        <div class="icon-box">
                            <a href="https://coursera.org/share/22690493f1dfb31d4a1af775961431ee" target="_blank"
                                data-toggle="tooltip" data-placement="top"
                                title="Building Scalable Java Microservices with Spring Boot and Spring Cloud">
                                <img class="w-100"
                                    src="{{ asset('assets/img/certificates/Building Scalable Java Microservices with Spring Boot and Spring Cloud.png') }}"
                                    alt="Building Scalable Java Microservices with Spring Boot and Spring Cloud">
                            </a>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-4">
                        <div class="icon-box">
                            <a href="https://www.coursera.org/account/accomplishments/verify/9ZJL76CV6MEC"
                                target="_blank" data-toggle="tooltip" data-placement="top"
                                title="Build Your Portfolio Website with HTML and CSS">
                                <img class="w-100"
                                    src="{{ asset('assets/img/certificates/Build Your Portfolio Website with HTML and CSS.png') }}"
                                    alt="Build Your Portfolio Website with HTML and CSS">
                            </a>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-4">
                        <div class="icon-box">
                            <a href="https://www.coursera.org/account/accomplishments/verify/3ZZ8MQLX83HX"
                                target="_blank"data-toggle="tooltip" data-placement="top"
                                title="Introduction to HTML5">
                                <img class="w-100"
                                    src="{{ asset('assets/img/certificates/Introduction to HTML5.png') }}"
                                    alt="Introduction to HTML5">
                            </a>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-4">
                        <div class="icon-box">
                            <a href="https://coursera.org/share/5fc83a09d6b1a52a892010aeacc3716b" target="_blank"
                                data-toggle="tooltip" data-placement="top"
                                title="Hands-on Introduction to Linux Commands and Shell Scripting">
                                <img class="w-100"
                                    src="{{ asset('assets/img/certificates/Hands-on Introduction to Linux Commands and Shell Scripting.png') }}"
                                    alt="Hands-on Introduction to Linux Commands and Shell Scripting">
                            </a>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-4">
                        <div class="icon-box">
                            <a href="https://www.coursera.org/account/accomplishments/verify/9CEN3VRJC8KB"
                                target="_blank" data-toggle="tooltip" data-placement="top"
                                title="The Bits and Bytes of Computer Networking">
                                <img class="w-100"
                                    src="{{ asset('assets/img/certificates/The Bits and Bytes of Computer Networking.png') }}"
                                    alt="The Bits and Bytes of Computer Networking">
                            </a>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-4">
                        <div class="icon-box">
                            <a href="https://coursera.org/share/d049fb351a9a3649ce46112fbcc6b9d5"
                                target="_blank"data-toggle="tooltip" data-placement="top"
                                title="Simulation Models for Decision Making">
                                <img class="w-100"
                                    src="{{ asset('assets/img/certificates/Simulation Models for Decision Making.png') }}"
                                    alt="Simulation Models for Decision Making">
                            </a>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-4">
                        <div class="icon-box">
                            <a href="https://coursera.org/share/836471993263bcdeb09b4a46c6d28b94"
                                target="_blank"data-toggle="tooltip" data-placement="top"
                                title="Modelling and Simulation of Mechanical Systems">
                                <img class="w-100"
                                    src="{{ asset('assets/img/certificates/Modelling and simulation of mechanical systems.png') }}"
                                    alt="Modelling and Simulation of Mechanical Systems">
                            </a>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-4">
                        <div class="icon-box">
                            <a href="https://www.coursera.org/account/accomplishments/verify/3ZZ8MQLX83HX"
                                target="_blank"data-toggle="tooltip" data-placement="top"
                                title="Get Started with Adobe Illustrator">
                                <img class="w-100"
                                    src="{{ asset('assets/img/certificates/Get Started with Adobe Illustrator.png') }}"
                                    alt="Get Started with Adobe Illustrator">
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- ======= Services Section ======= -->
        <section id="services" class="services section-bg">
            <div class="container">

                <div class="section-title">
                    <h2>Services</h2>
                    <p>Delivering innovative solutions in E-Commerce, ERP, CRM, and Procurement to elevate business
                        efficiency and enhance digital experiences.</p>
                </div>

                <div class="row">
                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                        <div class="icon-box">
                            <div class="icon"><i class="bx bxl-dribbble"></i></div>
                            <h4 class="title"><a href="">E-Commerce</a></h4>
                            <p class="description">Crafting seamless online experiences for businesses to thrive in the
                                digital marketplace.</p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                        <div class="icon-box">
                            <div class="icon"><i class="bx bx-file"></i></div>
                            <h4 class="title"><a href="">ERP</a></h4>
                            <p class="description">Streamlining operations with comprehensive Enterprise Resource
                                Planning solutions for efficient business management.</p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                        <div class="icon-box">
                            <div class="icon"><i class="bx bx-tachometer"></i></div>
                            <h4 class="title"><a href="">CRM</a></h4>
                            <p class="description">Building lasting customer relationships through tailored Customer
                                Relationship Management solutions.</p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                        <div class="icon-box">
                            <div class="icon"><i class="bx bx-world"></i></div>
                            <h4 class="title"><a href="">Procurement</a></h4>
                            <p class="description">Optimizing supply chain processes with strategic procurement
                                solutions for enhanced efficiency and cost-effectiveness.</p>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Services Section -->

        <!-- ======= Portfolio Section ======= -->
        <section id="portfolio" class="portfolio section-bg">
            <div class="container">

                <div class="section-title">
                    <h2>Portfolio</h2>
                    {{-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit
                        sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias
                        ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p> --}}
                </div>

                <div class="row">
                    <div class="col-lg-12 d-flex justify-content-center">
                        <ul id="portfolio-flters">
                            <li data-filter="*" class="filter-active">All</li>
                            <li data-filter=".filter-app">App</li>
                            <li data-filter=".filter-card">Card</li>
                            <li data-filter=".filter-web">Web</li>
                        </ul>
                    </div>
                </div>

                <div class="row portfolio-container">

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-wrap">
                            <img src="assets/img/portfolio/portfolio-1.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>App 1</h4>
                                <p>App</p>
                            </div>
                            <div class="portfolio-links">
                                <a href="assets/img/portfolio/portfolio-1.jpg" data-gallery="portfolioGallery"
                                    class="portfolio-lightbox" title="App 1"><i class="bx bx-plus"></i></a>
                                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                        <div class="portfolio-wrap">
                            <img src="assets/img/portfolio/portfolio-2.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Web 3</h4>
                                <p>Web</p>
                            </div>
                            <div class="portfolio-links">
                                <a href="assets/img/portfolio/portfolio-2.jpg" data-gallery="portfolioGallery"
                                    class="portfolio-lightbox" title="Web 3"><i class="bx bx-plus"></i></a>
                                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-wrap">
                            <img src="assets/img/portfolio/portfolio-3.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>App 2</h4>
                                <p>App</p>
                            </div>
                            <div class="portfolio-links">
                                <a href="assets/img/portfolio/portfolio-3.jpg" data-gallery="portfolioGallery"
                                    class="portfolio-lightbox" title="App 2"><i class="bx bx-plus"></i></a>
                                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                        <div class="portfolio-wrap">
                            <img src="assets/img/portfolio/portfolio-4.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Card 2</h4>
                                <p>Card</p>
                            </div>
                            <div class="portfolio-links">
                                <a href="assets/img/portfolio/portfolio-4.jpg" data-gallery="portfolioGallery"
                                    class="portfolio-lightbox" title="Card 2"><i class="bx bx-plus"></i></a>
                                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                        <div class="portfolio-wrap">
                            <img src="assets/img/portfolio/portfolio-5.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Web 2</h4>
                                <p>Web</p>
                            </div>
                            <div class="portfolio-links">
                                <a href="assets/img/portfolio/portfolio-5.jpg" data-gallery="portfolioGallery"
                                    class="portfolio-lightbox" title="Web 2"><i class="bx bx-plus"></i></a>
                                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-wrap">
                            <img src="assets/img/portfolio/portfolio-6.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>App 3</h4>
                                <p>App</p>
                            </div>
                            <div class="portfolio-links">
                                <a href="assets/img/portfolio/portfolio-6.jpg" data-gallery="portfolioGallery"
                                    class="portfolio-lightbox" title="App 3"><i class="bx bx-plus"></i></a>
                                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                        <div class="portfolio-wrap">
                            <img src="assets/img/portfolio/portfolio-7.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Card 1</h4>
                                <p>Card</p>
                            </div>
                            <div class="portfolio-links">
                                <a href="assets/img/portfolio/portfolio-7.jpg" data-gallery="portfolioGallery"
                                    class="portfolio-lightbox" title="Card 1"><i class="bx bx-plus"></i></a>
                                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                        <div class="portfolio-wrap">
                            <img src="assets/img/portfolio/portfolio-8.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Card 3</h4>
                                <p>Card</p>
                            </div>
                            <div class="portfolio-links">
                                <a href="assets/img/portfolio/portfolio-8.jpg" data-gallery="portfolioGallery"
                                    class="portfolio-lightbox" title="Card 3"><i class="bx bx-plus"></i></a>
                                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                        <div class="portfolio-wrap">
                            <img src="assets/img/portfolio/portfolio-9.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Web 3</h4>
                                <p>Web</p>
                            </div>
                            <div class="portfolio-links">
                                <a href="assets/img/portfolio/portfolio-9.jpg" data-gallery="portfolioGallery"
                                    class="portfolio-lightbox" title="Web 3"><i class="bx bx-plus"></i></a>
                                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Portfolio Section -->

        <!-- ======= Testimonials Section ======= -->
        <section id="testimonials" class="testimonials section-bg">
            <div class="container">

                <div class="section-title">
                    <h2>Testimonials</h2>
                    <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit
                        sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias
                        ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
                </div>

                <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
                    <div class="swiper-wrapper">

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit
                                    rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam,
                                    risus at semper.
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                                <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img"
                                    alt="">
                                <h3>Saul Goodman</h3>
                                <h4>Ceo &amp; Founder</h4>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid
                                    cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet
                                    legam anim culpa.
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                                <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img"
                                    alt="">
                                <h3>Sara Wilsson</h3>
                                <h4>Designer</h4>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem
                                    veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint
                                    minim.
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                                <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img"
                                    alt="">
                                <h3>Jena Karlis</h3>
                                <h4>Store Owner</h4>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim
                                    fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem
                                    dolore labore illum veniam.
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                                <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img"
                                    alt="">
                                <h3>Matt Brandon</h3>
                                <h4>Freelancer</h4>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster
                                    veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam
                                    culpa fore nisi cillum quid.
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                                <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img"
                                    alt="">
                                <h3>John Larson</h3>
                                <h4>Entrepreneur</h4>
                            </div>
                        </div><!-- End testimonial item -->

                    </div>
                    <div class="swiper-pagination"></div>
                </div>

            </div>
        </section><!-- End Testimonials Section -->

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact section-bg">
            <div class="container">

                <div class="section-title">
                    <h2>Contact</h2>
                    <p>Feel Free to contact.</p>
                </div>

                <div class="row">

                    <div class="col-lg-4 col-md-4">
                        <div class="contact-about">
                            <h3>My Digital Portfolio</h3>
                            {{-- <p>Cras fermentum odio eu feugiat. Justo eget magna fermentum iaculis eu non diam phasellus.
                                Scelerisque felis imperdiet proin fermentum leo. Amet volutpat consequat mauris nunc
                                congue.</p> --}}
                            <div class="social-links">
                                <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                                <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                                <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                                <a href="https://www.linkedin.com/in/raja-ahmer-a-416702209/" target="_blank"
                                    class="linkedin"><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4">
                        <div class="info">
                            <div class="d-flex align-items-center">
                                <i class="bi bi-geo-alt"></i>
                                <p>Islamabad, Pakistan</p>
                            </div>

                            <div class="d-flex align-items-center mt-4">
                                <i class="bi bi-envelope"></i>
                                <p>rajaahmer308@gmail.com</p>
                            </div>

                            <div class="d-flex align-items-center mt-4">
                                <i class="bi bi-phone"></i>
                                <p>+92 310 584 5840</p>
                            </div>

                        </div>
                    </div>

                    <div class="col-lg-5 col-md-8">
                        <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                            <div class="form-group">
                                <input type="text" name="name" class="form-control" id="name"
                                    placeholder="Your Name" required>
                            </div>
                            <div class="form-group mt-3">
                                <input type="email" class="form-control" name="email" id="email"
                                    placeholder="Your Email" required>
                            </div>
                            <div class="form-group mt-3">
                                <input type="text" class="form-control" name="subject" id="subject"
                                    placeholder="Subject" required>
                            </div>
                            <div class="form-group mt-3">
                                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                            </div>
                            <div class="my-3">
                                <div class="loading">Loading</div>
                                <div class="error-message"></div>
                                <div class="sent-message">Your message has been sent. Thank you!</div>
                            </div>
                            <div class="text-center"><button type="submit">Send Message</button></div>
                        </form>
                    </div>

                </div>

            </div>
        </section><!-- End Contact Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="container">
            <div class="copyright">
                &copy; Copyright <strong><span>My Digital Portfolio</span></strong>. All Rights Reserved
            </div>
        </div>
    </footer><!-- End  Footer -->

    <a href="#hero" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

</body>

</html>
