<html lang="en">
	<head>	
	<meta http-equiv="refresh" content="1200">
	<title>RAM RICE.COM</title>	
	<style type="text/css" media="all" >	
	<?php
	for($i=2;$i<29;$i++)
	{
	?>
	#tr<?php echo $i;?>{
	visibility:hidden;
	}
	<?php }?>
			
	select,input[type=text]{
	width:200px;
	border:2px solid gray;
	border-radius:5px;
	}
	
	input[type=Button]{
	border:3px solid black;
	
	border-radius:30px;
	background-color:aqua;
	font-size:20px;
	float:right;
	text-decoration:oblique;
	color:light-blue;
	font-weight:bold;	
	border-radius:20px;
	}	
	
	.t1{
	align:center;	
	background-color:light-blue;
	border:2px solid gray;
	border-radius;100px
	cellspacing:0px;
	cellpadding:6px;
	margin-top:10px;
	font-size:15px;
	font-weight:bold;
	color:blue;
	text-align:center;
	font-family:Georgia;
	}
	</style>
	</head>	
<body>
<table  cellpadding=0" border="0" bgcolor="#f0f8ff">
	<tr>	<td rowspan="3">  <img src="icon1.png" height="175px">  </td>  </tr>
	<tr>	<td colspan="3">  <img src="icon.png" width="1115px">  </td>  </tr>
	<tr>	<td bgcolor="khaki" colspan="2">	
		<table>	<tr>	<td width="100px" align="center">  <a href="home.htm">  <b>  <u>Home</u>  </b>  </a>  </td>
				<td width="100px" align="center">  <a href="home.htm">  <b>  <u>Home</u>  </b>  </a>  </td>
				<td width="100px" align="center">  <a href="home.htm">  <b>  <u>Home</u>  </b>  </a>  </td>
				<td width="100px" align="center">  <a href="sales&offers.htm">  <b>  <u>Sales & offer</u>  </b>  </a>  </td>
				<td width="100px" align="center">  <a href="Purchase.htm">  <b>  <u>Purchase</u>  </b>  </a>  </td>
    				<td width="100px" align="center">  <a href="home.htm">  <b>  <u>feedback</u>  </b>  </a>  </td>
				<td width="100px" align="center">  <a href="home.htm">  <b>  <u>Contact_Us</u>  </b>  </a>  </td>
				<td width="180px">  </td>
				<td width="120px" align="center">  <a href="register.htm">  <b>  <u>Register | Sign-In </u>  </b>  </a>  </tr>  </table>  </td>  </tr>
			<tr> <td bgcolor="Green" width="40px"rowspan="10"> </td>	
				<td>
					<form action="insertion.php" method="POST" >
						<table align="center" 	cellpadding="6px"class="t1" border="3px" width="1000px">
							<tr>	<td>First Name<sup style="color:red;font-size:14px">*</sup>:</td>	<td><input type="text" placeholder="Enter ur name" name="fname" required>	</td>	</tr>
							<tr>	<td>Last Name<sup style="color:red;font-size:14px">*</sup>:</td>	<td><input type="text" placeholder="Enter ur name" name="lname"required>	</td>	</tr>
							<tr>	<td>Age<sup style="color:red;font-size:14px">*</sup>:		  </td>	<td><input type="text" placeholder="Enter ur name" name="age"required>	</td>		</tr>
							<tr>	<td>Sex<sup style="color:red;font-size:14px">*</sup>:	  </td>	<td><select name="sex">
																<option value="Select" selected>Select</option>
																<option value="Male">Male</option>
																<option value="Female">Female</option>
																<option value="Transgender">Transgender</option>	</select>	</td>	</tr>
							<tr>	<td>DOB<sup style="color:red;font-size:14px">*</sup>:	  </td>	<td><input type="text" placeholder="dd/mm/yyyy" name="dob">	</td>		</tr>															
							<tr>	<td>E-mail Id<sup style="color:red;font-size:14px">*</sup>:</td>	<td><input type="text" placeholder="Enter ur name" name="e-mail">	</td>
							<tr>	<td>Mobile No.<sup style="color:red;font-size:14px">*</sup>:</td>	<td>	<input type="text" value=" +91" name="isd" style="width:35px">
															<input type="text" placeholder="Enter ur mobile no." name="mobile"style="width:130px">	</td>	</tr>
							<tr>	<td>Address Line 1<sup style="color:red;font-size:14px">*</sup>:</td>	<td><input type="text" placeholder="Enter ur name" name="add1">	</td>
							<tr>	<td>Address Lane 2<sup style="color:red;font-size:14px">*</sup>:</td>	<td><input type="text" placeholder="Enter ur name" name="add2">	</td>
							<tr>	<td>Address Lane 3:</td>	<td><input type="text" placeholder="Enter ur name" name="add3">	</td>
							<tr>	<td>City<sup style="color:red;font-size:14px">*</sup>:</td>	<td><input type="text" placeholder="Enter ur name" name="city">	</td>
							<tr>	<td>State<sup style="color:red;font-size:14px">*</sup>:</td>	<td><input type="text" placeholder="Enter ur name" name="state">	</td>
							<tr>	<td>Pincode<sup style="color:red;font-size:14px">*</sup>:</td>	<td><input type="text" placeholder="Enter ur name" name="pin">	</td>
							<tr>	<td>Country:</td>	<td><input type="text" Value="India" name="country">	</td>	</tr>
							<tr>	<td>You are a<sup style="color:red;font-size:14px">*</sup>: </td>	<td><select name="ura">
																<option value="Select" selected>Select</option>
																<option value="Student">Student</option>
																<option value="HouseWife">HouseWife</option>
																<option value="Businessman">Business Man</option>
																<option value="Employed">Employee</option>
																<option value="Senior Citizen">Senior Citizen</option>	</select>	</td>	</tr>
							<tr> <td colspan="5"><input type="Submit" value="Submit" name="submit"><input type="Button" name="Cancel" value="Cancel">
																									<input type="Button" name="reset" value="Reset">	</td>	</tr>
						</table>
					</form>
				</td>	
			</tr>			
		</table>
	</body>
</html>