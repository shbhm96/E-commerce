<?php
include('dbcon1.php');

$fname=$_POST['fname'];
$lname=$_POST['lname'];
$name=$fname." ".$lname;
$age=$_POST['age'];
$sex=$_POST['sex'];
$dob=$_POST['dob'];
$email=$_POST['e-mail'];
$isd=$_POST['isd'];
$mobile=$_POST['mobile'];
$line1=$_POST['add1'];
$line2=$_POST['add2'];
$line3=$_POST['add3'];
$address=$line1." ".$line2." ".$line3;
$city=$_POST['city'];
$state=$_POST['state'];
$pin=$_POST['pin'];
$country=$_POST['country'];
$ura=$_POST['ura'];

$q="INSERT INTO `user_data`(`Name`, `Age`, `Sex`, `DOB`, `E-mail Id`, 'isd', `Mobile No`, `Address`, `City`, `State`, `Pincode`, `Country`, `You are a`)
 VALUES ('$name','$age','$sex','$dob','$email','$isd','$mobile','$address','$city','$state','$pin', '$country','$ura');";
 $run=mysqli_query($con,$q);
 if($run){
	 echo"Successful  Inserted";
	 
 }
 echo $q;
 mysqli_close($con);
 ?>



