<?php  
include("conf.php");
define('DATABASE','signup');
$db=mysqli_connect(SERVER,USERNAME,PASSWORD,DATABASE);
if ($_SERVER["REQUEST_METHOD"]=="POST") {
	$username=$_POST['user'];
	$password=$_POST['pwd'];
	$email=$_POST['email'];
		  $sql="INSERT INTO  signup(name,pwd,email) VALUES ('$username', '$password', '$email')";
	  $result = mysqli_query($db,$sql);
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Sign Up</title>
</head>
<!-- style for the nav bar  -->
<style>
body {margin:0;}

ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
    position: fixed;
    top: 5;
    width: 100%;
}

table{
	position:absolute;
	left: 35%;
	top:30%;
	width: 25%;
	text-align: center;
	font-size: 22px;
	border-spacing: 5px;
}

li {
    float: left;
}
input{
	height: 22px;
	width: 175px;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 24px 26px;
    text-decoration: none;
}
button{
	height: 20px;
	width: 150px;
	font-size: 14px;


}
</style>
<!-- style for navbar end here -->
<body>
<!-- basic navbar template -->
<center><h1>BHILAI STEEL PLANT</h1></center>
<center><h2>Sign Up</h2></center>


<ul>
  <li><a href="homepage.php">Home Page</a></li>
  <li><a href="signUpPage.php">Create User</a></li>
  <li><a href="deleteUser.php">Delete User</a></li>
  <li><a href="displayRep.php">Display Reports</a></li>
  <li><a href="update_log.php">Update Log</a></li>
    <li><a href="create_LOG.php">Create Log</a></li>
</ul>
<!-- end for nav bar -->

<form name="Sign_UP" action="signUpPage.php" method="POST" >
	<table border="1"> 
		<tr>
			<td>Username</td>
			<td><input type="text" name="user" required></td>
		</tr>

		<tr>
			<td>Password</td>
			<td><input type="password" name="pwd" required></td>
		</tr>

		<tr>
			<td>Confirm Password</td>
			<td><input type="password" required></td>
		</tr>

		<tr>
			<td>Email-Id</td>
			<td><input type="email" name="email"></td>
		</tr>

		<tr>
			<td colspan="2"><button type="submit" value="submit"> Sign Up</button></td>
		</tr>
	</table>
</form>
</body>
</html>