<?php
//patient work
//connection to database
$slau = mysql_connect("localhost", "root", "") or die("Sorry try again");
$select = mysql_select_db("reg", $slau);
//get values from the field
$id = $_POST['id'];
$a = $_POST['fname'];
$b = $_POST['sname'];
$c = $_POST['gender'];
$d = $_POST['nationality'];
$e = $_POST['tel'];
//insert into the table
$sql = "insert into pati(id,fname,sname,gender,nationality,tel) values('$id', '$a', '$b', '$c', '$d', '$e')";
$result = mysql_query($sql);
if($result){
	echo"<p align=center><font color=orange size=6>Thank parent for you registration. Your details informations have been sent successfully</font><br><font color=blue size=4><a href=connect.php>Register again</a></p>";
}
else{
	echo"<p align=center><font size=6 color=red><blink>OOOOhps! Try again later and fill the form perfectly!!!!!!</blink></font></p>";
}
?>