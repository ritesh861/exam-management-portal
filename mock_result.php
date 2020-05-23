
<?php session_start();
$connect=mysqli_connect('localhost','root');

mysqli_select_db($connect,'exam');

if(isset($_SESSION["user_login"])){?>



<?php

$one=$_POST['one'];
$two=$_POST['two'];
$three=$_POST['three'];
$four=$_POST['four'];
$five=$_POST['five'];
$six=$_POST['six'];

$score=0;


echo "<h2><b><u>YOUR RESULT SHEET<br><br></h2></b></u>";


if($one==11)
{$score++;
echo "1>CORRECT ANSWER<br><br>";}

else{echo "1>WRONG ANSWER<i>   (correct ans-11)</i><br><br>";
}

if($two==56)
{$score++;
echo "2>CORRECT ANSWER<br><br>";}
else{echo "2>WRONG ANSWER<i>   (correct ans-56)</i><br><br>";
}

if($three==103)
{$score++;
echo "3>CORRECT ANSWER<br><br>";}
else{echo "3>WRONG ANSWER<i>   (correct ans-103)</i><br><br>";
}

if($four==5)
{$score++;
echo "4>CORRECT ANSWER<br><br>";}
else{echo "4>WRONG ANSWER<i>   (correct ans-5)</i><br><br>";
}

if($five==20)
{$score++;
echo "5>CORRECT ANSWER<br><br>";}
else{echo "5>WRONG ANSWER<i>   (correct ans-20)</i><br><br>";
}

if($six==28)
{$score++;
echo "6>CORRECT ANSWER<br><br>";}
else{echo "6>WRONG ANSWER<i>   (correct ans-28)</i><br><br>";
}

$connect=mysqli_connect('localhost','root');

mysqli_select_db($connect,'exam');
$r=$_SESSION["user_login"];

$m="INSERT INTO ans (no,roll,ans_one,ans_two,ans_three,ans_four,ans_five,ans_six) VALUES ('','$r','$one','$two','$three','$four','$five','$six')";

mysqli_query($connect,$m);


?>

<h1><?php echo "<hr>ROLL :<u>".$_SESSION["user_login"]." 's</u>    SCORE is:";?>
<br>
<br>
<h2><?php echo $score." out of 6 questions answered correctly<h1><hr></h1>" ;?></h2>

<br>
<br>
<a href="http://localhost/Exam/examafterlogin.php">GO BACK</a>



<?php
}
else
{
?><br> <a href="examlogin.html">LOGIN FIRST</a><?php
}
?>


