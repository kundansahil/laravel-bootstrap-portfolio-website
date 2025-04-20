<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
		
		<meta name="csrf-token" content="{{ csrf_token() }}">
       
		<title>{{ config('app.name', 'Kundan Portfolio') }}</title>
		<link rel="apple-touch-icon" sizes="76x76" href="https://img.icons8.com/color/48/portfolio.png">
		<link rel="icon" type="image/png" href="https://img.icons8.com/color/48/portfolio.png">
         <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&family=Edu+TAS+Beginner:wght@400..700&family=Jost:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
		
        <!-- Icon Font Stylesheet -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

        <!-- Libraries Stylesheet -->
        <link rel="stylesheet" href="lib/animate/animate.min.css"/>
        <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">


        <!-- Customized Bootstrap Stylesheet -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="css/style.css" rel="stylesheet">
		
   <style>
   
	.text-justify{
		text-align:justify;
	}
   </style>
    </head>
   <body>

        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Navbar Start -->
        <div class="container-fluid nav-section border-0">
            <nav class="navbar navbar-light">
               <div class="navbar-nav flex-column">
    <a href="#Home" class="nav-item nav-link active"><span class="fas fa-home"></span> Home</a>
    <a href="#MyEducation" class="nav-item nav-link"><span class="fas fa-graduation-cap"></span> Education</a>
    <a href="#MyExperience" class="nav-item nav-link"><span class="fas fa-briefcase"></span> Experience</a>
    <a href="#MySkills" class="nav-item nav-link"><span class="fas fa-tools"></span> Skills</a>
    <a href="#Service" class="nav-item nav-link"><span class="fas fa-concierge-bell"></span> Service</a>
    <a href="#MyProjects" class="nav-item nav-link"><span class="fas fa-tasks"></span> Projects</a>
    <a href="#Blog" class="nav-item nav-link"><span class="fas fa-pen"></span> Blog</a>
    <a href="#MyTestimonial" class="nav-item nav-link"><span class="fas fa-comments"></span> Testimonial</a>
    <a href="#Contact" class="nav-item nav-link"><span class="fas fa-envelope"></span> Contact</a>
</div>

            </nav>
        </div>
        <!-- Navbar End -->

        <!-- Header Start -->
        <div class="container-fluid" id="Home">
            <div class="container">
                <div class="row g-0">
                    <div class="col-12 col-lg-3">
                        <div class="header-content bg-dark h-100 pt-6 pe-6 pb-6">
                            <a href="index.html" class="navbar-brand d-inline-flex pb-5 wow fadeInUp" data-wow-delay="0.1s">
                                <h1 class="display-6 text-white mb-0">My Portfolio</h1>
                            </a>
                            <div class="text-start d-flex flex-column justify-content-center wow fadeInUp" data-wow-delay="0.3s">
                                <p class="text-white sub-title">👋 Hello I'm Kundan</p>
                                <h1 class="display-6 text-white mb-0 ">Creative Fullstack Web Developer Based in India</h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-9">
                        <div class="header-img d-flex h-100 pt-6 ps-6 pb-6">
                            <div class="row g-5">
                                <div class="col-xl-6 wow fadeInUp" data-wow-delay="0.1s">
                                    <div class="bg-light p-4" style="border-radius: 68% 32% 100% 0% / 0% 75% 25% 100%;">
                                        <img src="img/my-picture1.jpeg" alt="Profile-image"class="img-fluid w-100" style="border-radius: 68% 32% 100% 0% / 0% 75% 25% 100%;" alt="Image">
                                    </div>
                                </div>
                                <div class="col-xl-6 wow fadeInUp" data-wow-delay="0.3s">
                                    <h1 class="display-6 mb-4">Full-Stack Web Developer</h1>
                                    <p class="mb-4"style="text-align:justify;">With a passion for crafting seamless digital experiences, I specialize in building dynamic, user-friendly websites from the ground up. Whether it's developing robust backend systems or designing visually engaging frontends, I bring a full spectrum of skills to every project. From concept to deployment, I ensure smooth functionality, responsiveness, and performance—tailoring each solution to meet the unique needs of clients.</p>
                                    <div class="d-flex align-items-center mb-2">
                                        <i class="fas fa-map-marker-alt text-primary me-3"></i>
                                        <p class="text-dark mb-0">HBC Dhanas Chandigarh India</p>
                                    </div>
                                    <div class="d-flex align-items-center mb-2">
                                        <i class="fas fa-envelope text-primary me-3"></i>
                                        <p class="text-dark mb-0">kundansahil0993@gmail.com</p>
                                    </div>
                                    <div class="d-flex align-items-center mb-2">
                                        <i class="fa fa-phone-alt text-primary me-3"></i>
                                        <p class="text-dark mb-0">(+91) 86991 00213</p>
                                    </div>
                                    <div class="d-flex align-items-center mb-4">
                                        <i class="fas fa-globe text-primary me-3"></i>
                                        <p class="text-dark mb-0"><a target="blank" href="https://webcraffix.great-site.net">Webcraffix</a></p>
                                    </div>
									
									<div class="d-flex">
                                        <a class="btn btn-primary btn-sm-square me-3" target="blank" href="https://www.facebook.com/profile.php?id=100071641886316&mibextid=ZbWKwL"><i class="fab fa-facebook-f text-white"></i></a>
                                        <a class="btn btn-primary btn-sm-square me-3" target="blank" href="https://www.youtube.com/@dotnetsolution"><i class="fab fa-youtube text-white"></i></a>
                                        <a class="btn btn-primary btn-sm-square me-3" target="blank" href="https://www.instagram.com/ks__kreative?igsh=cG9ybjh3Z2w0b3g0"><i class="fab fa-instagram text-white"></i></a>
                                        <a class="btn btn-primary btn-sm-square me-0" target="blank" href="https://www.linkedin.com/in/kundan-sahil-3688a81b6?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app"><i class="fab fa-linkedin-in text-white"></i></a>
                                    </div>
									<div class="d-flex align-items-center mt-4">
                                       <a href="{{ asset('Kundan-latest-resume.pdf') }}"  onclick="showLoading()" download="Kundan-latest-resume.pdf" class="btn btn-primary py-2 px-4" > <i class="fas fa-download me-2"></i>Download My CV</a>
                                  </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header End -->

