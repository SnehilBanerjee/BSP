<?php
$servername = "localhost";
$username   = "root";
$password 	= "";
$database 	= "signup";
$currDate 	= date("Y-m-d");
$conn = new mysqli($servername, $username, $password, $database);

if($_SERVER["REQUEST_METHOD"] == "POST") {
	$searchByDate = $_POST['input_date'];
	$searchByDateTo = $_POST["input_date_to"];
	$searchByUserID = $_POST["userID"];

if($searchByDate=='' && $searchByDateTo=='')
{
	echo "case left and right empty";
	$sql = "SELECT * FROM logdata WHERE userID = '$searchByUserID' ";
}
else if($searchByDate=='' && $searchByUserID==''){
	echo "case left and id empty";
	$sql = "SELECT * FROM logdata WHERE t BETWEEN '$searchByDateTo' AND '$currDate'";
}
else if($searchByDateTo=='' && $searchByUserID=='')
{
	echo "case right and id empty";
	$sql = "SELECT * FROM logdata WHERE t BETWEEN '$searchByDate' AND '$currDate' ";
}
else if($searchByDate==''){
	$sql = "SELECT * FROM logdata WHERE t = '$searchByDateTo' AND userID='$searchByUserID' ";
}
else if($searchByDateTo=='')
{
	$sql = "SELECT * FROM logdata WHERE t= '$searchByDate' AND userID='$searchByUserID' ";
}
else if ($searchByUserID=='')
{	echo "case userid empty";
	$sql = "SELECT * FROM logdata WHERE t BETWEEN '$searchByDate' AND '$searchByDateTo' ";	
}

else
{
	echo "no empty";
	$sql = "SELECT * FROM logdata WHERE t BETWEEN '$searchByDate' AND '$searchByDateTo' AND userID='$searchByUserID' ";
}
// else if($searchByDate=='')
// {
// 	$sql = "SELECT * FROM logdata WHERE "
// }

$result = $conn->query($sql);
							$row=array();
							if(!$result){
								die("Database query failed:".mysql_error());
							}
							 echo "<table width=\"50%\" border=\"1\" cellspacing=\"10\" align=\"center\" style=\"border: 1px solid black,padding: 4px;\" >";  
							 echo "<th>Date</th><th>User ID</th><th>Log ID</th><th>Status</th><th>Agency</th><th>P id</th><th>Problem Description</th>";
							while ($row = mysqli_fetch_array($result)){
								echo "<tr height=\"20\" style=\"border: 1px solid black,padding: 4px;\">";
								echo 
								"<td width=\"30\" style=\"border: 1px solid black;\">".$row["t"]."</td>
								<td style=\"border: 1px solid black;\">".$row["userID"]."</td>
								<td width=\"30\" style=\"border: 1px solid black;\"><a href='admin_history.php?logID=".$row["logID"]."'>".$row["logID"]."</a></td>
								<td width=\"0\" style=\"border: 1px solid black;\">".$row["status"]."</td>
								<td width=\"0\" style=\"border: 1px solid black;\">".$row["Agency"]."</td>
								<td width=\"0\" style=\"border: 1px solid black;\">".$row["pID"]."</td>
								<td width=\"0\" style=\"border: 1px solid black;\">".$row["pdesc"]."</td>";

						        echo "</tr>";
							 }


}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
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

<form method="post">
	<strong>DATE FROM:</strong>
	<input type="text" name="input_date" placeholder="yy-mm-dd"></input>
	<strong>DATE TO:</strong>
	<input type="text" name="input_date_to" placeholder="yy-mm-dd"></input>
	<strong>USER ID:</strong>
	<input type="text" name="userID"></input>	
	<input name="Submit" type="Submit" value="Submit">
</form>
			
</body>
</html>