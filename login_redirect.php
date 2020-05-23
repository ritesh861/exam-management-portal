
<?php 
session_start();

 ?>
<?php 
$connect=mysqli_connect('localhost','root');




mysqli_select_db($connect,'exam');



$rl=$_POST['rl'];
$pass=$_POST['pass'];



$sql=mysqli_query($connect,"SELECT no FROM reg WHERE roll='$rl' AND password='$pass' LIMIT 1");
$user_count=mysqli_num_rows($sql);
if($user_count==1)
{
while($row=mysqli_fetch_array($sql))
{
$no=$row["no"];}
$_SESSION["user_login"]=$rl;


header("location:http://localhost/Exam/examafterlogin.php");}

else
{
echo "WRONG USERID OR PASSWORD";
?>
<a href="examlogin.html"><br>login again</a>
<?php
}
?>