<!-- Education Start -->
        <div class="container-fluid"id="MyEducation">
            <div class="container">
                <div class="row g-0">
                    <div class="col-lg-3">
                        <div class="education-header bg-dark h-100 pt-6 pe-6 pb-6">
                            <div class="text-start d-flex flex-column justify-content-center wow fadeInUp" data-wow-delay="0.1s">
                                <p class="text-white sub-title">Education</p>
                                <h1 class="display-6 text-white mb-0">My education qualification</h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="education-content h-100 pt-6 ps-6 pb-6">
                            <div class="row g-4">
                                <div class="col-12">
                                    <div class="education-item rounded p-4 h-100 wow fadeInUp" data-wow-delay="0.1s">
                                        <div class="d-flex align-items-center mb-3">
                                            <p class="fs-5 mb-0 me-4">Chandigarh Polytechnic college,Punjab</p>
                                            <div>
                                                <span class="fa fa-calendar me-1"></span> 2019 - 2022
                                            </div>
                                        </div>
                                        <h4 class="mb-3">Diploma in Computer Science and Engineering</h4>
                                        <p class="mb-0 text-justify">I gained a solid foundation in computer science principles, software development, and engineering practices during my diploma. This program helped me develop critical problem-solving skills and a strong understanding of algorithms, data structures, and programming languages. From hands-on projects to real-world applications, my education equipped me to design and implement efficient, scalable systems while staying up-to-date with emerging technologies in the industry.</p>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="education-item rounded p-4 h-100 wow fadeInUp" data-wow-delay="0.3s">
                                        <div class="d-flex align-items-center mb-3">
                                            <p class="fs-5 mb-0 me-4">National Institute of Open Schooling</p>
                                            <div>
                                                <span class="fa fa-calendar me-1"></span> 2018 - 2019
                                            </div>
                                        </div>
                                        <h4 class="mb-3">Senior Sec. Certification</h4>
                                      <p class="mb-0 text-justify">The Senior Secondary Certification cultivated essential skills in critical thinking, creativity, and effective communication. This diverse educational background has significantly contributed to my proficiency as a full-stack developer, allowing me to integrate technical expertise with an understanding of user experience and design principles. The analytical and creative skills gained during this period enable me to approach complex problems with innovative solutions, ensuring a holistic approach to web development.</p>
									</div>
                                </div>
                                <div class="col-12">
                                    <div class="education-item rounded p-4 h-100 wow fadeInUp" data-wow-delay="0.5s">
                                        <div class="d-flex align-items-center mb-3">
                                            <p class="fs-5 mb-0 me-4">Infowiz, Chandigarh</p>
                                            <div>
                                                <span class="fa fa-calendar me-1"></span> Aug 2021 - Sep 2021
                                            </div>
                                        </div>
                                        <h4 class="mb-3">IT Training in PHP</h4>
<p class="mb-0 text-justify">During my IT training in PHP, I acquired comprehensive knowledge of server-side scripting and web application development. This hands-on experience enabled me to understand core concepts such as object-oriented programming, database integration, and MVC architecture. Working on real-world projects allowed me to develop robust and scalable applications, enhancing my problem-solving abilities and technical skills. This training served as a pivotal step in my journey as a full-stack developer, equipping me with the tools necessary to build dynamic, user-focused web solutions.</p>

<h4 class="mb-3 mt-3">PHP ISO & Experience Certification</h4>
<p class="mb-0 text-justify">Achieving my PHP ISO & Experience Certification further solidified my understanding of best practices and industry standards in web development. This certification reflects my commitment to maintaining high-quality coding practices and ensures that I am well-versed in the latest PHP frameworks and tools. The knowledge gained during this certification enhances my ability to deliver reliable and efficient web applications that meet client expectations and industry requirements.</p>

