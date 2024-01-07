<?php
session_start();
if($_SERVER['REQUEST_METHOD']=='POST'){

    $fullname = $_POST['fullname'];

    $email = $_POST['email'];

    $place = $_POST['place'];

    $locality = $_POST['locality'];

    @$dates = date('Y-m-d',strtotime($_POST['dates']));

    $number = $_POST['number'];

    $aadhar = $_POST['aadhar'];

    $person = $_POST['person'];
   } 

//   Submit to be database

$servername = "localhost";
$username = "root";
$password = "";
$database = "validation";

// create a connection

$conn = mysqli_connect($servername,$username,$password,$database);

$sql = "INSERT INTO `book` (`fullname`, `email`,`place`,`locality`,`dates`,`number`,`aadhar`,`person`) VALUES ('$fullname', '$email','$place',  '$locality', '$dates', '$number', '$aadhar', '$person')";

// add a new table create in the database 

$result = mysqli_query($conn,$sql);

if($result)
{
  
  // echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
  // <strong>succes!</strong>your detail submit successfully!
  // <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button></div>';
  //  $_SESSION['status'] = "book sisii";
  header("location: condition3.php");
}
// else{
//     echo "the new detail save was not successfully !" .mysqli_error($conn);
// }
?>