<?php 
require_once('connect.php');
session_start();
    if(isset($_POST['Login']))
    {
       if(empty($_POST['UName']) || empty($_POST['Password']))
       {
            header("location:adminlogin.php?Empty= Please Fill in the Blanks");
       }
       else
       {
            $query="select * from admin where adminid='".$_POST['UName']."' and adminpassword='".$_POST['Password']."'";
            $result=mysqli_query($con,$query);

            if(mysqli_fetch_assoc($result))
            {
                $_SESSION['User']=$_POST['UName'];
                header("location:studentindex.php");
            }
            else
            {
                header("location:adminlogin.php?Invalid= Please Enter Correct User Name and Password ");
            }
       }
    }
    else
    {
        echo 'Not Working Now Guys';
    }

?>