<h4 class="mb-3 mt-3">Personality Development Course Certification</h4>
<p class="mb-0 text-justify">Completing a Personality Development Course has greatly enriched my interpersonal skills and professional demeanor. This course emphasized effective communication, teamwork, and leadership qualities, enabling me to work collaboratively in diverse environments. The skills acquired through this certification not only enhance my interactions with clients and colleagues but also empower me to approach challenges with confidence and a positive attitude, essential traits for success in the tech industry.</p>
</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Education End -->
		
        <!-- Experience Start -->
        <div class="container-fluid"id="MyExperience">
            <div class="container">
                <div class="row g-0">
                    <div class="col-lg-3">
                        <div class="experience-header bg-dark h-100 pt-6 pe-6 pb-6">
                            <div class="text-start d-flex flex-column justify-content-center wow fadeInUp" data-wow-delay="0.1s">
                                <p class="text-white sub-title">Experience</p>
                                <h1 class="display-6 text-white mb-0">My real work experience</h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="experience-content h-100 pt-6 ps-6 pb-6">
                            <div class="row g-4">
                                <div class="col-12">
                                    <div class="experience-item rounded p-4 h-100 wow fadeInUp" data-wow-delay="0.1s">
                                        <div class="d-flex align-items-center mb-3">
                                            <p class="fs-5 mb-0 me-4">Freelancer</p>
                                            <div>
                                                <span class="fa fa-calendar me-1"></span> Jan 2022 - Present
                                            </div>
                                        </div>
                                        <h4 class="mb-3">Fullstack Web Developer</h4>
                                       <p class="mb-0 text-justify">As a Full-Stack Web Developer, I have successfully delivered a range of dynamic and scalable web applications tailored to client needs. Leveraging the power of Laravel for backend development, I’ve built efficient APIs, integrated complex databases, and implemented secure authentication systems. On the frontend, I ensure responsive, intuitive user interfaces using modern JavaScript frameworks and CSS. My role as a freelancer has given me the opportunity to manage projects end-to-end—from concept to deployment—ensuring seamless functionality, optimization, and performance across all platforms.</p>

                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="experience-item rounded p-4 h-100 wow fadeInUp" data-wow-delay="0.3s">
                                        <div class="d-flex align-items-center mb-3">
                                            <p class="fs-5 mb-0 me-4">Invoilate Solutions</p>
                                            <div>
                                                <span class="fa fa-calendar me-1"></span> May 2024 - August 2024
                                            </div>
                                        </div>
                                        <h4 class="mb-3">Laravel Developer</h4>
                                        <p class="mb-0 text-justify">During my time at Invoilate Solutions, I worked extensively as a Laravel Developer, contributing to the development of high-performance web applications. I was responsible for building scalable backend solutions using Laravel’s MVC framework, optimizing database queries, and implementing RESTful APIs. My work involved collaborating with cross-functional teams to integrate frontend designs and ensure seamless functionality. I also took on the challenge of debugging, refactoring legacy code, and enhancing application performance to meet evolving business needs. This experience honed my skills in delivering clean, maintainable code within tight deadlines.</p>

                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="experience-item rounded p-4 h-100 wow fadeInUp" data-wow-delay="0.5s">
                                        <div class="d-flex align-items-center mb-3">
                                            <p class="fs-5 mb-0 me-4">G-Tech Imformatics</p>
                                            <div>
                                                <span class="fa fa-calendar me-1"></span> July 2022 – oct 2022
                                            </div>
                                        </div>
                                        <h4 class="mb-3">Php and Frontend Developer</h4>
                                       <p class="mb-0 text-justify">At G-Tech Informatics, I worked as a PHP and Frontend Developer, where I developed and maintained dynamic websites and applications. My role involved writing clean and efficient PHP code to power backend processes, while also designing and implementing responsive frontend user interfaces using HTML, CSS, and JavaScript. I collaborated closely with UI/UX designers to ensure seamless user experiences across various platforms. Additionally, I was responsible for optimizing application performance, debugging code, and integrating third-party APIs, which strengthened my expertise in both server-side scripting and frontend development.</p>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Exparience End -->


        <!-- Skills Start -->
        <div class="container-fluid"id="MySkills">
            <div class="container">
                <div class="row g-0">
                    <div class="col-lg-3">
                        <div class="skills-header h-100 bg-dark pt-6 pe-6 pb-6">
                            <div class="text-start d-flex flex-column justify-content-center wow fadeInUp" data-wow-delay="0.1s">
                                <p class="text-white sub-title">Skills</p>
                                <h1 class="display-6 text-white mb-0">My expertise skills</h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="skills-content h-100 pt-6 ps-6 pb-6">
                            <div class="row g-4">
                                <div class="col-6 col-md-4 col-lg-4 col-xl-3">
                                    <div class="skills-item text-center rounded p-4 h-100 wow fadeInUp" data-wow-delay="0.1s">
                                        <div class="text-primary text-center mb-3"><span class="fab fa-wordpress fa-3x"></span></div>
                                        <div class="counter-counting d-flex justify-content-center">
                                            <h4 class="display-6" data-toggle="counter-up">80</h4>
                                            <h4 class="display-6">%</h4>
                                        </div>
                                        <p class="mb-0">WordPress</p>
                                    </div>
                                </div>
                                <div class="col-6 col-md-4 col-lg-4 col-xl-3">
									<div class="skills-item text-center rounded p-4 h-100 wow fadeInUp" data-wow-delay="0.3s">
										<div class="text-primary text-center mb-3"><span class="fab fa-laravel fa-3x"></span></div>
										<div class="counter-counting d-flex justify-content-center">
											<h4 class="display-6" data-toggle="counter-up">90</h4>
											<h4 class="display-6">%</h4>
										</div>
										<p class="mb-0">Laravel</p>
									</div>
								</div>

                               <div class="col-6 col-md-4 col-lg-4 col-xl-3">
								<div class="skills-item text-center rounded p-4 h-100 wow fadeInUp" data-wow-delay="0.5s">
									<div class="text-primary text-center mb-3"><span class="fab fa-php fa-3x"></span></div>
									<div class="counter-counting d-flex justify-content-center">
										<h4 class="display-6" data-toggle="counter-up">90</h4>
										<h4 class="display-6">%</h4>
									</div>
									<p class="mb-0">Php</p>
								</div>
								</div>
								<div class="col-6 col-md-4 col-lg-4 col-xl-3">
								<div class="skills-item text-center rounded p-4 h-100 wow fadeInUp" data-wow-delay="0.7s">
									<div class="text-primary text-center mb-3"><span class="fas fa-database fa-3x"></span></div>
									<div class="counter-counting d-flex justify-content-center">
										<h4 class="display-6" data-toggle="counter-up">85</h4>
										<h4 class="display-6">%</h4>
									</div>
									<p class="mb-0">MySQL</p>
								</div>
								</div>

                                <div class="col-6 col-md-4 col-lg-4 col-xl-3">
                                    <div class="skills-item text-center rounded p-4 h-100 wow fadeInUp" data-wow-delay="0.1s">
                                        <div class="text-primary text-center mb-3"><span class="fab fa-js-square fa-3x"></span></div>
                                        <div class="counter-counting d-flex justify-content-center">
                                            <h4 class="display-6" data-toggle="counter-up">70</h4>
                                            <h4 class="display-6">%</h4>
                                        </div>
                                        <p class="mb-0">JavaScript</p>
                                    </div>
                                </div>
                                <div class="col-6 col-md-4 col-lg-4 col-xl-3">
                                    <div class="skills-item text-center rounded p-4 h-100 wow fadeInUp" data-wow-delay="0.3s">
                                        <div class="text-primary text-center mb-3"><span class="fab fa-html5 fa-3x"></span></div>
                                        <div class="counter-counting d-flex justify-content-center">
                                            <h4 class="display-6" data-toggle="counter-up">95</h4>
                                            <h4 class="display-6">%</h4>
                                        </div>
                                        <p class="mb-0">HTML & CSS</p>
                                    </div>
                                </div>
								<div class="col-6 col-md-4 col-lg-4 col-xl-3">
									<div class="skills-item text-center rounded p-4 h-100 wow fadeInUp" data-wow-delay="0.9s">
										<div class="text-primary text-center mb-3"><span class="fas fa-network-wired fa-3x"></span></div>
										<div class="counter-counting d-flex justify-content-center">
											<h4 class="display-6" data-toggle="counter-up">80</h4>
											<h4 class="display-6">%</h4>
										</div>
										<p class="mb-0">API Development</p>
									</div>
								</div>
								<div class="col-6 col-md-4 col-lg-4 col-xl-3">
									<div class="skills-item text-center rounded p-4 h-100 wow fadeInUp" data-wow-delay="1.1s">
										<div class="text-primary text-center mb-3"><span class="fas fa-server fa-3x"></span></div>
										<div class="counter-counting d-flex justify-content-center">
											<h4 class="display-6" data-toggle="counter-up">85</h4>
											<h4 class="display-6">%</h4>
										</div>
										<p class="mb-0">Server Management</p>
									</div>
								</div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Skills End -->


       <!-- Service Start -->
