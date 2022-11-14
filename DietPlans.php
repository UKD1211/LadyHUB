<html>

<head>
    <!-- <link rel="stylesheet" href="./CSS/home-style.css"> -->
    <link rel="stylesheet" href="CSS/security.css">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ladyhub-Diet</title>
    <!-- <link rel="stylesheet" href="./CSS/consult.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- Custom File's Link -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="responsive-style.css">
    <link rel="stylesheet" href="CSS/security.css">
    <audio id="myAudio">
        <source src="Iphone Alarm.mp3" type="audio/mpeg">
    </audio>
</head>
<!-- <header id="header">
    <div id="brand">
        <img id="header-img" src="assets/icon1.png" href="home.php" />
    </div>
    <nav id="nav-bar">
        <a class="nav-link" href="home.php">Home</a>
        <a class="nav-link" href="FindGroup.php">Events</a>
        <a class="nav-link" href="ConsultWithDoctor.php">Consult</a>
        <a class="nav-link" href="Blog.php">Blog</a>
        <a class="nav-link" href="profile.php">Profile</a>
    </nav>
</header> -->

<body data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="100">

    <!-- Navbar section -->
    <header class="header_wrapper" style="background-color: #fff;box-shadow:0 0 8px 3px rgba(146, 142, 142, 0.452)">
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <img src="images/icon1.png" class="img-fluid" style="width:80px; height:80px">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <!-- <span class="navbar-toggler-icon"></span> -->
                    <i class="fas fa-stream navbar-toggler-icon"></i>
                </button>
                <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                    <ul class="navbar-nav  menu-navbar-nav" style="gap:3.5rem">
                       
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="home.php" style="color:#fc5185">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="FindGroup.php">Event</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="ConsultWithDoctor.php">Consult</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="Blog.php">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="profile.php">Profile</a>
                        </li>
                        <!-- <li class="nav-item">
                                    <a class="nav-link" href="#testimonial">Testimonial</a>
                                  </li>
                                  <li class="nav-item">
                                    <a class="nav-link" href="#blog">Blog</a>
                                  </li>
                                  <li class="nav-item mt-3 mt-lg-0">
                                    <a class="nav-link" href="#contact">Contact</a>
                                  </li> -->
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <div id="home-content" class="my-5">
        <h1 style="font-size:50px; color:black; margin-left:40%;">DIET PLANS</h1>
    </div>
    <div id="content-home" style="display:flex;flex-direction:column;width:50vw;margin:0 25rem; margin-bottom:5rem;">
        <div id='doc-results'>
            <div class='product-card' style="background: #0dd;">
                <img src='assets/diet-plan.jpg' class='product-img'></img>
                <div class='product-content' style="text-align: center;">
                    <h1 class='product-name text-align-center'>Ketogenic Diet</h1>
                    <h3 style="color:white;margin-top:0.6rem; margin-bottom:0.5rem">Low carb diet for weight loss</h3>
                    <button  onclick="document.location='https://calendar.google.com/calendar/u/0?cid=MnUxbzdxaWE3cDRzNXZmOWJzb3VmNHFpZWtAZ3JvdXAuY2FsZW5kYXIuZ29vZ2xlLmNvbQ'" class="btn btn-primary my-3">Add to my calender</Button>
                </div></a>
            </div>
        </div>
        <br>
        <br>
        <div id='doc-results'>
            <div class='product-card' style="background: #0dd;">
                <img src='assets/diet-plan.jpg' class='product-img'></img>
                <div class='product-content' style="text-align: center;">
                    <h1 class='product-name text-align-center'>Indian Diet plan for weight loss</h1>
                    <h3 style="color:white;margin-top:0.6rem; margin-bottom:0.5rem">Low carb diet for weight loss</h3>
                    <button  onclick="document.location='https://calendar.google.com/calendar/u/0?cid=MnUxbzdxaWE3cDRzNXZmOWJzb3VmNHFpZWtAZ3JvdXAuY2FsZW5kYXIuZ29vZ2xlLmNvbQ'" class="btn btn-primary my-3">Add to my calender</Button>
                </div></a>
            </div>
        </div>
        <br>
        <br>
        <div id='doc-results'>
            <div class='product-card' style="background: #0dd;">
                <img src='assets/diet-plan.jpg' class='product-img'></img>
                <div class='product-content' style="text-align: center;">
                    <h1 class='product-name text-align-center' >High protein meal plan</h1>
                    <h3 style="color:white;margin-top:0.6rem; margin-bottom:0.5rem">Low carb diet for weight loss</h3>
                    <button  onclick="document.location='https://calendar.google.com/calendar/u/0?cid=MnUxbzdxaWE3cDRzNXZmOWJzb3VmNHFpZWtAZ3JvdXAuY2FsZW5kYXIuZ29vZ2xlLmNvbQ'" class="btn btn-primary my-3">Add to my calender</Button>
                </div></a>
            </div>
        </div>
    </div>
    <section id="contact" class="footer_wrapper wrapper">
        <div class="container pb-3">
            <div class="row">
                <div class="col-lg-3 col-md-6 mb-4 mt-4">
                    <h5>Ladyhub Office</h5>
                    <p class="ps-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis dignissim erat ut
                        laoreet
                        pharetra....</p>
                    <div class="contact-info">
                        <ul class="list-unstyled p-0">
                            <li><a href="#"><i class="fa fa-home me-3"></i> Jadavpur University , Kolkata</a></li>
                            <li><a href="#"><i class="fa fa-phone me-3"></i>+91 8100522467</a></li>
                            <li><a href="#"><i class="fa fa-envelope me-3"></i>ladyhub2022@gmail.com</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4 mt-4">
                    <h5>More Links</h5>
                    <ul class="link-widget p-0">
                        <!-- <li><a href="#">About Us</a></li> -->
                        <!-- <li><a href="#">Our Office</a></li> -->
                        <li><a href="#">Delivery</a></li>
                        <!-- <li><a href="#">Our Store</a></li> -->
                        <li><a href="#">Guarantee</a></li>
                        <li><a href="#">Buy Gift Card</a></li>
                        <li><a href="#">Return Policy</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6 mb-4 mt-4">
                    <h5>More Links</h5>
                    <ul class="link-widget p-0">
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Our Office</a></li>
                        <!-- <li><a href="#">Delivery</a></li> -->
                        <li><a href="#">Our Store</a></li>
                        <!-- <li><a href="#">Guarantee</a></li> -->
                        <!-- <li><a href="#">Buy Gift Card</a></li> -->
                        <!-- <li><a href="#">Return Policy</a></li> -->
                    </ul>
                </div>

                <div class="col-lg-3 col-md-6 mb-4 mt-4">
                    <h5>Newsletter</h5>
                    <div class="form-group mb-4">
                        <input type="email" class="form-control bg-transparent" placeholder="Enter Your Email Here">
                        <button type="submit" class="main-btn rounded-2 mt-3 border-white text-white" style="max-width :200px;">Subscribe</button>
                    </div>
                    <h5>Stay Connected</h5>
                    <ul class="social-network d-flex align-items-center p-0 ">
                        <li><a href="#"><i class="fab fa-facebook-f pt-2"></i></a></li>
                        <li><a href="#"><i class="fab fa-twitter pt-2"></i></a></li>
                        <li><a href="#"><i class="fab fa-google-plus-g pt-2"></i></a></li>
                        <li><a href="#"><i class="fab fa-vimeo-v pt-2"></i></a></li>
                    </ul>
                </div>



            </div>
        </div>
        <div class="container-fluid copyright-section">
            <p class="p-0">Copyright <a href="#">@Ladyhub</a>2022 All Rights Reserved</p>
        </div>
    </section>
</body>

</html>