<?php
session_start();

include 'config.php';

$un=$_POST['un'];
$pass=$_POST['pass'];
$role=$_POST['role'];



$sql = "SELECT * FROM workerreg where uname='$un' and pass='$pass' and profession='$role'   ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
     $_SESSION["un"] = $un;
    header('Location:worker_home.php');
} else {
 
 // header("location:worker_login.html");
  echo "Invalid Details";
}
$conn->close();


?>