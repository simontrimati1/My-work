<?php
//patient work
//connection to database
$slau = mysql_connect("localhost", "root", "") or die("Sorry try again");
$select = mysql_select_db("reg", $slau) or die("Sorry try again");
//get values from the field
$id = $_POST['id'];
$fname = $_POST['fname'];
$sname = $_POST['sname'];
$oname = $_POST['oname'];
$gender = $_POST['gender'];
$nationality = $_POST['nationality'];
$tel = $_POST['tel'];
//insert into the table
$sql = "insert into stu(id,fname,sname,oname,gender,nationality,tel) values('$id', '$fname', '$sname', '$oname', '$gender', '$nationality', '$tel')" or die("Sorry try again");
$result = mysql_query($sql);
if($result){
	echo"Felicitation";
}
else{
	echo"Ce gentil";
}
?>