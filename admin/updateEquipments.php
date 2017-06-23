<?php  
include("../conf.php");
define('DATABASE','signup');
session_start();
$userID=$_SESSION['login_user'];
$db=mysqli_connect(SERVER,USERNAME,PASSWORD,DATABASE);
if ($_SERVER["REQUEST_METHOD"]=="POST") {
$equipID=$_POST['equipID'];
$equiptype=$_POST['equiptype'];
$equipmake=$_POST['equipmake'];
$equipmodl=$_POST['equipmodl'];
$location=$_POST['location'];
$enabled=$_POST['enabled'];

		  $sql1 = "UPDATE equipments set equiptyp='$equiptype', equipmake='$equipmake', equipmodl='$equipmodl', location='$location' where equipID='$equipID'";

	  $result1 = mysqli_query($db, $sql1);
	  if(!$result1){
	  	echo "failed";
	  }
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>

<style>
body {margin:0;
 background-color: grey;}

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
   width: 35%;
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
<body>
<img src="../BSP.jpg">
<center><h1>Update Equipments Data</h1></center>

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
<form action="updateEquipments.php" method="POST">
	<table border="1"> 
	<!-- <tr><td>User Id</td>
	<td><?php echo $userID; ?></td></tr>
	 --><tr><td>Equipment ID</td>
		<td><input type="text" name="equipID"></td>
		</tr>
		
		<tr><td>Equipment Type
		</td>
		<td><input type="text" name="equiptype"></td>
		</tr>
		<tr><td>Equipment Make</td>
		<td><input type="text" name="equipmake"></td></tr>
		<tr><td>Equipment Model</td>
		<td><input type="text" name="equipmodl"></td></tr>
		<tr><td>Location</td>
		<td><input type="text" name="location"></td></tr>
		<tr><td>Enabled</td>
		<td><input type="text" name="enabled"></td></tr>
			<td colspan="2"><button type="submit" value="submit"> UPDATE equipments </button></td>
		</tr>

	</table>
	</form>	</body>
</html>