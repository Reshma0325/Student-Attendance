<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
     <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>Staffheader</title>
    <link rel="stylesheet" href="headerstyle.css">
</head>
<body>
<header>
		<nav>
            <ul class="nav_links">
            <li> <b><?php  echo ' Welcome ' . $_SESSION['User']; ?> </b></li>
            <li><a href="viewstudent.php" class="text-light"><b>Student</b></a></li>
			<li><a href="vieworder.php" class="text-light"><b>Order</b></a></li>
			<li><a href="enterattendance.php" class="text-light"><b>EnterAttendance</b></a></li>
            <li><a href="viewattendance.php"class="text-light"><b>ViewAttendance</b></a></li>
            </ul>
	</nav>
                <a class="cta" href="index.php"><button><b>Logout</b></button></a>
</header>
</body>
</html>