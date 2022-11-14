
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <style>
        body {font-family: Arial, Helvetica, sans-serif;
        width:50%;
        /* margin:auto; */
        margin-top:5%;}
        * {box-sizing: border-box;}

        input[type=text], select, textarea {
        width: 80%;
        padding: 12px;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
        margin-top: 6px;
        margin-bottom: 16px;
        resize: vertical;
        }
        input[type=number], select, textarea {
        width: 80%;
        padding: 12px;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
        margin-top: 6px;
        margin-bottom: 16px;
        resize: vertical;
        }
        input[type=password], select, textarea {
        width: 80%;
        padding: 12px;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
        margin-top: 6px;
        margin-bottom: 16px;
        resize: vertical;
        }

        input[type=tel], select, textarea {
        width: 80%;
        padding: 12px;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
        margin-top: 6px;
        margin-bottom: 16px;
        resize: vertical;
        }
        input[type=submit] {
        background-color: #ff3256;
        color: white;
        padding: 12px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        }

        input[type=submit]:hover {
        background-color: #45a049;
        }
        #form-img{
            max-width:20%;
            margin:1%;
        }
        #form-head{
            display:flex;
            justify-content:flex-start;
            align-items:center;
        }
        .container {
        border-radius: 5px;
        background-color: #f2f2f2;
        padding: 20px;
        clear: both;
        }
        .container input{
        width: 100%;
        clear: both;

        }
        #header-img {
    width: 15%;
    height: 15%;
}

#active {
    color: white;
    background: red;
}

header {
    width: 100% !important;
    background: #18ba9c;
    /* Old browsers */
    background: -moz-linear-gradient(-45deg, #18ba9c 0%, #4ad6aa 68%, #4cd6db 100%);
    /* FF3.6-15 */
    background: -webkit-linear-gradient(-45deg, #18ba9c 0%, #4ad6aa 68%, #4cd6db 100%);
    /* Chrome10-25,Safari5.1-6 */
    background: linear-gradient(135deg, #18ba9c 0%, #4ad6aa 68%, #4cd6db 100%);
    /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#18ba9c', endColorstr='#4cd6db', GradientType=1);
    IE6-9: fallback on horizontal gradient;
    background-image: linear-gradient(15deg, #13547a 0%, #80d0c7 50%);
    background-image: url('data:image/jpeg;base64,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');
    background-size: cover;
    display: flex !important;
    justify-content: space-between !important;
    align-items: center !important;
    padding: 0.5% 3% !important;
    top: 0 !important;
    position: fixed !important;

}

nav {
    display: flex;
    margin-right: 20%;
    justify-content: space-evenly;
    align-items: center;
    font-size: large;
}

.nav-link {
    min-width: 40%;
    font-size: 1rem;
    font-weight: 800;
    text-align: center;
    margin: 0% 5%;
    color: #212360;
    padding: 3%;
    text-decoration: none;
}

.nav-link:hover {
    color: #dd1763;
    background: #0dd;
    padding: 3%;
    border-radius: 5rem;
}

        </style>
    </head>
    <header id="header">
    <div id="brand">
      <img id="header-img" src="assets/icon1.png" href="home.php" />
    </div>
    <nav id="nav-link">
      <a class="nav-link" href="home.php">Home</a>
      <a class="nav-link" href="FindGroup.php">Events</a>
      <a class="nav-link" href="ConsultWithDoctor.php">Consult</a>
      <a class="nav-link" href="Blog.php">Blog</a>
      <a class="nav-link" href="profile.php">Profile</a>
    </nav>
  </header>
    <body>
        <center>
        <div id="form-head">
            <img src="assets/icon1.png" id="form-img"></img>
            <h2 style="text-align: center; font-size:40px; color:#ff3256; margin:2%;">My Medical History</h2>
        </div> 
        </center>
        <div class="container">
            <form action="insert.php" method="POST">
                <label for="lname">Name</label>
                <input type="text" id="pnumber" name="name" placeholder="Full Name">
                <br>
                <label for="lname">Age</label>
                <input type="number" id="pnumber" name="age" placeholder="Enter your Age">
                <br>
                <label for="lname">Weight (in Kg)</label>
                <input type="number" id="pnumber" name="weight" placeholder="Enter your weight">
                <br>
                <label for="lname">Height (in cm)</label>
                <input type="number" id="pnumber" name="height" placeholder="Enter your height">
                <br>
                <label for="lname">Any history of chronic diseases</label>
                <input type="text" id="pnumber" name="chronic" placeholder="Enter your history of chronic diseases (if any)">

                <br>
                <label for="lname">Any history of major medical procedure</label>
                <input type="text" id="pnumber" name="med" placeholder="Enter your history of major medical procedures (if any)">

                <br>
                <label for="lname">Any history of hormonal diseases</label>
                <input type="text" id="pnumber" name="horm" placeholder="Example- hyperthyroidism, PCOS, etc.">

                <br>
                <label for="lname">Any comments</label>
                <input type="text" id="pnumber" name="comm" placeholder="Enter your comments">

                <br>
                <input type="submit" name="submit" action="submit">
            </form>
        </div>

</body>
</html>