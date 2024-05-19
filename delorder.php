<?php
include 'connect.php';
if(isset($_GET['deleteid'])){
    $date=$_GET['deleteid'];
    
    $sql="delete from `order` where date='$date'";
    $result=mysqli_query($con,$sql);
    if($result){
       // echo"Deleted Successfully";
        header('location:orderindex.php');
    }else{
         die(mysqli_error($con));
    }
}

?>