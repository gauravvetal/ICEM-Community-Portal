<?php
	include('conn.php');
	session_start();
	if (!isset($_SESSION['userid']) ||(trim ($_SESSION['userid']) == '')) {
	header('location:index.php');
    exit();
	}

	$query=mysqli_query($conn,"SELECT * FROM user WHERE userid='$_SESSION[userid]' ")or die(mysqli_error($conn));
	$row=mysqli_fetch_array($query);
	$username=$row['username'];
	$password=$row['password'];
	$email=$row['email'];
	$phone=$row['phone'];
	$your_name=$row['your_name'];

?>
<!DOCTYPE html>
<html>
<head>
	<title>chatME - Profile</title>
	<link rel="stylesheet" href="css/home.css">

	<script src="js/home.js"></script>
	<style media="screen">
body{
    padding: 0;
    margin: auto;
    font-family: 'Poppins',sans-serif;
    list-style: none;
    text-decoration: none;
    background-color:#d9e4ec;
    
}
nav{
    
    background-color: #ffff;
    height: 70px;
    justify-content: space-between;
    align-items: center;
    font-size: 16px;
    box-shadow: 10px 10px 5px grey
    
}
img{
  margin: 5px;
  
}
.nimg{
  padding: 0px;
  line-height: 20px;
  
}
nav ul{
    float: right;
    margin-right: 20px;
}
nav ul li{
    align-items: center;
    display: inline-block;
    margin: 0 5px;
    line-height: 40px;
    
    
}
nav ul li a{

    color: #52ab98;
    border-radius: 7px;
    padding: 10px 10px;
    text-decoration: none;

}
.h1:hover{
    background:#52ab98;
    transition: 0.5s;
    color: #fff;
    padding: 18px;
    font-size:18px;

}
	</style>
</head>
<body>
<nav>
        <a href="#" class="nimg"><img src="iimp-logo.png" width="380"> </a>
       <ul>
        <li><a href="home1.php" class="h1">Home</a></li>
        <li><a href="logout.php" class="h1">Logout</a></li>

       </ul>
    </nav>
<table id="chat_room" align="center">

	<tr>
	<th><h4>Profile Settings </h4></th>
	</tr>

			<tr>
			<td>
			<h4>Hi there, <font color="blue"><?php echo $your_name; ?></font></h4>
			</td>
			</tr>
	<tr>
		<td><b>Details</b></td>
	</tr>
	<tr>
		<td>Username:&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" value="<?php echo $username;?>" disabled /></td>
	</tr>

	<tr>
		<td>Password:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="password" value="<?php echo $password; ?>"  disabled /></td>
	</tr>

	<tr>
		<td>Email:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="email" value="<?php echo $email; ?>" disabled /></td>
	</tr>

	<tr>
		<td>Phone:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" value="<?php echo $phone; ?>" disabled/></td>
	</tr>

 	<tr>
		<td></td>
	</tr>

	<tr>
		<td><a href="edit_details.php?userid=<?php echo $_SESSION['userid']; ?>">Edit Details</a></td>
	</tr>
</table>
</body>
</html>