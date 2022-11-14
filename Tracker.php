<?php
$predict = "...........<br/>Sorry, not yet predicted, please fill the form";
$t = 0;
$p1 = 0;
if (isset($_POST['submit'])) {
    $month = $_POST['month'];
    $start = $_POST['start'];
    $s1 = strtotime($start);
    $end = $_POST['end'];
    $e1 = strtotime($end);
    $diff = $e1 - $s1;
    $cycle = floor($diff / 86400);
    // echo $cycle;
    $today = date('Y-m-d');
    $t = strtotime($today);
    $next = $s1 + 28 * 86400;
    // $predict="Please fill the form to generate prediction";
    $predict = date('Y-m-d', $next);
    // echo $predict;
    // echo "<h3>$month</h3><br/><h3>$start</h3><br/><h3>$end</h3><br/>";
    $p1 = $s1 + 14 * 86400;
    $diet_str1 = "
        1. <p>Increase Anti-flammatary foods like - Fish oils , calcium , Vitamin-D.</p><br/>
        2.<p>Consume more Protein and Restore Iron levels</p><br/>
        3. <p>Take in More Anti-Oxidants helps in maintainence if mentrual cycle.</p><br/>
        4.<p>Increase Food with Carbohydrates like Raisin , sweet potato etc.</p><br/>
        5.<p>Include Sources of Collagen such as Jelly alongside Vitamin C.</p><br/>
        ";
    $diet_str2 = "
        1. <p>Consider Taking more carbohydrates to maintain good energy levels while working out.</p><br/>
        2. <p>Increase protein intake because generally breakdown of muscles is increased during this phase.</p></br>
        3.<p>keep yourself Hydrated, Drink enough water</br>
        4.<p>Take diet focusing more on  fibre and consume food which induces melatonin, it helps in getting good Sleep.</p><br/>
        5. <p>Target nutrient rich food and reduce junk and processed food .</p><br/>
        ";
    $work_str1 = "
        <p>High intensity strength training</p>
        <p>Intensive cardio workout</p>
        <p>Weight training</p>
        <p>Strength training</p>
        ";
    $work_str2 = "
            <p>Endurance training</p><br/>
            <p>low-intensity weight training</p><br/>
            <p>Light strength training</p><br/>
            
        ";
    $diet;
    $workout;
    if ($t > $p1) {
        $diet = $diet_str1;
        $workout = $work_str1;
    } else {
        $diet = $diet_str2;
        $workout = $work_str2;
    }
}

?>
<html>

