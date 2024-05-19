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
    <title>View Attendance</title>
    
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
        <h5 class="modal-title" id="exampleModalLabel">View Student Attendance</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form method="post">
      <div class="modal-body">
         
          <!--- Batch --->
          <div class="form-group">
          <label>Date:</label>
          <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text bg-dark"><i class="fa-solid fa-people-group text-light"></i></span>
            </div>
            <input type="date" class="form-control" placeholder="Enter Batch" autocomplete="off" required="required" id="date" name="date">
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
            View Attendance
        </button>
    </div>
</div> 
<!--- table --->
    
<br> 
<table class="table"  id="studenttable">
  <thead class="table-dark">
    <tr>
      <th scope="col">Regno</th>
      <th scope="col">Date</th>
      <th scope="col">Order</th>
      <th scope="col">H1</th>
      <th scope="col">H2</th>
      <th scope="col">H3</th>
      <th scope="col">H4</th>
      <th scope="col">H5</th>
      <th scope="col">Edit/Delete</th>
    </tr>
  </thead>
  <tbody>
      
      <?php
    if(isset($_POST['submit'])){
    $date=$_POST['date'];
    $sql="select * from `attendance` where date='$date'";}
      else {
          $sql="select * from `attendance`";
      }
    $result=mysqli_query($con,$sql);
    if($result){
        while($row=mysqli_fetch_assoc($result)){
             $regno=$row['regno'];
             $date=$row['date'];
             $order=$row['order'];
             $h1=$row['h1'];
             $h2=$row['h2'];
             $h3=$row['h3'];
             $h4=$row['h4'];
             $h5=$row['h5'];
            echo'  <tr>
      <th scope="row">'.$regno.'</th>
      <td>'.$date.'</td>
      <td>'.$order.'</td>
      <td>'.$h1.'</td>
      <td>'.$h2.'</td>
      <td>'.$h3.'</td>
      <td>'.$h4.'</td>
      <td>'.$h5.'</td>
      <td> <a href="editattendance.php?updateid='.$regno.'&updatedate='.$date.'" class="me-5 editattendance" title="Edit Attendance"><i class="fas fa-edit text-success"></i></a>
       <a href="delattendance.php?deleteid='.$regno.'&deletedate='.$date.'" class="me-5 deleteattendance" title="Delete Attendance"><i class="fas fa-trash-alt text-danger"></i></a></td>
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
    
 