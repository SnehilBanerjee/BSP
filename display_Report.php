<!DOCTYPE html>
<html>
<head>
	<title>Display Report</title>
</head>
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


}</style>
<body>
<center><h1>BHILAI STEEL PLANT</h1></center>
<center><h2>Reports</h2></center>

<ul>
  <li><a href="homepage.php">Home Page</a></li>
  <li><a href="signUpPage.php">Create User</a></li>
  <li><a href="deleteUser.php">Delete User</a></li>
  <li><a href="display_Report.php">Display Reports</a></li>
  <li><a href="update_log.php">Update Log</a></li>
  <li><a href="create_LOG.php">Create Log</a></li>
</ul>

<!-- another nav bar for searching and other queries -->
date
userid
productid
logid
status
Agency

<!-- end navbar -->

</body>
</html>