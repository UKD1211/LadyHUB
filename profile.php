<?php
session_start();
require_once('config.php');
$uid = $_SESSION['id'];
$query = "SELECT * FROM users WHERE userid='$uid'";
$res = $con->query($query);
$row = $res->fetch_array();
$name = $row['name'];
?>
<html>

<head>
  <link rel="stylesheet" href="CSS/home-style.css">
  <br>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
    .card {
      box-shadow: 0 2px 8px 0 rgba(5, 3, 3, 0.6);
      max-width: 300px;
      margin: auto;
      text-align: center;
      font-family: arial;
    }

    .card1 {
      box-shadow: 0 2px 8px 0 rgba(5, 3, 3, 0.6);
      max-width: 200px;
      margin: auto;
      text-align: center;
      cursor: pointer;
      font-family: arial;
      border-radius: 5rem;
    }



    /* html {
      background: url("./assets/img7.jpg") no-repeat center center fixed;

      -webkit-background-size: cover;
      -moz-background-size: cover;
      -o-background-size: cover;
      background-size: cover;
    } */

    .title {
      color: grey;
      font-size: 18px;
    }

    button {
      border: none;
      outline: 0;
      display: inline-block;
      padding: 8px;
      color: white;
      background-color: turquoise;
      text-align: center;
      cursor: pointer;
      width: 100%;
      font-size: 18px;
    }

    a {
      text-decoration: none;
      font-size: 22px;
      color: black;
    }

    button:hover,
    a:hover {
      opacity: 0.7;
    }

    .logout {
      /* float: right; */

      margin-right: 10px;
    }
  </style>

</head>
<header id="header">
  <div id="brand">
    <a href="Login.php"></a>
    <img id="header-img" src="assets/icon1.png" style="cursor:pointer ;" href="Login.php" />
  </div>
  <nav id="nav-bar">
    <a class="nav-link" href="home.php">Home</a>
    <a class="nav-link" href="FindGroup.php">Events</a>
    <a class="nav-link" href="ConsultWithDoctor.php">Consult</a>
    <a class="nav-link" href="Blog.php">Blog</a>
    <a class="nav-link" href="profile.php">Profile</a>
  </nav>
</header>

<body style="margin-top: 100px;">

  <h1 style="margin-left:42%;margin-top:0%;color:#ff3256;font-family: Brush Script MT, Brush Script Std, cursive;font-size:50px"><b>My Profile</b></h1><br>
  <div class="card">
    <img src="./assets/img7.jpg" alt="User" style="width:100%; height:20rem">
    <br>
    <h2><?php echo $name; ?></h2>
    <p class="title">Student</p>
    <p>Email- admin@gmail.com</p>
    <div style="margin: 24px 0;">
    </div>
    <p><button>Contact</button></p>
  </div>
  <br>
  <div class="card" style="background-color: #ff3256;padding:0.5%">
    <h1 style="color:white; font-size:25px;"><a style="text-decoration:none;color:antiquewhite" href="MedicalHistory.php">Record <br>Medical History</a></h1>
  </div>
  <div class="card1" style="background-color: #ff3256;padding:0.5%; margin-top:1rem; margin-bottom:.5rem;">
    <h1 style="color:white; font-size:25px;"><a style="text-decoration:none;color:antiquewhite" href="/Women-Techies">LogOut</a></h1>
  </div>

</body>

</html>