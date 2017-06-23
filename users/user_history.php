<?php  

include("../conf.php");
define('DATABASE','signup');
session_start();

$userID=$_SESSION['login_user'];
$db=mysqli_connect(SERVER,USERNAME,PASSWORD,DATABASE);
if ($_SERVER["REQUEST_METHOD"]=="POST") {
$log=$_POST["log"];
$t=date("y/m/d");
$logup=$_POST["logup"];
$sql="SELECT * FROM history WHERE logID=$log";
   $r = mysqli_query($db,$sql);
$count = mysqli_num_rows($r);
 $count=$count+1;
      $sql1="INSERT INTO  history(t,userID,logID,logSerial,pdesc) VALUES ('$t','$userID','$log','$count','$logup')";
      $r2 = mysqli_query($db,$sql1);
echo "<script> alert('successfully logged the problem')</script>";
            header("refresh:0");
           
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
<center><h1>Update Logs</h1></center>

<ul>
  <li><a href="userHomePage.php">Home Page</a></li>
    <li><a href="userCreateLog.php">Create Log</a></li>
    <li><a href="userDisplayReports.php">Display</a></li>
    <li><a href="user_history.php">Update Logs</a></li>
    <li><a href="changepwd.php">Change Password</a></li>
    <li><a href="../unset.php"> Sign Out </a></li>

</ul>
<form method="POST" action="user_history.php" name="History">
   <table>
      <tr>
         <td>User-Id</td>
         <td><?php echo $userID; ?></td>
      </tr>
      <tr>
         <td>log-ID</td>
         <td><input type="text" name="log"></td>
      </tr>
      <tr><td>Log Update</td>
      <td><input type="text" name="logup"></td>
      </tr>
      <tr><td></td>
         <td><button type="submit" name="submit" >ENTER</button></td>
      </tr>
   </table>
</form>
</body>
</html>