<fieldset>
    <legend><b>REGISTRATION</b></legend>
	<form action="login.php"  method="post">
	<form>
		<br/>
		<table width="100%" cellpadding="0" cellspacing="0">
			<tr>
				<td>Name</td>
				<td>:</td>
				<td><input name="name" type="text"></td>
				<td></td>
			</tr>		
			<tr><td colspan="4"><hr/></td></tr>
			<tr>
				<td>Email</td>
				<td>:</td>
				<td>
					<input name="email" type="text">
					<abbr title="hint: sample@example.com"><b>i</b></abbr>
				</td>
				<td></td>
			</tr>		
			<tr><td colspan="4"><hr/></td></tr>
			<tr>
				<td>User Name</td>
				<td>:</td>
				<td><input name="userName" type="text"></td>
				<td></td>
			</tr>		
			<tr><td colspan="4"><hr/></td></tr>
			<tr>
				<td>Password</td>
				<td>:</td>
				<td><input name="password" type="password"></td>
				<td></td>
			</tr>		
			<tr><td colspan="4"><hr/></td></tr>
			<tr>
				<td>Confirm Password</td>
				<td>:</td>
				<td><input name="confirmPassword" type="password"></td>
				<td></td>
			</tr>		
			<tr><td colspan="4"><hr/></td></tr>
			<tr>
				<td colspan="3">
					<fieldset>
						<legend>Gender</legend>    
						<input name="gender" value"Male" type="radio">Male
						<input name="gender"  value"Female" type="radio">Female
						<input name="gender" value"Other" type="radio">Other
					</fieldset>
				</td>
				<td></td>
			</tr>		
			<tr><td colspan="4"><hr/></td></tr>
			<tr>
				<td colspan="3">
					<fieldset>
						<legend>Date of Birth</legend>    
						<input type="text" size="2" />/
						<input type="text" size="2" />/
						<input type="text" size="4" />
						<font size="2"><i>(dd/mm/yyyy)</i></font>
					</fieldset>
				</td>
				<td></td>
			</tr>
		</table>
		<hr/>
		<input type="submit" value="Submit">
		<input type="reset">
	</form>
</fieldset>



<?php
error_reporting (0);
if(isset($_POST['name'])){
		$str = $_POST['name'];
		$str1 = $str[0];
		if($_POST['name']=="")
		{
			echo "Field Cannot be empty ! <br/>";
			unset($_POST['name']);
		}
		if(str_word_count($str)<2)
		{
			echo "Must contain at least two words !<br/>";
			unset($_POST['name']);
		}
		if (!preg_match('/^[a-zA-Z]/', $str1))
		{
			echo "Must start with a letter !<br/>";
			unset($_POST['name']);
		}
		echo $_POST['name']."<br/>";
	}
if(isset($_POST['email'])){
		$str = $_POST['email'];
		$str1 = $str[0];
		if($_POST['email']=="")
		{
			echo "Field Cannot be empty ! <br/>";
			unset($_POST['email']);
		}
		if ($str1=="@")
		{
			echo "Email cannot start with @ !<br/>";
			unset($_POST['email']);
		}
		if (!filter_var($str, FILTER_VALIDATE_EMAIL))
		{
			echo "Invalid Email !<br/>";
			unset($_POST['email']);
		}
		echo $_POST['email']."<br/>";
	}
if(isset($_POST['password']) && isset($_POST['confirmPassword'])){
	if($_POST['password'] == $_POST['confirmPassword'])
		echo "Password OK!<br/>";
	else
		echo "Password doesnot match!<br/>";
}
?>


<?php

if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['userName']) && isset($_POST['password']) && isset($_POST['confirmPassword']) && isset($_POST['gender']) && isset($_POST['day'])&& isset($_POST['month'])&& isset($_POST['year']))  {
    
    if ($_POST['password'] == ($_POST['confirmPassword'] )) {  
	
	$servername ="localhost";
	$username 	="root";
	$password 	="";
	$dbname 	="webtech";
	
	
$conn = mysqli_connect($servername, $username, $password, $dbname);
	
	
	
	if(!$conn){
		die("Connection Error!".mysqli_connect_error());
	}
	
	$sql = "insert into user values($_POST['name'].$_POST['email'].$_POST['email'].$_POST['email'])";
	
	echo "ID: ".$row['id']."<br/>NAME: ".$row['name']."<br/>PASSWORD: ".$row['password']."<br/><br/>";
	if(mysqli_query($conn, $sql)){
		echo "<br/> Data Inserted!";
	}else{
		echo "<br/> SQL Error".mysqli_error($conn);
	}

	mysqli_close($conn);
?>
	
	
	
	
	
	
	
        
       
































