<!DOCTYPE html>
<html>
<head>
<title>Form</title>
<style>
    body {
      background-image: url('bg14.jpg');
      background-repeat: no-repeat;
      background-attachment: fixed; 
      background-size: 100% 100%;
    }
    </style>
</head>
<body>
<?php

	include "ysrcpsql.php";
    echo "<h1>Your Confirmed Details for Party Membership</h1>".'<br>';

	$name=$_POST['name'];
	echo "<h2>Name : ". $name.'<br></h2>';

	$voter=$_POST['vid'];
	echo "<h2>Voter Id : ". $voter.'<br></h2>';

    $dis=$_POST['dis'];
	echo "<h2>District : ". $dis.'<br></h2>';

    $con=$_POST['con'];
	echo "<h2>Constituency : ". $con.'<br></h2>';

    $man=$_POST['man'];
	echo "<h2>Mandal : ". $man.'<br></h2>';

    $pan=$_POST['pan'];
	echo "<h2>Panchayat : ". $pan.'<br></h2>';

	$query = "INSERT INTO ysrcp_mem values('$name','$voter','$dis','$con','$man','$pan');";
	if(mysqli_query($connection,$query)){
		echo " "."<br>";
	}
	else{
		echo "error:".mysqli_error($connection);
	}

?>
<br><form action="" method="post">
	<button type="submit" style="bgcolor:yellow;"><a href="fysrcp.html"> Go To Party Page</a></button>
</form> 
</body>
</html>