<div class="container-fluid" id="Service">
    <div class="container">
        <div class="row g-0">
            <div class="col-lg-3">
                <div class="service-header h-100 bg-dark pt-6 pe-6 pb-6">
                    <div class="text-start d-flex flex-column justify-content-center wow fadeInUp" data-wow-delay="0.1s">
                        <p class="text-white sub-title">My Services</p>
                        <h1 class="display-6 text-white mb-0">What I do for you</h1>
                    </div>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="service-content h-100 pt-6 ps-6 pb-6">
                    <div class="row g-4">
                        <div class="col-12">
                            <div class="service-item p-4 wow fadeInUp" data-wow-delay="0.1s">
                                <div class="row g-4 align-items-center">
                                    <div class="col-xl-2">
                                        <i class="fas fa-code fa-3x"></i>
                                    </div>
                                    <div class="col-xl-3">
                                        <a href="#" class="h4 mb-0">Full-Stack Development</a>
                                    </div>
                                    <div class="col-xl-4">
                                        <p class="mb-0">Building dynamic and responsive web applications using Laravel for seamless user experiences.</p>
                                    </div>
                                    <div class="col-xl-3">
                                        <p><i class="fa fa-check me-2"></i> Backend Development</p>
                                        <p><i class="fa fa-check me-2"></i> Frontend Integration</p>
                                        <p class="mb-0"><i class="fa fa-check me-2"></i> API Development</p>
                                    </div>
                                </div>
                            </div>
                        </div>
						<div class="col-12">
							<div class="service-item p-4 wow fadeInUp" data-wow-delay="0.1s">
								<div class="row g-4 align-items-center">
									<div class="col-xl-2">
										<i class="fas fa-bezier-curve fa-3x"></i>
									</div>
									<div class="col-xl-3">
										<a href="#" class="h4 mb-0">Creative Design</a>
									</div>
									<div class="col-xl-4">
										<p class="mb-0">With a keen eye for aesthetics and a deep understanding of user experience, I offer creative design solutions that not only captivate but also convert. My approach is centered on aligning design with your brand's vision and goals, ensuring a cohesive look and feel across all platforms.</p>
									</div>
									<div class="col-xl-3">
										<p><i class="fa fa-check me-2"></i> UI/UX Design</p>
										<p><i class="fa fa-check me-2"></i> Research</p>
										<p class="mb-0"><i class="fa fa-check me-2"></i> Mobile Responsive Design</p>
										<p class="mb-0"><i class="fa fa-check me-2"></i> Branding Strategy</p>
									</div>
								</div>
							</div>
						</div>

                        <div class="col-12">
                            <div class="service-item p-4 wow fadeInUp" data-wow-delay="0.3s">
                                <div class="row g-4 align-items-center">
                                    <div class="col-xl-2">
                                        <i class="fas fa-database fa-3x"></i>
                                    </div>
                                    <div class="col-xl-3">
                                        <a href="#" class="h4 mb-0">Database Management</a>
                                    </div>
                                    <div class="col-xl-4">
                                        <p class="mb-0">Optimizing database structures and queries for performance and scalability using MySQL.</p>
                                    </div>
                                    <div class="col-xl-3">
                                        <p><i class="fa fa-check me-2"></i> MySQL Integration</p>
                                        <p><i class="fa fa-check me-2"></i> Data Security</p>
                                        <p class="mb-0"><i class="fa fa-check me-2"></i> Performance Tuning</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="service-item p-4 wow fadeInUp" data-wow-delay="0.5s">
                                <div class="row g-4 align-items-center">
                                    <div class="col-xl-2">
                                        <i class="fas fa-cogs fa-3x"></i>
                                    </div>
                                    <div class="col-xl-3">
                                        <a href="#" class="h4 mb-0">Server Management</a>
                                    </div>
                                    <div class="col-xl-4">
                                        <p class="mb-0">Ensuring reliable hosting solutions and optimal performance of web applications.</p>
                                    </div>
                                    <div class="col-xl-3">
                                        <p><i class="fa fa-check me-2"></i> Deployment</p>
                                        <p><i class="fa fa-check me-2"></i> Server Optimization</p>
                                        <p class="mb-0"><i class="fa fa-check me-2"></i> Security Management</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Service End -->


