<?php  
include("conf.php");
define('DATABASE','signup');
$db=mysqli_connect(SERVER,USERNAME,PASSWORD,DATABASE);
if ($_SERVER["REQUEST_METHOD"]=="POST") {
	$userID=$_POST['user'];
	$log=uniqid();
	$t=date("y/m/d");
	$status=$_POST['status'];
	$Agency=$_POST['Agency'];
	$prodID=$_POST['pID'];
	$pdesc=$_POST['pdesc'];
		  $sql="UPDATE logdata SET t=$t,userID=$userID,logID=$log,status=$status,Agency=$Agency,pID=$prodID,pdesc=$pdesc where userID=$userID";
	  $result = mysqli_query($db,$sql);
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>update</title>
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
    position: relative;
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
	height: 20px;
	width: 175px;
}
select{
	height: 20px;
	width: 170px;
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
<center><h2>Home Page</h2></center>


<ul>
  <li><a href="homepage.php">Home Page</a></li>
  <li><a href="signUpPage.php">Create User</a></li>
  <li><a href="deleteUser.php">Delete User</a></li>
  <li><a href="displayRep.php">Display Reports</a></li>
  <li><a href="update_log.php">Update Log</a></li>
    <li><a href="create_LOG.php">Create Log</a></li>
</ul>
<!-- end for nav bar -->

<form name="update_LOG" action="update_log.php" method="POST" >
	<table border="1"> 
		<tr>
			<td>UserID</td>
			<td><input type="text" name="user" required></td>
		</tr>
<!-- 
		<tr>
			<td>LogID</td>
			<td><input type="text" name="logID" required></td>
		</tr> -->


		<tr>
			<td>Status</td>
			<td><select name="status">
				<option value="I">I</option>
				<option value="P">P</option>
				<option value="C">C</option>
				<option value="X">X</option>
			</select></td>
		</tr>

		<tr>
			<td>Agency</td>
			<td><input type="text" name="Agency"></td>
		</tr>

		<tr>
			<td>ProductID</td>
			<td><input type="text" name="pID"></td>
		</tr>
		<tr>
			<td>Product Description</td>
			<td><input type="text" name="pdesc"></td>
		</tr>

		<tr>
			<td colspan="2"><button type="submit" value="submit"> update</button></td>
		</tr>
	</table>
</form>
</body>
</html>