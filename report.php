<?php 
include 'header.php';
include 'connect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>Reports</title>
    
    <!--- bootstrap css link --->
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
    <!--- font awesome cdn link --->
    
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
</head>
<body>


 
<div class="container">
    <!--- form modal --->
    
 

     <!-----Date----->
 <div class="modal fade" id="usermodal"  role="dialog" >
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">View Attendance</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="date.php" method="post">
      <div class="modal-body">
         
          <!--- Date --->
          <div class="form-group">
          <label>Date:</label>
          <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text bg-dark"><i class="fa-solid fa-calendar-days text-light"></i></span>
            </div>
            <input type="date" class="form-control" placeholder="Enter Date" autocomplete="off" required="required" id="date" name="date">
        </div>
          </div>
         
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-dark" name="view">Submit</button>
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
    
      </div>
        </form>
    </div>
  </div>
    </div>
    
    <!-----Date to Date--->
    
    
     <div class="modal fade" id="viewmodal"  role="dialog" >
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">View Attendance</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="datetodate.php" method="post">
      <div class="modal-body">
         
          <!--- Date --->
          <div class="form-group">
          <label>From Date:</label>
          <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text bg-dark"><i class="fa-solid fa-calendar-days text-light"></i></span>
            </div>
            <input type="date" class="form-control" placeholder="Enter From Date" autocomplete="off" required="required" id="date1" name="date1">
        </div>
          </div>
          <div class="form-group">
          <label>To Date:</label>
          <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text bg-dark"><i class="fa-solid fa-calendar-days text-light"></i></span>
            </div>
            <input type="date" class="form-control" placeholder="Enter To Date" autocomplete="off" required="required" id="date2" name="date2">
        </div>
          </div>
         
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-dark" name="view">Submit</button>
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
    
      </div>
        </form>
    </div>
  </div>
    </div>
    
    
       <!-----Student----->
 <div class="modal fade" id="studentmodal"  role="dialog" >
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">View Student Details</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="studentdetails.php" method="post">
      <div class="modal-body">
         
          <!--- Regno --->
          <div class="form-group">
          <label>Regno:</label>
          <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text bg-dark"><i class="fa-solid fa-calendar-days text-light"></i></span>
            </div>
            <input type="text" class="form-control" placeholder="Enter Regno" autocomplete="off" required="required" id="regno" name="regno">
        </div>
          </div>
         
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-dark" name="view">Submit</button>
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
    
      </div>
        </form>
    </div>
  </div>
    </div>
 
<!--- button section-->

 <div class="row mb-5">
   
    <div class="col-5">
        <br>
        <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#usermodal">
            View Date
        </button> <br><br>
        <h4><p><b>To see the attendance by date</b></p></h4>
    </div>

     
      <div class="col-10">
          <br>
        <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#viewmodal">
            View Date to Date
        </button><br><br>
          <h4><p><b>To see the attendance by from date to date</b></p></h4>
    </div>
     
     <div class="col-10">
          <br>
        <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#studentmodal">
            View Student Details
        </button><br><br>
         <h4><p><b>To see the Student details and his/her attendance</b></p></h4>
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