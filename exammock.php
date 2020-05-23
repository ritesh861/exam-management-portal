<?php session_start();
$connect=mysqli_connect('localhost','root');

mysqli_select_db($connect,'exam');

if(isset($_SESSION["user_login"])){?>


<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body{background-color:#d2dae7;}
/* width */
::-webkit-scrollbar {
  width: 6px;
}

/* Track */
::-webkit-scrollbar-track {
  background: #f1f1f1; 
}
 
/* Handle */
::-webkit-scrollbar-thumb {
  background: #888;
  border-radius:15px;
}

/* Handle on hover */
::-webkit-scrollbar-thumb:hover {
  background: #555; 
}


/* Clear floats */
.clearfix::after {
  content: "";
  clear: both;
  display: table;
}
.submit {
  background-color:black;
  border:none;
  color:white;
  height:5vh;
  width: 10%;
  margin-left:49%;
}

.ans{
	border:none; border-bottom:1px solid black;padding:7px; background-color:#d2dae7;
}	
</style>
</head>
<body>
<h1 style="font-size:40px;text-align:center; text-decoration:underline;font-weight:900; color:#2d3b53;">NIT PATNA EXAMINATION PORTAL</h1>
<h1 style="font-size:40px;text-align:center; text-decoration:underline;font-weight:900; color:#2d3b53;">MOCK TEST-1</h1>
<div style="margin-left:40px;">
<h1>1.Sum 4+7=?</h1>
<form action="http://localhost/Exam/mock_result.php" method="post">
<input class="ans" type=text name="one">
<h1>2.Sum 49+7=?</h1>
<input class="ans" type=text name="two">
<h1>3.Sum 40+63=?</h1>
<input class="ans" type=text name="three">
<h1>4.Subtract 9-4=?</h1>
<input class="ans" type=text name="four">
<h1>5.Sum 11+9=?</h1>
<input class="ans" type=text name="five">
<h1>6.Muliply 4*7=?</h1>
<input class="ans" type=text name="six">
</div>
<div style="margin-top:40px;">
	<button type="submit"  class="submit">SUBMIT</button>
</div>
</form>
</body>
</html>

<?php
}
else
{
?><br> <a href="examlogin.html">LOGIN FIRST</a><?php
}
?>	