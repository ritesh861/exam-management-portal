


<?php session_start();
$connect=mysqli_connect('localhost','root');

mysqli_select_db($connect,'exam');

if(isset($_SESSION["user_login"])){?>

<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.b1::before{
	background-color: #d2dae7;
background-image: url(ep3.jpg);
background-repeat: no-repeat;
background-size: 100% 100%;
content: "";

position: absolute;
top: 0px;
width: 99.5%;
height: 100%;
z-index: -2;
opacity: 1;
}
.b1::after {
background-color:#d2dae7;
content: "";
display: block;
position: absolute;
top: 0px;
left: 0px;
width: 100%;
height: 100%;
z-index: -2;
opacity: 0.5;
}
.mock{
	color:#2d3b53;
}
.mock:hover{
	color:#DC143C;
}


</style>
</head>
<body class="b1">
	<div style="background-color:#fed8b1;height:4.4vh; width:24vh; float:right; ">


<form action="http://localhost/Exam/log_out.php" method="post">
	<input type="submit"  name="sign_out"  value="SIGN OUT" style="position:relative; top:6px;color:#696969;font-weight:bold;font-size:18px;cursor: pointer;text-decoration:none;padding-left:52px;">
</form>




	
</div>
	<div class="mock" style="border-radius:50%;height:50vh; width:50vh;position:absolute; top:20%; left:5%;">
		<a href="https://www.sakshieducation.com/Engineering/Academic.html" class="mock"style="text-decoration:none;">
		<div style="height:80%; width:80%; margin-left:37px;">
				<img src="animated1.jpg" style="height:100%; width:100%; border-radius: 50%;">
		</div>
		<h1 style="margin-left:40px;margin-top:5px;">STUDY MATERIAL</h1></a>
	</div>

	<div class="mock" style="border-radius:50%;height:50vh; width:50vh;position:absolute; top:20%; left:37.5%;">
		<a href="https://www.deepshikha.org/downloads/btech-question-papers" class="mock"style="text-decoration:none;">
		<div style="height:80%; width:80%; margin-left:37px;">
				<img src="animated2.jpg" style="height:100%; width:100%; border-radius: 50%;">
		</div>
		<h1 style="margin-left:67px;margin-top:5px;">SAMPLE PAPER</h1></a>
	</div>

	<div class="mock" style="border-radius:50%;height:50vh; width:50vh;position:absolute; top:20%; left:70%;">
		<a href="http://localhost/Exam/exammock.php" class="mock"style="text-decoration:none;">
		<div style="height:80%; width:80%; margin-left:37px;">
				<img src="animated5.jpg" style="height:100%; width:100%; border-radius: 50%;">
		</div>
		<h1 style="margin-left:95px;margin-top:5px;">MOCK TEST</h1></a>
	</div>
</body>
</html>
<?php
}
else
{
?><br> <a href="examlogin.html">LOGIN FIRST</a><?php
}
?>