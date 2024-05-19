<?php 
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
   
    
 <div class="modal fade" id="usermodal"  role="dialog" >
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">View Attendance</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form method="post">
      <div class="modal-body">
         
          <!--- Regno --->
          <div class="form-group">
         
          <label>regno:</label>
          <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text bg-dark"><i class="fa-solid fa-list-ol text-light"></i></span>
            </div>
            <input type="text" class="form-control" placeholder="Enter regno" autocomplete="off" required="required" id="batch" name="regno">
        </div>
          </div>
         
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-dark" name="Login">Submit</button>
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
            View Student Attendance
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
    </tr>
  </thead>
  <tbody>
      
      <?php
    if(isset($_POST['Login'])){
    $regno=$_POST['regno'];
    $sql2=mysqli_query($con,"SELECT COUNT(date)as nocount FROM `attendance` WHERE regno='$regno'");
     $result2=mysqli_fetch_assoc($sql2);
      $count=$result2['nocount']; 
       $percent = ($count / 90) * 100;
       $percentage = 100 - $percent ;
    $sql1="select * from `student` where regno='$regno'";
        $result1=mysqli_query($con,$sql1);
    if($result1){
        while($row1=mysqli_fetch_assoc($result1)){
            $studentname=$row1['studentname'];
             $department=$row1['department'];
        }
    }
   
        echo "<h5><b>Regno : ".$regno."</b></h5>";
        echo "<h5><b>Name : ".$studentname."</b></h5>";
        echo "<h5><b>Department : ".$department."</b></h5>";
        echo "<h5><b>No.of.days : ".$count."</b></h5>";
        echo "<h5><b>Percentage : ".number_format($percentage,2)." % </b></h5>";

    $sql="select * from `attendance` where regno='$regno'";
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
    </tr> ';
        }
        
    }
    }
    ?>
     
  </tbody>
</table>

 <div class="row mb-3">
   
    <div class="col-5">
        <br><br><br>
        <input type="button" class="btn btn-dark " value="Go Back!" onclick="history.back()">
        <button type="button" class="btn btn-dark" align="center" onClick="window.print()">
            print
        </button>
    </div>
</div>    
</div> 

    
<!--- jquery cdn link --->
    
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    
<!--- bootstrap popper and js link --->
    
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    
  

</body>
</html>
    
 