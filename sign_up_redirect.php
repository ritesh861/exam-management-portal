<?php 
$fn=$_POST['f_name'];
$ln=$_POST['l_name'];

$mail=$_POST['email'];

$roll=$_POST['roll'];
$psw=$_POST['psw'];
$psw2=$_POST['psw-repeat'];
$connect=mysqli_connect('localhost','root');




mysqli_select_db($connect,'exam');

if($psw==$psw2)
{
$q="INSERT INTO reg (no,first_name,last_name,roll,email,password) VALUES ('','$fn','$ln','$roll','$mail','$psw')";

mysqli_query($connect,$q);
header("location:http://localhost/Exam/examlogin.html");

}


else
{
echo "Please enter the same password in both the input box";
?><a href="examsignup.html" ><br>FILL DATA AGAIN </a><?php
}
?>