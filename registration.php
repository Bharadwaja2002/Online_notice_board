<?php
require('connection.php');
extract($_POST);
if(isset($save))
{
//check user alereay exists or not
$sql=mysqli_query($conn,"select * from user where email='$e'");

$r=mysqli_num_rows($sql);

if($r==true)
{
$err= "<font color='red'>This user already exists</font>";
}
else
{
//dob
$dob=$yy."-".$mm."-".$dd;



//encrypt your password
$pass=md5($p);


$query="insert into user values('','$n','$e','$pass','$mob','$gen','$dob',now())";
mysqli_query($conn,$query);



$err="<font color='blue'>Registration successfull !!</font>";

}
}




?>
<html>
    <body>
<h2><b>Register Now</b></h2>
		<form method="post" enctype="multipart/form-data">
			<table class="table table-bordered">
	<Tr>
		<Td colspan="2"><?php echo @$err;?></Td>
	</Tr>

				<tr>
					<td>Your Name</td>
					<td><input  type="text"  class="form-control" name="n" required/></td>
				</tr>
				<tr>
					<td>Your Email </td>
					<td><input type="email"  class="form-control" name="e" required/></td>
				</tr>

				<tr>
					<td>Your Password </td>
					<td><input type="password"  class="form-control" name="p" required/></td>
				</tr>

				<tr>
					<td>Your Mobile No. </td>
					<td><input  class="form-control" type="number" name="mob" required/></td>
				</tr>

				<tr>
					<td>Select Your Gender</td>
					<td>
				Male<input type="radio" name="gen" value="m" required/>
				Female<input type="radio" name="gen" value="f"/>
					</td>
				</tr>

			

				<tr>
					<td>Date of Birth</td>
					<td>
					<select name="yy" required>
					<option value="">Year</option>
					<?php
					for($i=1950;$i<=2016;$i++)
					{
					echo "<option>".$i."</option>";
					}
					?>

					</select>

					<select name="mm" required>
					<option value="">Month</option>
					<?php
					for($i=1;$i<=12;$i++)
					{
					echo "<option>".$i."</option>";
					}
					?>

					</select>


					<select name="dd" required>
					<option value="">Date</option>
					<?php
					for($i=1;$i<=31;$i++)
					{
					echo "<option>".$i."</option>";
					}
					?>

					</select>

					</td>
				</tr>

				<tr>


<td colspan="2" align="center">
<input type="submit" class="btn btn-success" value="Save" name="save"/>
<input type="reset" class="btn btn-success" value="Reset"/>

					</td>
				</tr>
			</table>
		</form>
	</body>
</html>