<!-- Portfolio Start -->
<div class="container-fluid" id="MyProjects">
    <div class="container">
        <div class="row g-0">
            <div class="col-lg-3">
                <div class="portfolio-header h-100 bg-dark pt-6 pe-6 pb-6">
                    <div class="text-start d-flex flex-column justify-content-center wow fadeInUp" data-wow-delay="0.1s">
                        <p class="text-white sub-title">Portfolio</p>
                        <h1 class="display-6 text-white mb-0">My Recent Works</h1>
                    </div>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="portfolio-content h-100 pt-6 ps-6 pb-6">
                    <div class="portfolio-item py-5 border-bottom wow fadeInUp" data-wow-delay="0.1s">
                        <div class="row g-4 align-items-center">
                            <div class="col-xl-6">
                                <h4 class="text-body">School Management System</h4>
                                <h1 class="display-6 mb-0">Comprehensive Solution for Educational Institutions</h1>
                                <p class="mb-0">Developed a robust school management system that streamlines administrative tasks, enhances communication between teachers and parents, and improves student engagement through an intuitive user interface.</p>
                            </div>
                            <div class="col-9 col-xl-4">
                                <div class="portfolio-img">
                                    <div class="portfolio-img-inner">
                                        <img src="img/schoolmanagement.jpg" class="img-fluid" alt="Image">
                                    </div>
                                </div>
                            </div>
                            <div class="col-3 col-xl-2">
                                <div class="view-img">
                                    <a href="img/schoolmanagement.jpg" class="btn btn-primary btn-lg-square" data-lightbox="portfolio-1"><i class="fas fa-plus"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="portfolio-item py-5 border-bottom wow fadeInUp" data-wow-delay="0.3s">
                        <div class="row g-4 align-items-center">
                            <div class="col-xl-6">
                                <h4 class="text-body">Hospital Management System</h4>
                                <h1 class="display-6 mb-0">Streamlining Healthcare Services</h1>
                                <p class="mb-0">Created an efficient hospital management system to manage patient records, appointments, and billing processes, enhancing operational efficiency and patient care quality.</p>
                            </div>
                            <div class="col-9 col-xl-4">
                                <div class="portfolio-img">
                                    <div class="portfolio-img-inner">
                                        <img src="img/hospital.jpg" class="img-fluid" alt="Image">
                                    </div>
                                </div>
                            </div>
                            <div class="col-3 col-xl-2">
                                <div class="view-img">
                                    <a href="img/hospital.jpg" class="btn btn-primary btn-lg-square" data-lightbox="portfolio-2"><i class="fas fa-plus"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="portfolio-item py-5 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="row g-4 align-items-center">
                            <div class="col-xl-6">
                                <h4 class="text-body">HIV Awareness and Support Website</h4>
                                <h1 class="display-6 mb-0">Informing and Supporting Communities</h1>
                                <p class="mb-0">Developed an informational website focused on HIV awareness, providing resources, support services, and community engagement tools for affected individuals.</p>
                            </div>
                            <div class="col-9 col-xl-4">
                                <div class="portfolio-img">
                                    <div class="portfolio-img-inner">
                                        <img src="img/hiv.jpg" class="img-fluid" alt="Image">
                                    </div>
                                </div>
                            </div>
                            <div class="col-3 col-xl-2">
                                <div class="view-img">
                                    <a href="img/hiv.jpg" class="btn btn-primary btn-lg-square" data-lightbox="portfolio-3"><i class="fas fa-plus"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="portfolio-item py-5 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="row g-4 align-items-center">
                            <div class="col-xl-6">
                                <h4 class="text-body">Taxi Booking Website</h4>
                                <h1 class="display-6 mb-0">Efficient Transportation Solutions</h1>
                                <p class="mb-0">Designed a user-friendly taxi booking platform that simplifies ride-hailing, enhances user experience, and provides real-time tracking features.</p>
                            </div>
                            <div class="col-9 col-xl-4">
                                <div class="portfolio-img">
                                    <div class="portfolio-img-inner">
                                        <img src="img/taxi.jpg" class="img-fluid" alt="Image">
                                    </div>
                                </div>
                            </div>
                            <div class="col-3 col-xl-2">
                                <div class="view-img">
                                    <a href="img/taxi.jpg" class="btn btn-primary btn-lg-square" data-lightbox="portfolio-4"><i class="fas fa-plus"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Portfolio End -->


<!-- Blog Start -->
<div class="container-fluid" id="Blog">
    <div class="container">
        <div class="row g-0">
            <div class="col-lg-3">
                <div class="blog-header h-100 bg-dark pt-6 pe-6 pb-6">
                    <div class="text-start d-flex flex-column justify-content-center wow fadeInUp" data-wow-delay="0.1s">
                        <p class="text-white sub-title">Blog</p>
                        <h1 class="display-6 text-white mb-0">Recent Insights</h1>
                    </div>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="blog-content h-100 pt-6 ps-6 pb-6">
                    <div class="row g-4">
                        <div class="col-xl-6">
                            <div class="blog-item wow fadeInUp" data-wow-delay="0.1s">
                                <div class="row g-4">
                                    <div class="col-4">
                                        <div class="blog-item-img bg-dark h-100">
                                            <a href="#">
                                                <img src="img/blog-1.jpg" class="img-fluid w-100 h-100" style="object-fit: cover;" alt="Image">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-8">
                                        <div class="h-100">
                                            <p class="text-body mb-3"><i class="fa fa-calendar-alt me-2"></i> September 28, 2024</p>
                                            <a href="#" class="d-inline-block h4 mb-4">Enhancing User Experience in Web Design</a>
                                            <div class="py-2 px-3 bg-light d-flex justify-content-between">
                                                <p class="mb-0 text-body">By <a href="#" class="h6">Kundan Sahil</a></p>
                                                <p class="mb-0 text-body">In <a href="#" class="h6">Web Development</a></p>
                                            </div>
                                            <p class="text-body">Exploring effective strategies to improve user interfaces and experiences in modern web applications, drawing from my experience with school management systems and healthcare platforms.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="blog-item wow fadeInUp" data-wow-delay="0.3s">
                                <div class="row g-4">
                                    <div class="col-4">
                                        <div class="blog-item-img bg-dark h-100">
                                            <a href="#">
                                                <img src="img/blog-2.jpg" class="img-fluid w-100 h-100" style="object-fit: cover;" alt="Image">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-8">
                                        <div class="h-100">
                                            <p class="text-body mb-3"><i class="fa fa-calendar-alt me-2"></i> October 5, 2024</p>
                                            <a href="#" class="d-inline-block h4 mb-4">The Importance of Security in Online Platforms</a>
                                            <div class="py-2 px-3 bg-light d-flex justify-content-between">
                                                <p class="mb-0 text-body">By <a href="#" class="h6">Kundan Sahil</a></p>
                                                <p class="mb-0 text-body">In <a href="#" class="h6">Cybersecurity</a></p>
                                            </div>
                                            <p class="text-body">A deep dive into essential security practices for web applications, including insights gained from my work on hospital management systems and HIV-related websites.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="blog-item wow fadeInUp" data-wow-delay="0.5s">
                                <div class="row g-4">
                                    <div class="col-4">
                                        <div class="blog-item-img bg-dark h-100">
                                            <a href="#">
                                                <img src="img/blog-3.jpg" class="img-fluid w-100 h-100" style="object-fit: cover;" alt="Image">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-8">
                                        <div class="h-100">
                                            <p class="text-body mb-3"><i class="fa fa-calendar-alt me-2"></i> October 15, 2024</p>
                                            <a href="#" class="d-inline-block h4 mb-4">Developing Intuitive User Interfaces</a>
                                            <div class="py-2 px-3 bg-light d-flex justify-content-between">
                                                <p class="mb-0 text-body">By <a href="#" class="h6">Kundan Sahil</a></p>
                                                <p class="mb-0 text-body">In <a href="#" class="h6">UI/UX</a></p>
                                            </div>
                                            <p class="text-body">Discussing best practices for creating user-friendly interfaces that enhance user interaction and satisfaction, influenced by my portfolio projects.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="blog-item wow fadeInUp" data-wow-delay="0.7s">
                                <div class="row g-4">
                                    <div class="col-4">
                                        <div class="blog-item-img bg-dark h-100">
                                            <a href="#">
                                                <img src="img/blog-4.jpg" class="img-fluid w-100 h-100" style="object-fit: cover;" alt="Image">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-8">
                                        <div class="h-100">
                                            <p class="text-body mb-3"><i class="fa fa-calendar-alt me-2"></i> October 20, 2024</p>
                                            <a href="#" class="d-inline-block h4 mb-4">Leveraging Technology in Healthcare</a>
                                            <div class="py-2 px-3 bg-light d-flex justify-content-between">
                                                <p class="mb-0 text-body">By <a href="#" class="h6">Kundan Sahil</a></p>
                                                <p class="mb-0 text-body">In <a href="#" class="h6">Healthcare</a></p>
                                            </div>
                                            <p class="text-body">Examining the role of technology in improving healthcare services, particularly through projects I've developed in hospital management.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 wow fadeInUp" data-wow-delay="0.9s">
                            <div class="blog-btn d-flex justify-content-center">
                                <p class="mb-0 me-2">For More Insights, Visit</p>
                                <a href="#" class="btn d-inline-block p-0">Our Blog</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Blog End -->



      <!-- Testimonial Start -->
