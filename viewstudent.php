<?php 
include 'staffheader.php';
include 'connect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>Student</title>
    
    <!--- bootstrap css link --->
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
    <!--- font awesome cdn link --->
    
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
</head>
<body>
<div class="container">
   
        <!--- form modal --->
    
 <div class="modal fade" id="usermodal"  role="dialog" >
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">View Students</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form method="post">
      <div class="modal-body">
         
          <!--- Batch --->
          <div class="form-group">
          <label>Batch:</label>
          <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text bg-dark"><i class="fa-solid fa-people-group text-light"></i></span>
            </div>
            <input type="text" class="form-control" placeholder="Enter Batch" autocomplete="off" required="required" id="batch" name="batch">
        </div>
          </div>
         
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-dark" name="submit">Submit</button>
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
    
      </div>
        </form>
    </div>
  </div>
</div>
    
<div class="row mb-3">
   
    <div class="col-5">
        <br>
        <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#usermodal">
            View Student
        </button>
    </div>
</div> 
<!--- table --->
    
<br> 
<table class="table"  id="studenttable">
  <thead class="table-dark">
    <tr>
      <th scope="col">Regno</th>
      <th scope="col">StudentName</th>
      <th scope="col">Department</th>
      <th scope="col">Batch</th>
      <th scope="col">Email</th>
      <th scope="col">ContactNumber</th>
    </tr>
  </thead>
  <tbody>
      
      <?php
    if(isset($_POST['submit'])){
    $batch=$_POST['batch'];
    $sql="select * from `student` where batch='$batch'";}
      else{
          $sql="select * from `student`";
      }
    $result=mysqli_query($con,$sql);
    if($result){
        while($row=mysqli_fetch_assoc($result)){
             $regno=$row['regno'];
             $studentname=$row['studentname'];
             $department=$row['department'];
             $batch=$row['batch'];
             $email=$row['email'];
             $contactnumber=$row['contactnumber'];
            echo'  <tr>
      <th scope="row">'.$regno.'</th>
      <td>'.$studentname.'</td>
      <td>'.$department.'</td>
       <td>'.$batch.'</td>
      <td>'.$email.'</td>
      <td>'.$contactnumber.'</td>
    </tr> ';
        }
        
    }
    
    ?>
     
  </tbody>
</table>

    
</div> 

    
<!--- jquery cdn link --->
    
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    
<!--- bootstrap popper and js link --->
    
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    
  

</body>
</html>
    
 