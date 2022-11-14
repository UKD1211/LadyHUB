 
<?php
if ($_SERVER['REQUEST_METHOD']=='POST') 
{
   
 $name=$_POST['name'];
 $age=$_POST['age'];
 $weight=$_POST['weight'];
 $height=$_POST['height'];
 $chronic=$_POST['chronic'];
 $med=$_POST['med'];
 $horm=$_POST['horm'];
 $comm=$_POST['comm'];

//     echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
//     <strong>SUCCESSFULLY SUBMITTED!</strong> Your entry has been submitted
//     <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
//   </div>';
// SUBMIT THESE TO A DATABASE

//CONNECTING TO A DATABASE

$servername="localhost";
  $username="root";
  $password="";
  $database="sashakti";
  
  
  $conn= mysqli_connect($servername,$username,$password,$database);
  
  if (!$conn) {
      die("Sorry failed to connect :".mysqli_connect_error());
  }
  echo"CONNECTION WAS SUCCESSFUL <br>";

  $sql="INSERT INTO `medicalrec` (`Name`, `Age`, `Weight(in kg)`, `Height (in cm)`, `Any history of chronic diseases` , `Any history of major medical procedure` , `Any history of hormonal diseases` , `Any comments`) VALUES ('$name', '$age', '$weight', '$height', '$chronic' , '$med' , '$horm' ,'$comm');";

$result=mysqli_query($conn,$sql);

if ($result) {
    echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
    <strong>RECORD STORED REGISTERED!!!</strong>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
}
else {
    echo"Record was not created :".mysqli_error($conn);
}

}
?>