<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Lady Hub</title>

  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans|Raleway|Candal">
  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: 'Open Sans', sans-serif;
      line-height: 20px;
      color: #999999;
      font-size: 300;
      font-size: 16px;
    }

    ol,
    ul {
      list-style: none;
    }

    blockquote,
    q {
      quotes: none;
    }

    blockquote:before,
    blockquote:after,
    q:before,
    q:after {
      content: '';
      content: none;
    }

    table {
      border-collapse: collapse;
      border-spacing: 0;
    }

    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
      font-family: 'Raleway', sans-serif;
      font-weight: 600;
      color: #222222;
    }

    a,
    a:hover,
    a:focus,
    a:active {
      outline: none;
    }

    .section-padding {
      padding: 60px 0px;

    }

    h2 {
      line-height: 20px;
      margin: 0;
      font-size: 28px;
      font-weight: 700;
      text-transform: uppercase;
    }

    hr.botm-line {
      height: 3px;
      width: 60px;
      background: #ffb737;
      position: relative;
      border: 0;
      margin: 20px 0 20px 0;
    }

    #banner {
      background-image: linear-gradient(100deg, #FF5F1F, #9D00FF, 0.5);
      background-size: cover;
      min-height: 650px;
      height: 100%;
      position: relative;
    }

    .bg-color {
      background-color: rgba(203, 228, 93, 0.6);
      box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.37);
      backdrop-filter: blur(4px);
      -webkit-backdrop-filter: blur(4px);
      border-radius: 10px;
      border: 1px solid rgba(255, 255, 255, 0.18);
      min-height: 650px;
    }


    .banner-info {
      padding-top: 190px;
    }

    .banner-logo img {
      display: inline-block;
    }

    .banner-text {
      color: #2d2d2d;
    }

    .banner-text h1 {
      font-family: 'Candal', sans-serif;
      font-size: 35px;
      text-transform: uppercase;
      padding-bottom: 15px;
    }

    .btn-appoint,
    .btn-appoint:hover,
    .btn-appoint:focus {
      margin-top: 30px;
      padding: 10px 20px;
      font-size: 12px;
      background-color: rgba(12, 184, 182, 0.91);
      border-radius: 3px;
      color: #fff;
    }

    .overlay-detail a i {
      text-align: center;
      position: absolute;
      bottom: 25px;
      font-size: 38px;
      color: #fff;
      margin: 0 auto;
    }

    .text-primary i {
      padding-top: 8px;
      display: inline-block;
    }

    .white,
    .white:hover,
    .white:focus {
      color: #fff;
      width: 100% !important;
    }


    .img-responsive {
      width: 200px;
      height: 100px;
    }

    .cont {
      height: 100vh;
    }

    .animate-character {
      text-transform: uppercase;
      background-image: linear-gradient(-225deg,
          #231557 0%,
          #44107a 29%,
          #ff1361 67%,
          #fff800 100%);
      background-size: auto auto;
      background-clip: border-box;
      background-size: 200% auto;
      color: #fff;
      background-clip: text;
      text-fill-color: transparent;
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      animation: textclip 2s linear infinite;
      display: inline-block;
      font-size: 190px;
    }

    @keyframes textclip {
      to {
        background-position: 200% center;
      }
    }
  </style>
</head>

<body id="myPage">
  <!--banner-->
  <section id="banner" class="banner" style="height:100%">
    <div class="bg-color cont">
      <div class="container">
        <div class="row">
          <div class="banner-info">
            <div class="banner-logo text-center">
              <img src="icon1.png" style="height: 15rem;" class="img-responsive">
            </div>
            <div class="banner-text text-center">
              <h1 class="animate-character">Complete healthcare & wellness</h1>
              <p>A website which will serve as a complete guide to a women's mental and physical health and well being.
                We aim at spreading awareness about health which is often neglected among women. Our website plans to
                constitute various features such as tracking of menstruation cycles, a quick general healthcare check
                up, mental health wellness and fitness blogs, a recreation or resources page, connect with doctors,Forum
                where women can discuss and share experiences etc.</p>
              <a href="Login.php" class="btn btn-appoint from-left">Login</a><br>
              <a href="Signup.php" class="btn btn-appoint">Sign Up</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--/ banner-->


</body>

</html>