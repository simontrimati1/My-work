<?php
//patient work
//connection to database
$slau = mysql_connect("localhost", "root", "") or die("Sorry try again");
$select = mysql_select_db("reg", $slau) or die("Sorry try again");
//get values from the field
$id = $_POST['id'];
$fname = $_POST['fname'];
$sname = $_POST['sname'];
$onames = $_POST['onames'];
$gender = $_POST['gender'];
$dbirth = $_POST['dbirth'];
$mbirth = $_POST['mbirth'];
$ybirth = $_POST['ybirth'];
$citi = $_POST['citi'];
$prof = $_POST['prof'];
$cour = $_POST['cour'];
$reg = $_POST['reg'];
$degree = $_POST['degree'];
$code = $_POST['code'];
$tel = $_POST['tel'];
//insert into the table
$sql = "insert into guardian(id,fname,sname,onames,gender,dbirth,mbirth,ybirth,citi,prof,cour,reg,degree,code,tel) values('$id', '$fname', '$sname', '$onames', '$gender', '$dbirth', '$mbirth', '$ybirth', '$citi', '$prof', '$cour', '$reg', '$degree', '$code', '$tel')" or die("Sorry try again");
$result = mysql_query($sql);
if($result){
	echo"Felicitation";
}
else{
	echo"Ce gentil";
}
?>