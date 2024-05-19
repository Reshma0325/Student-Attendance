<?php 
include 'connect.php';
     if(isset($_POST['submit'])){
           $date=$_POST['date'];
           $order=$_POST['order'];
           $description=$_POST['description'];
           

            $sql="insert into `order` values(NULL,'$date','$order','$description')";
            $result = mysqli_query($con,$sql);

            if($result)
            {
              echo "Data inserted successfully";
                header"Location:orderindex.php";
              
            }
            else
            {
                die(mysqli_error($con));
            }
     }
 ?>