
<?php 
include 'header.php';
include 'connect.php';
     if(isset($_POST['submit'])){
           $staffid=$_POST['staffid'];
           $staffname=$_POST['staffname'];
           $department=$_POST['department'];
           $email=$_POST['email'];
           $contactnumber=$_POST['contactnumber'];
           $password=$_POST['password'];

            $sql="insert into `staff` values('$staffid','$staffname','$department','$email','$contactnumber','$password')";
            $result = mysqli_query($con,$sql);

            if($result)
            {
              echo "Data inserted successfully";
              
            }
            else
            {
                die(mysqli_error($con));
            }
     }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>Staff</title>
    
    <!--- bootstrap css link --->
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
    <!--- font awesome cdn link --->
    
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
</head>
<body>


 
<div class="container">
    <!--- form modal --->
    
 <?php include'staffform.php' ?>

 
 
<!--- button section-->

 <div class="row mb-3">
   
    <div class="col-2">
        <br>
        <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#usermodal">
            Add New Staff
        </button>
    </div>
</div> 

<!--- table --->
    
 <?php include'stafftable.php' ?>

    
</div> 

    
<!--- jquery cdn link --->
    
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    
<!--- bootstrap popper and js link --->
    
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    
  

</body>
</html>