<head>
    <!-- <link rel="stylesheet" href="CSS/home-style.css"> -->
    <link rel="stylesheet" href="tracker.css">
    <link rel="stylesheet" href="CSS/security.css">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ladyhub-Tracker</title>

    <!-- FAVICON -->
    <link rel="icon" type="image/png" href="images/favicon.png">

    <!-- Bootstrap 5 CDN Links -->
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
    <nav id="nav-bar" style="display: flex;">
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
                    <img src="icon1.png" class="img-fluid" style="width:80px; height:80px">
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
    <div>
        <div id="track-head" class="mt-5">
            <img id="track-page-img" src="assets/health-tracker-page-img.jpg">
            <h1 style="color:black;">Period Tracker</h1>
        </div>
        <form method="post">
            <div id="track-input">
                <h2> Enter your last period details:</h2>
                <div style="margin:00px; margin-right:30px; display:flex; justify-content:space-evenly;flex-wrap:wrap;">
                    <div style="width:150px;">
                        <label id="lab">Month</label>
                        <select id="month" name="month">
                            <option value="Jan">January</option>
                            <option value="Feb">February</option>
                            <option value="Mar">March</option>
                            <option value="Apr">April</option>
                            <option value="May">May</option>
                            <option value="Jun">June</option>
                            <option value="Jul">July</option>
                            <option value="Aug">August</option>
                            <option value="Sep">September</option>
                            <option value="Oct">October</option>
                            <option value="Nov">November</option>
                            <option value="Dec">December</option>
                        </select>
                    </div>
                    <div style="width:150px;">
                        <label id="lab">Start Date</label>
                        <input type="date" id="month" name="start">
                    </div>
                    <div style="width:150px;">
                        <label id="lab">End Date</label>
                        <input type="date" id="month" name="end">
                    </div>
                </div>
                <div style="display:flex; align-items:center;justify-content:space-evenly;flex-wrap:wrap;">
                    <img src="assets/flow.png" id="flow">
                    <h3>Flow:</h3>
                    <input type="radio" id="low" name="flow" class="flow-type" value="low">
                    <label class="flow-label">Low</label><br>
                    <input type="radio" id="medium" name="flow" class="flow-type" value="medium">
                    <label class="flow-label">Medium</label><br>
                    <input type="radio" id="high" name="flow" class="flow-type" value="high">
                    <label class="flow-label">High</label>
                </div>
                <div style="display:flex; align-items:center;justify-content:space-evenly;flex-wrap:wrap;">
                    <img src="assets/mood.png" id="mood">
                    <h3>Mood:</h3>
                    <input type="radio" id="happy" name="mood" class="flow-type" value="happy">
                    <label class="flow-label">Happy</label><br>
                    <input type="radio" id="happy" name="mood" class="flow-type" value="normal">
                    <label class="flow-label">Normal</label><br>
                    <input type="radio" id="happy" name="mood" class="flow-type" value="stressed">
                    <label class="flow-label">Stressed</label><br>
                    <input type="radio" id="sad" name="mood" class="flow-type" value="sad">
                    <label class="flow-label">Sad</label><br>
                    <input type="radio" id="anxious" name="mood" class="flow-type" value="anxious">
                    <label class="flow-label">Anxious</label>
                </div>
                <button action="submit" name="submit" class="btn btn-primary" style="width:30%;margin-left:25rem; padding:0.4rem">Enter period</button>
            </div>
        </form>
        <div id="predict">
            <div style="font-size:26px; padding-top:30px; text-align:center;">Your next period is predicted to be on <?php echo $predict; ?></div>
        </div>
        <div id="suggestion">
            <div id="sug-card">
                <div id="card">
                    <p class="head-card">Dietary Suggestions</p>
                    <p>This is the workout suggestion for you.</p><br />
                    <?php
                    if ($t == 0 && $p1 == 0)    echo "Please fill the form";
                    else {

                        if ($t > $p1) {
                            echo "
                                 <p>Consider Taking more carbohydrates to maintain good energy levels while working out.</p><br/>
                                 <p>Increase protein intake because generally breakdown of muscles is increased during this phase.</p></br>
                                <p>keep yourself Hydrated, Drink enough water</br>
                                <p>Take diet focusing more on  fibre and consume food which induces melatonin, it helps in getting good Sleep.</p><br/>
                                 <p>Target nutrient rich food and reduce junk and processed food .</p><br/>
    
                                ";
                        } else {
                            echo "
                                 <p>Increase Anti-flammatary foods like - Fish oils , calcium , Vitamin-D.</p><br/>
                                <p>Consume more Protein and Restore Iron levels</p><br/>
                                 <p>Take in More Anti-Oxidants helps in maintainence if mentrual cycle.</p><br/>
                                <p>Increase Food with Carbohydrates like Raisin , sweet potato etc.</p><br/>
                                <p>Include Sources of Collagen such as Jelly alongside Vitamin C.</p><br/>
                                ";
                        }
                    }
                    ?>
                </div>
                <div id="card">
                    <p class="head-card">Work-out Suggestions</p>
                    <p>This is the workout suggestion for you</p><br />
                    <?php
                    if ($t == 0 && $p1 == 0)    echo "Please fill the form";
                    else {

                        if ($t > $p1) {
                            echo "
                                <p>Endurance training</p><br/>
                                <p>low-intensity weight training</p><br/>
                                <p>Light strength training</p><br/>
                                ";
                        } else {
                            echo "
                                <p>High intensity strength training</p>
                               <p>Intensive cardio workout</p>
                                <p>Weight training</p>
                                <p>Strength training</p>
                                ";
                        }
                    }
                    ?>
                </div>
            </div>
            <a class="btn btn-primary" style="margin-left: 40%;margin-bottom:1rem" href="https://calendar.google.com/calendar/u/0?cid=NXJvMnV0Zzd0ZG90cWNjbTBpNjM4cTkwMThAZ3JvdXAuY2FsZW5kYXIuZ29vZ2xlLmNvbQ">Add the plan to my calender</a>
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