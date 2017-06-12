<?php  
include("conf.php");
define('DATABASE','signup');
$db=mysqli_connect(SERVER,USERNAME,PASSWORD,DATABASE);
if ($_SERVER["REQUEST_METHOD"]=="POST") {
	$email=$_POST['email'];
		  $sql="DELETE FROM signup WHERE email='$email'";
	  $result = mysqli_query($db,$sql);
}
?>
 <!DOCTYPE html>
 <html>	
 <head>
 	<title>Delete User</title>
 </head>

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

li {
    float: left;
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

input{
	height: 18px;
	width: 200px;
}
li a {
    display: block;
    color: white;
    text-align: center;
    padding: 24px 26px;
    text-decoration: none;
}
</style>
 <body>
 <center><h1>BHILAI STEEL PLANT</h1></center>
<center><h2>Delete User</h2></center>


<ul>
  <li><a href="homepage.php">Home Page</a></li>
  <li><a href="signUpPage.php">Create User</a></li>
  <li><a href="deleteUser.php">Delete User</a></li>
  <li><a href="displayRep.php">Display Reports</a></li>
  <li><a href="update_log.php">Update Log</a></li>
    <li><a href="create_LOG.php">Create Log</a></li>
</ul>


 <form action="deleteUser.php" method="POST">
 	<TABLE border="1" align="center">
 		<tr>
 		<td>enter the email</td>
 		<td><input type="text" name="email"></td>
 		</tr>
 		<tr><td colspan="2" align="center">
 			<button type="submit" name="submit">delete User</button>
 		</td></tr>
 	</TABLE> 
 </form>
 </body>
 </html>