<div class="container-fluid" id="MyTestimonial">
    <div class="container">
        <div class="row g-0">
            <div class="col-lg-3">
                <div class="testimonial-header h-100 bg-dark pt-6 pe-6 pb-6">
                    <div class="text-start d-flex flex-column justify-content-center wow fadeInUp" data-wow-delay="0.1s">
                        <p class="text-white sub-title">Testimonial</p>
                        <h1 class="display-6 text-white mb-0">What People Say</h1>
                    </div>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="testimonial-content h-100 pt-6 ps-6 pb-6">
                    <div class="testimonial-carousel owl-carousel bg-light wow fadeInUp" data-wow-delay="0.1s">
                        <div class="testimonial-item" data-dot="<img class='img-fluid' src='img/testimonial-img-1.jpg' alt=''>">
                            <div class="row gy-4 gx-2 mb-4">
                                <div class="col-sm-6">
                                    <div class="d-flex justify-content-sm-end">
                                        <div class="testimonial-inner-img border border-primary border-3 me-4" style="width: 100px; height: 100px;">
                                            <img src="img/testimonial-img-1.jpg" class="img-fluid" style="object-fit: cover;" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div>
                                        <h5 class="mb-2">John Abraham</h5>
                                        <p class="mb-0">New York, USA</p>
                                    </div>
                                </div>
                            </div>
                            <div class="text-sm-center">
                                <p>Kundan has been a fantastic developer to work with! His insights on user experience helped us revamp our website, resulting in a significant increase in user engagement.</p>
                                <div class="d-flex justify-content-sm-center">
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star text-primary"></i>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-item" data-dot="<img class='img-fluid' src='img/testimonial-img-2.jpg' alt=''>">
                            <div class="row gy-4 gx-2 mb-4">
                                <div class="col-sm-6">
                                    <div class="d-flex justify-content-sm-end">
                                        <div class="testimonial-inner-img border border-primary border-3 me-4" style="width: 100px; height: 100px;">
                                            <img src="img/testimonial-img-2.jpg" class="img-fluid" style="object-fit: cover;" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div>
                                        <h5 class="mb-2">Sarah Connor</h5>
                                        <p class="mb-0">Los Angeles, USA</p>
                                    </div>
                                </div>
                            </div>
                            <div class="text-sm-center">
                                <p>Kundan's expertise in Laravel development is unparalleled. He delivered our project ahead of schedule and maintained excellent communication throughout. Highly recommend!</p>
                                <div class="d-flex justify-content-sm-center">
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star text-primary"></i>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-item" data-dot="<img class='img-fluid' src='img/testimonial-img-3.jpg' alt=''>">
                            <div class="row gy-4 gx-2 mb-4">
                                <div class="col-sm-6">
                                    <div class="d-flex justify-content-sm-end">
                                        <div class="testimonial-inner-img border border-primary border-3 me-4" style="width: 100px; height: 100px;">
                                            <img src="img/testimonial-img-3.jpg" class="img-fluid" style="object-fit: cover;" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div>
                                        <h5 class="mb-2">Michael Smith</h5>
                                        <p class="mb-0">Chicago, USA</p>
                                    </div>
                                </div>
                            </div>
                            <div class="text-sm-center">
                                <p>Working with Kundan on our healthcare platform was a breeze. His understanding of both backend and frontend technologies resulted in a seamless user experience.</p>
                                <div class="d-flex justify-content-sm-center">
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star text-primary"></i>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-item" data-dot="<img class='img-fluid' src='img/testimonial-img-1.jpg' alt=''>">
                            <div class="row gy-4 gx-2 mb-4">
                                <div class="col-sm-6">
                                    <div class="d-flex justify-content-sm-end">
                                        <div class="testimonial-inner-img border border-primary border-3 me-4" style="width: 100px; height: 100px;">
                                            <img src="img/testimonial-img-1.jpg" class="img-fluid" style="object-fit: cover;" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div>
                                        <h5 class="mb-2">Anna Taylor</h5>
                                        <p class="mb-0">San Francisco, USA</p>
                                    </div>
                                </div>
                            </div>
                            <div class="text-sm-center">
                                <p>Kundan's attention to detail and passion for web development truly sets him apart. He provided invaluable support during our project, and I couldn't be happier with the results!</p>
                                <div class="d-flex justify-content-sm-center">
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star text-primary"></i>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-item" data-dot="<img class='img-fluid' src='img/testimonial-img-2.jpg' alt=''>">
                            <div class="row gy-4 gx-2 mb-4">
                                <div class="col-sm-6">
                                    <div class="d-flex justify-content-sm-end">
                                        <div class="testimonial-inner-img border border-primary border-3 me-4" style="width: 100px; height: 100px;">
                                            <img src="img/testimonial-img-2.jpg" class="img-fluid" style="object-fit: cover;" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div>
                                        <h5 class="mb-2">Laura Johnson</h5>
                                        <p class="mb-0">Houston, USA</p>
                                    </div>
                                </div>
                            </div>
                            <div class="text-sm-center">
                                <p>Kundan's work has transformed our online presence! He is highly skilled and dedicated, making the entire process smooth and enjoyable.</p>
                                <div class="d-flex justify-content-sm-center">
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star text-primary"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Testimonial End -->


        <!-- Contact Start -->
        <div class="container-fluid" id="Contact">
            <div class="container">
                <div class="row g-0">
                    <div class="col-lg-3">
                        <div class="contact-header h-100 bg-dark pt-6 pe-6 pb-6">
                            <div class="text-start d-flex flex-column justify-content-center wow fadeInUp" data-wow-delay="0.1s">
                                <p class="text-white sub-title">Contact Me</p>
                                <h1 class="display-6 text-white mb-0">Let’s Start A New Project</h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9">
                       <div class="contact-content h-100 pt-6 ps-6 pb-6">
                            <div class="bg-light p-4">
                                <div class="row g-5">
                                    <div class="col-xl-5 wow fadeInUp" data-wow-delay="0.1s">
                                        <p class="mb-4 text-justify">As a dedicated web developer, I specialize in creating tailored digital solutions to help businesses thrive in an increasingly competitive online landscape. My expertise spans across designing dynamic websites, developing secure applications, and optimizing user experiences for mobile and desktop platforms. I offer a full range of services, including custom web development, seamless integration of APIs, and advanced e-commerce solutions, all aimed at delivering exceptional results for your business. By leveraging the latest technologies and industry best practices, I ensure that each project is crafted with precision, security, and scalability in mind.</p>
											<div class="d-flex mb-4">
                                            <div class="btn-xl-square bg-primary text-white me-3">
                                                <i class="fas fa-map-marker-alt"></i>
                                            </div>
                                            <div>
                                                <h4>Address</h4>
                                                <p class="mb-0">CHANDIGARH,INDIA</p>
                                            </div>
                                        </div>
                                        <div class="d-flex mb-4">
                                            <div class="btn-xl-square bg-primary text-white me-3">
                                                <i class="fas fa-envelope"></i>
                                            </div>
                                            <div>
                                                <h4>Mail Us</h4>
                                                <p class="mb-0">kundansahil0993@gmail.com</p>
                                            </div>
                                        </div>
                                        <div class="d-flex">
                                            <div class="btn-xl-square bg-primary text-white me-3">
                                                <i class="fa fa-phone-alt"></i>
                                            </div>
                                            <div>
                                                <h4>Telephone</h4>
                                                <p class="mb-0">(+91) 86991 00213</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-7 wow fadeInUp" data-wow-delay="0.3s">
                                        <div>
                                            <form id="contactForm">
												<div class="row g-3">
													<div class="col-lg-12 col-xl-6">
														<div class="form-floating">
															<input type="text" class="form-control border-0" id="name" placeholder="Your Name">
															<label for="name">Your Name</label>
															<div class="error-message text-danger" id="name-error"></div>
														</div>
													</div>
													<div class="col-lg-12 col-xl-6">
														<div class="form-floating">
															<input type="email" class="form-control border-0" id="email" placeholder="Your Email">
															<label for="email">Your Email</label>
															<div class="error-message text-danger" id="email-error"></div>
														</div>
													</div>
													<div class="col-lg-12 col-xl-6">
														<div class="form-floating">
															<input type="phone" class="form-control border-0" id="phone" placeholder="Phone">
															<label for="phone">Your Phone</label>
															<div class="error-message text-danger" id="phone-error"></div>
														</div>
													</div>
													<div class="col-lg-12 col-xl-6">
														<div class="form-floating">
															<input type="text" class="form-control border-0" id="project" placeholder="Project">
															<label for="project">Your Project</label>
															<div class="error-message text-danger" id="project-error"></div>
														</div>
													</div>
													<div class="col-12">
														<div class="form-floating">
															<input type="text" class="form-control border-0" id="subject" placeholder="Subject">
															<label for="subject">Subject</label>
															<div class="error-message text-danger" id="subject-error"></div>
														</div>
													</div>
													<div class="col-12">
														<div class="form-floating">
															<textarea class="form-control border-0" placeholder="Leave a message here" id="message" style="height: 120px"></textarea>
															<label for="message">Message</label>
															<div class="error-message text-danger" id="message-error"></div>
														</div>
													</div>
													 
													 <div class="col-12">
															<div class="g-recaptcha" data-sitekey="6LcdOlkqAAAAABEtm615ygf6bOIyyoM_oXwXrU5e"></div>
															<div class="error-message text-danger" id="recaptcha-error"></div>
														</div>
														<div class="col-12">
														<button class="btn btn-primary w-100 py-3">Send Message</button>
													</div>
												</div>

												<div id="success-message" class="alert alert-success" style="display:none;"></div>
												<div id="error-message" class="alert alert-danger" style="display:none;"></div>
											</form>

                                        </div>
                                    </div>
                                    <div class="col-12 wow fadeInUp" data-wow-delay="0.5s">
                                        <div class="rounded">
                                            <iframe class="rounded w-100" 
                                            style="height: 400px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d214.25564331316977!2d76.747784861029!3d30.772045149744827!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390ff20fccfd40ab%3A0xa668971592e19f64!2sRehabilitation%20Colony%2C%20Dhanas%2C%20Chandigarh%2C%20160014!5e0!3m2!1sen!2sin!4v1728198266636!5m2!1sen!2sin"
                                            loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
											
											
                                        </div>
                                    </div>
                                </div>
                            </div>
                       </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact End -->


        <!-- Footer Start -->
        <div class="container-fluid footer bg-dark border-bottom-0">
            <div class="container wow fadeIn" data-wow-delay="0.1s">
                <div class="row g-0">
                    <div class="col-12">
                       <div class="footer-content h-100 pt-6 ps-6 pb-6">
                            <div class="row g-4 align-items-center">
                                <div class="col-12 text-center">
                                    <div class="d-flex justify-content-center">
                                  
										<a class="btn btn-light btn-md-square me-3" target="blank" href="https://www.facebook.com/profile.php?id=100071641886316&mibextid=ZbWKwL"><i class="fab fa-facebook-f"></i></a>
                                        <a class="btn btn-light btn-md-square me-3" target="blank" href="https://www.youtube.com/@dotnetsolution"><i class="fab fa-youtube"></i></a>
                                        <a class="btn btn-light btn-md-square me-3" target="blank" href="https://www.instagram.com/ks__kreative?igsh=cG9ybjh3Z2w0b3g0"><i class="fab fa-instagram"></i></a>
                                        <a class="btn btn-light btn-md-square me-0" target="blank" href="https://www.linkedin.com/in/kundan-sahil-3688a81b6?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app"><i class="fab fa-linkedin-in"></i></a>
                                   
									</div>
                                </div>
                                <div class="col-12 text-center">
                                    <span class="text-body"><a href="#" class="border-bottom text-white"><i class="fas fa-copyright text-body me-2"></i>Kundan Portfolio</a>, All right reserved.</span>
                                </div>
                                <div class="col-12 text-center text-body">
                                    <!--/*** This template is free as long as you keep the below author’s credit link/attribution link/backlink. ***/-->
                                    <!--/*** If you'd like to use the template without the below author’s credit link/attribution link/backlink, ***/-->
                                    <!--/*** you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". ***/-->
                                    Designed By <a class="border-bottom text-white" href="https://htmlcodex.com">HTML Codex</a> Distributed By <a class="border-bottom text-white" href="https://themewagon.com">ThemeWagon</a>
                                </div>
                            </div>
                       </div>        
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-primary btn-lg-square back-to-top"><i class="fa fa-arrow-up"></i></a>   

        
        <!-- JavaScript Libraries -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="lib/wow/wow.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/waypoints/waypoints.min.js"></script>
        <script src="lib/counterup/counterup.min.js"></script>
        <script src="lib/lightbox/js/lightbox.min.js"></script>
        <script src="lib/owlcarousel/owl.carousel.min.js"></script>
        

        <!-- Template Javascript -->
        <script src="js/main.js"></script>
		
		<script src="https://www.google.com/recaptcha/api.js" async defer></script>
