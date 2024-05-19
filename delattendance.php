<?php
include 'connect.php';
if(isset($_GET['deleteid'])){
    $regno=$_GET['deleteid'];
     $date=$_GET['deletedate'];
    $sql="delete from `attendance` where regno='$regno' and date='$date'";
    $result=mysqli_query($con,$sql);
    if($result){
       //echo"Deleted Successfully";
        header('location:viewattendance.php');
    }else{
         die(mysqli_error($con));
    }
}

?>