<?php
//patient work
//connection to database
$slau = mysql_connect("localhost", "root", "") or die("Sorry try again");
$select = mysql_select_db("reg", $slau) or die("Sorry try again");
//get values from the field
$id = $_POST['id'];
$fname = $_POST['fname'];
$sname = $_POST['sname'];
$lname = $_POST['lname'];
$reg = $_POST['reg'];
$gender = $_POST['gender'];
$dbirth = $_POST['dbirth'];
$mbirth = $_POST['mbirth']; 
$ybirth = $_POST['ybirth'];
$faname = $_POST['faname'];
$maname = $_POST['maname'];
$citi = $_POST['citi'];
$fac = $_POST['fac'];
$program = $_POST['program'];
$code = $_POST['code'];
$tel = $_POST['tel'];
$email = $_POST['email'];
//insert into the table
$sql = "insert into student(id,fname,sname,lname,reg,gender,dbirth,mbirth,ybirth,faname,maname,citi,fac,program,code,tel,email) values('$id', '$fname', '$sname', '$lname', '$reg', '$gender', '$dbirth', '$mbirth', '$ybirth', '$faname', '$maname', '$citi', '$fac', '$program', '$code', '$tel', '$email')" or die("Sorry try again");
$result = mysql_query($sql);
if($result){
	echo"Felicitation";
}
else{
	echo"Ce gentil";
}
?>