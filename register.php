<?php

if (isset($_POST['submit'])) {
	$username = $_POST['username'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$phone = $_POST['phone'];

	$conn = new mysqli('localhost', 'id10444202_root','webhost','id10444202_registation');

	if (mysqli_connect_error()) {
		die('Connect_Error('.mysqli_connect_errno().')'. mysqli_connect_error());
	}else{

		$sql = "INSERT INTO user (username,password,email,phonenumber) "
				. "VALUES ('$username','$password','$email','phone')";

		echo "new record inserted sucessfully "

}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Register Form</title>
	<style >
		*{
			margin:0 auto;
			box-sizing: border-box;
		}
		img{
			opacity: 0.4;
		}
		h3{
			color: orange;
		}
		h1{
			color:white	;
		}
		p{
			color:white;
		}
		td{
			color:white;
		}

	</style>
</head>
<body>
	<div class=page style="width:100%; height: 610px;background-image:url(images/4.jpg);background-repeat: no-repeat;background-size: 100% ">
		<h2 style="float: right;margin-right: 30px;margin-top: 10px"><a href=index.html>Home</a></h2>
			 
		<table align="center" width="50%" border="0">
		<form action="register.php" method="post" onsubmit="return validation()">
			<tr>
				<td align="center" colspan="3">
				
				</td>
			</tr>
			



			<tr>
				<td align="center" colspan="3">
					<h1><u>Register For Event</u></h1><br>
					<p>Fill out the information carefully</p><br>
				</td>
			</tr>
			


			<tr>
				<td>
					<h3>Username :</h3></td> 
					<td width="30%"><input type="text" name="username" id=user>Name</td>
					<td colspan="2" width="70%"><span id="username" style="color: red;font-size:20px; "> </span></td>
				
			</tr>


			
			


			<tr><br>
				<td><br>
					<h3>
					Password:</h3></td>
				<td><br><input type="text" name="password" id="pass">password </td>
				<td colspan="2" width="70%"><span id="passwords" style="color: red;font-size:20px; "> </span></td>		
			</tr>



			

			<tr>
				<td><br>
					<h3>
					Gender:</h3>
					<td><br><input type="radio" name="G1">Male<input type="radio" name="G2">Female</td>
				</td>
			</tr>


			<tr>
				<td><br>
					<h3>Email :</h3> </td>
					<td><input type="text" name="email" placeholder="ex:myname@example.com" id=email></td>
					<td colspan="2" width="70%"><span id="emails" style="color: red;font-size:20px; "> </span></td>
				
			</tr>




		



			<tr>
				<td><br>
						<h3>Phone Number:</h3></td>
					<td> <br><input type="text" name="phone" id=phone><br>Phone-Number</td>
					<td colspan="2" width="70%"><span id="mobileno" style="color: red;font-size:20px; "> </span></td>
				
			</tr>
				
		
			


			
			<tr>
				<td><br>
					<button type="reset" name="Reset" >Reset</button>
				</td><br>
					<td><button type="Submit" name="submit" value="Submit" >Submit</button></td>
				
			</tr>


		</form>
					
	</table>

		
	</div>


	<script type="text/javascript">
		

		function validation(){

			var user = document.getElementById('user').value;
			var pass = document.getElementById('pass').value;
			var confirmpass = document.getElementById('confpass').value;
			var mobileNumber = document.getElementById('phone').value;
			var emails = document.getElementById('email').value;





			if(user == ""){
				document.getElementById('username').innerHTML =" ** Please fill the name field";
				return false;
			}
			if((user.length <= 2) || (user.length > 20)) {
				document.getElementById('username').innerHTML =" ** name lenght must be between 2 and 20";
				return false;	
			}
			if(!isNaN(user)){
				document.getElementById('username').innerHTML =" ** only characters are allowed";
				return false;
			}




			if(pass == ""){
				document.getElementById('passwords').innerHTML =" ** Please fill the password field";
				return false;
			}
			if((pass.length <= 5) || (pass.length > 20)) {
				document.getElementById('passwords').innerHTML =" ** Passwords lenght must be between  5 and 20";
				return false;	
			}


			if(pass!=confirmpass){
				document.getElementById('confrmpassword').innerHTML =" ** Password does not match the confirm password";
				return false;
			}



			if(confirmpass == ""){
				document.getElementById('confrmpassword').innerHTML =" ** Please fill the confirmpassword field";
				return false;
			}




			if(mobileNumber == ""){
				document.getElementById('mobileno').innerHTML =" ** Please fill the mobile NUmber field";
				return false;
			}
			if(isNaN(mobileNumber)){
				document.getElementById('mobileno').innerHTML =" ** fname must write digits only not characters";
				return false;
			}
			if(mobileNumber.length!=10){
				document.getElementById('mobileno').innerHTML =" ** Mobile Number must be 10 digits only";
				return false;
			}



			if(emails == ""){
				document.getElementById('emails').innerHTML =" ** Please fill the email idx` field";
				return false;
			}
			if(emails.indexOf('@') <= 0 ){
				document.getElementById('emails').innerHTML =" ** @ Invalid Position";
				return false;
			}

			if((emails.charAt(emails.length-4)!='.') && (emails.charAt(emails.length-3)!='.')){
				document.getElementById('emails').innerHTML =" ** . Invalid Position";
				return false;
			}
		}

	</script>

</body>
</html>