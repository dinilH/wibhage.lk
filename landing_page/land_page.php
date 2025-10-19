<head>
	<link rel="shortcut icon" type="image/x-icon" href="assets/images/x-icon.png">

    <link rel="stylesheet" type="text/css" href="landing_page/assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="landing_page/assets/css/font-awesome.css">

    <link rel="stylesheet" href="landing_page/assets/css/landing_page.css">
</head>

<body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    <!-- ***** Preloader End ***** -->


    <!-- ***** Header Area Start ***** -->
    <?php
		include("includes/header.php");
	?>
    <!-- ***** Header Area End ***** -->


    <!-- ***** Welcome Area Start ***** -->
    <div class="welcome-area" id="welcome">

        <!-- ***** Header Text Start ***** -->
        <div class="header-text">
            <div class="container">
                <div class="row">
                    <div class="left-text col-lg-6 col-md-12 col-sm-12 col-xs-12"
                        data-scroll-reveal="enter left move 30px over 0.6s after 0.4s">
                        <h1>Go foward with your online exam <em style="color:blue;">Safely</em></h1>
                        <p>Wibhage LK is the best online examination system in Sri Lanka.
                           This website allows you to organize your dream online examination similar to real exam.We have specially developed advanced features for secure exams. </p> 
                        <a href="#promotion" class="main-button-slider">Some of features</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- ***** Header Text End ***** -->
    </div>
	
    <!-- ***** Welcome Area End ***** -->
    <!-- ***** I HOPE ANYONE WILL NEVER STEAL MY CODE.THIS IS NEARLY 4 MONTHS EFFORT.NO ONE HELPED ONLY GOOGLE ***** -->
	<!--PROJECT FOR YOUNG COMPUTER SCIENTIST COMPETITION-->
    
    <!-- ***** Features Big Item Start ***** -->
    <section class="section" id="promotion">
        <div class="container">
            <div class="row">
                <div class="left-image col-lg-5 col-md-12 col-sm-12 mobile-bottom-fix-big"
                    data-scroll-reveal="enter left move 30px over 0.6s after 0.4s">
                    <img src="landing_page/assets/images/left-image.png" class="rounded img-fluid d-block mx-auto" alt="website preview image">
                </div>
                <div class="right-text offset-lg-1 col-lg-6 col-md-12 col-sm-12 mobile-bottom-fix">
                    <ul>
                        <li data-scroll-reveal="enter right move 30px over 0.6s after 0.4s">
                            <img src="landing_page/assets/images/about-icon-01.png" alt="">
                            <div class="text">
                                <h4>Timer</h4>
                                <p>We offer a timer for every exam.The examinee should answer the question within the time limit.</p>
                            </div>
                        </li>
                        <li data-scroll-reveal="enter right move 30px over 0.6s after 0.5s">
                            <img src="landing_page/assets/images/about-icon-02.png" alt="">
                            <div class="text">
                                <h4>Camera Tracking</h4>
                                <p>
									Using this feature examiner can see what students do while facing the exam.
								</p>
                            </div>
                        </li>
                        <li data-scroll-reveal="enter right move 30px over 0.6s after 0.6s">
                            <img src="landing_page/assets/images/about-icon-03.png" alt="">
                            <div class="text">
                                <h4>Result analytics</h4>
                                <p>Both students and techer can get a good idea of results with this analytics feature</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Features Big Item End ***** -->

    <div class="right-image-decor"></div>
	
	<!-- ***** Features Big Item Start ***** -->
    <section class="section" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12"
                    data-scroll-reveal="enter left move 30px over 0.6s after 0.4s">
                    <div class="features-item">
                        <div class="features-icon">
                            <h2>01</h2>
                            <img src="landing_page/assets/images/features-icon-1.png" alt="">
                            <h4>Register</h4>
                            <p>You can register for free.If you already registered,login</p>
                            <a href="#register" class="main-button">
                               Register
                            </a>
							<a href="#login" class="main-button">
                               login
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12"
                    data-scroll-reveal="enter bottom move 30px over 0.6s after 0.4s">
                    <div class="features-item">
                        <div class="features-icon">
                            <h2>02</h2>
                            <img src="landing_page/assets/images/features-icon-2.png" alt="">
                            <h4>Schedule</h4>
                            <p>You can schedule your exam whenever you want</p>
                            <a href="#login" class="main-button" onclick="alert('You need to login first')">
                                Create exam
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12"
                    data-scroll-reveal="enter right move 30px over 0.6s after 0.4s">
                    <div class="features-item">
                        <div class="features-icon">
                            <h2>03</h2>
                            <img src="landing_page/assets/images/features-icon-3.png" alt="">
                            <h4>Attend</h4>
                            <p>Now students can attend to the exam</p>
                            <a href="#register" class="main-button" onclick="alert('Please login first,If you are a new user,please register')">
                                More Detail
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
	
	<section class="section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-6 col-sm-12 col-xs-12">
					<div id="login" data-scroll-reveal="enter top move 30px over 0.6s after 0.4s">
							<?php 			
							include("login-ui/index.php");
							?>
					</div>
				</div>
				<div class="col-lg-12 col-md-6 col-sm-12 col-xs-12">
					<div id="register" data-scroll-reveal="enter top move 30px over 0.6s after 0.4s">
							<?php 			
							include("login-ui/register.php");
							?>
					</div>
				</div>
			</div>
		</div>
	</section>

    <!-- ***** Features Big Item End ***** -->

    <div class="left-image-decor"></div>
  
    <!-- ***** Footer Start ***** -->
    <footer id="contact-us">
        
                
				<?php include("includes/footer.php");?>

    </footer>
	
    <!-- jQuery 
    <script src="landing_page/assets/js/jquery-2.1.0.min.js"></script>-->

    <!-- Bootstrap -->
    <script src="landing_page/assets/js/popper.js"></script>
    <script src="landing_page/assets/js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="landing_page/assets/js/owl-carousel.js"></script>
    <script src="landing_page/assets/js/scrollreveal.min.js"></script>
    <script src="landing_page/assets/js/waypoints.min.js"></script>
    <script src="landing_page/assets/js/jquery.counterup.min.js"></script>
    <script src="landing_page/assets/js/imgfix.min.js"></script>

    <!-- Global Init -->
    <script src="landing_page/assets/js/custom.js"></script>

</body>
</html>