<script>
    $(document).ready(function() {
        $('#contactForm').on('submit', function(e) {
            e.preventDefault();

            // Clear previous error messages
            $('.error-message').html('');
            $('#success-message').hide();
            $('#error-message').hide();

            // Frontend validation
            var isValid = true;

            // Validate Name
            if ($('#name').val().trim() === '') {
                isValid = false;
                $('#name-error').html('Name is required.');
            }

            // Validate Email
            var email = $('#email').val().trim();
            var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (email === '' || !emailPattern.test(email)) {
                isValid = false;
                $('#email-error').html('Valid email is required.');
            }

            // Validate Phone (optional)
            var phone = $('#phone').val().trim();
            if (phone !== '' && !/^\d+$/.test(phone)) {
                isValid = false;
                $('#phone-error').html('Phone should contain only numbers.');
            }

            // Validate Project
            if ($('#project').val().trim() === '') {
                isValid = false;
                $('#project-error').html('Project is required.');
            }

            // Validate Subject
            if ($('#subject').val().trim() === '') {
                isValid = false;
                $('#subject-error').html('Subject is required.');
            }

            // Validate Message
            if ($('#message').val().trim() === '') {
                isValid = false;
                $('#message-error').html('Message is required.');
            }

            // Validate reCAPTCHA
            var recaptchaResponse = grecaptcha.getResponse();
            if (recaptchaResponse.length === 0) {
                isValid = false;
                $('#recaptcha-error').html('Please verify that you are not a robot.');
            }

            // Show error message if validation fails
            if (!isValid) {
                $('#error-message').html('Please fix the errors above.').show(); // Show general error message
                return; // Stop the submission
            }

            // If validation passes, send the AJAX request
            $.ajax({
                url: "{{ route('contact.send') }}", // The Laravel route
                method: 'POST',
                data: {
                    _token: "{{ csrf_token() }}", // Add CSRF token
                    name: $('#name').val(),
                    email: $('#email').val(),
                    phone: $('#phone').val(),
                    project: $('#project').val(),
                    subject: $('#subject').val(),
                    message: $('#message').val(),
                    'g-recaptcha-response': recaptchaResponse // Add reCAPTCHA response
                },
                success: function(response) {
                    if (response.success) {
                        $('#success-message').html('Message Sent Successfully! Your ID: ' + response.unique_id).show(); // Show success message with unique ID
                        $('#contactForm')[0].reset(); // Reset the form
                        $('.error-message').html(''); // Clear any previous error messages
                        grecaptcha.reset(); // Reset reCAPTCHA
                    } else {
                        $('#error-message').html(response.message || 'Error sending message. Please try again.').show(); // Show error message
                    }
                },
                error: function(response) {
                    $('#error-message').html('An error occurred. Please try again.').show();
                }
            });
        });
    });
</script>
 <script>
        function showLoading() {
            document.getElementById('spinner').style.display = 'block';
        }
    </script>


    </body>

</html>