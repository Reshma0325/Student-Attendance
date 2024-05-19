
<table class="table"  id="stafftable">
  <thead class="table-dark">
    <tr>
      <th scope="col">StaffId</th>
      <th scope="col">StaffName</th>
      <th scope="col">Department</th>
      <th scope="col">Email</th>
      <th scope="col">ContactNumber</th>
      <th scope="col">Password</th>
      <th scope="col">Update/Delete</th>
    </tr>
  </thead>
  <tbody>
      
      <?php
    
    $sql="select * from `staff`";
    $result=mysqli_query($con,$sql);
    if($result){
        while($row=mysqli_fetch_assoc($result)){
             $staffid=$row['staffid'];
             $staffname=$row['staffname'];
             $department=$row['department'];
             $email=$row['email'];
             $contactnumber=$row['contactnumber'];
             $password=$row['password'];
            echo'  <tr>
      <th scope="row">'.$staffid.'</th>
      <td>'.$staffname.'</td>
      <td>'.$department.'</td>
      <td>'.$email.'</td>
      <td>'.$contactnumber.'</td>
       <td>'.$password.'</td>
      <td>
     
     <a href="editstaff.php?updateid='.$staffid.'" class="me-5 editstaff" title="Edit Staff"><i class="fas fa-edit text-success"></i></a>
     
      <a href="delstaff.php?deleteid='.$staffid.'" class="me-5 deletestaff" title="Delete Staff"><i class="fas fa-trash-alt text-danger"></i></a>
      </td>
    </tr> ';
        }
        
    }
    
    ?>
     
  </tbody>
</table>