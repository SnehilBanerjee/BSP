<?php  
include("../conf.php");
define('DATABASE','signup');
$db=mysqli_connect(SERVER,USERNAME,PASSWORD,DATABASE);
session_start();	
	$userID=$_SESSION['login_user'];
	
$sqlcount="SELECT * FROM logdata";
	$r = mysqli_query($db,$sqlcount);
	$numberoflogs=mysqli_num_rows($r);
	$log=$numberoflogs+10001;
if ($_SERVER["REQUEST_METHOD"]=="POST") {
	$t=date("y/m/d");
	$status=$_POST['status'];
	$Agency=$_POST['Agency'];
	// call discription
	$serial=1;
	$email=$_POST['email'];
	$pdesc=$_POST['pdesc'];
	$priorty=$_POST['priorty'];
	$equipID=$_POST['equipID'];

	$sql2="SELECT * FROM signup WHERE remarks = '$userID'";
	$r = mysqli_query($db,$sql2);
      
      $count = mysqli_num_rows($r);
      if($count == 1) {     
      		
	  		  

		  $sql="INSERT INTO  logdata(t,userID,logID,status,Agency,pID,pdesc,priority) VALUES ('$t','$userID','$log', '$status','$Agency','$equipID','$pdesc','$priorty')";
	  $result = mysqli_query($db,$sql);
	  $sq="INSERT INTO  history(t,userID,logID,logSerial,pdesc) VALUES ('$t','$userID','$log','$serial','$pdesc')";
	  $r2 = mysqli_query($db,$sq);
	  $logDetails="log-ID:".$log."\n Date:".$t."\n Agency:".$Agency."\n Problem Discription:".$pdesc."\n Equipment-ID:".$equipID;
	  // $result2 = mysqli_query($db,$sq1);
	  $a=mail($email, 'Complain logged', $logDetails);
	    echo "<script> alert('successfully logged the problem and sent an email')</script>";
	  			header("refresh:0");
	    }	
	  		  else{
	  		  echo "<script> alert('unsuccessfull')</script>";
	  			header("refresh:0");
	  	
         }}

?>
<!DOCTYPE html>
<html>
<head>
	<title>CreateLOG</title>
}
</head>
<!-- style for the nav bar  -->	
<style>
body{
	margin: 0;
	background-color: grey;
}
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
   left: 5%;
   top:48%;
   background-color: #f6f6f6;
   width: 25%;
   text-align: center;
   font-size: 26px;
   border-spacing: 1px;
   padding: 2px;
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


}img{
   position: relative;
   height: 20%;
   width: 35%;
   left: 35%;
   top:5%;
}
</style>
<!-- style for navbar end here -->


<body>
<!-- basic navbar template -->
<img src="../BSP.jpg">
<center><h1>Create log</h1></center>


<ul>
    <li><a href="homepage.php">Home Page</a></li>
    <li><a href="signUpPage.php">Create User</a></li>
    <li><a href="deleteUser.php">Delete User</a></li>
    <li><a href="create_LOG.php">Create Log</a></li>
    <li><a href="adminDisplayReport.php">Display Reports</a></li>
	<li><a href="admin_history.php">Update Logs</a></li>    
    <li><a href="updateEquipments.php">Updates Equipments</a></li>
    <li><a href="changePWD.php">Change Password</a></li>
    <li><a href="../unset.php"> Sign Out </a></li>
   
</ul>
<!-- end for nav bar -->

<form name="create_LOG" action="create_LOG.php" method="POST">
	<table border="1" > 
	<tr><td>User-ID</td>
		<td><?php echo $userID; ?></td>
	</tr>
	<tr><td>Log-ID</td>
		<td><?php echo $log; ?></td>
	</tr>
		<tr>
			<td>Status</td>
			<td><select value="I" name="status" >
				<option>I</option>
				<option>P</option>
				<option>C</option>
				<option>X</option>
			</select></td>
		</tr>

		<tr>
			<td>Agency</td>
			<td><input type="text" name="Agency" required></td>
		</tr>

		<tr>
			<td>Priorty</td>
			<td><select value="low" name="priorty" >
				<option>low</option>
				<option>medium</option>
				<option>high</option>
			</select></td>
		</tr>

		<tr>
			<td>equipID</td>
			<td><select name="equipID">
				<option>p123</option>
				<option>C123</option>
				</select></td>
		</tr>

		<tr>
			<td>Problem Description</td>
			<td><input type="text" name="pdesc" required></td>
		</tr>
		<tr><td>
			enter the email id 
		</td>
		<td>
			<input type="email" name="email">
		</td>
		</tr>
		<tr>
			<td colspan="2"><button type="submit" value="submit"> create Log</button></td>
		</tr>
	</table>
</form>
</body>
</html>