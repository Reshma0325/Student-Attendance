<div class="modal fade" id="usermodal"  role="dialog" >
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Adding or Updating Staffs</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form  id="addstudent" method="post" enctype="multipart/form-data">
      <div class="modal-body">
          <!--- StaffId --->
          <div class="form-group">
          <label>StaffID:</label>
          <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text bg-dark"><i class="fa-solid fa-list-ol text-light"></i></span>
            </div>
            <input type="text" class="form-control" placeholder="Enter Staff ID" autocomplete="off" required="required" name="staffid" id="staffid">
        </div>
          </div>
          <!--- Student Name --->
          <div class="form-group">
          <label>Staff Name:</label>
          <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text bg-dark"><i class="fas fa-user-alt text-light"></i></span>
            </div>
            <input type="text" class="form-control" placeholder="Enter Staff Name" autocomplete="off" required="required" id="staffname" name="staffname">
        </div>
          </div>
          <!--- Department --->
          <div class="form-group">
          <label>Department:</label>
          <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text bg-dark"><i class="fa-solid fa-people-roof text-light"></i></span>
            </div>
            <input type="text" class="form-control" placeholder="Enter Department" autocomplete="off" required="required" id="department" name="department">
        </div>
          </div>
        
          <!--- Email --->
          <div class="form-group">
           <label>Email:</label>
          <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text bg-dark"><i class="fa-solid fa-envelope-open text-light"></i></span>
            </div>
            <input type="email" class="form-control" placeholder="Enter Email" autocomplete="off" required="required" id="email" name="email">
        </div>
          </div>
          <!--- Contact Number --->
          <div class="form-group">
          <label>Contact Number:</label>
          <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text bg-dark"><i class="fa-solid fa-phone text-light"></i></span>
            </div>
            <input type="text" class="form-control" placeholder="Enter Contact Number" autocomplete="off" required="required" id="contactnumber" name="contactnumber" maxLength="10"  minLength="10">
        </div>
          </div>
          <!--- Password --->
          <div class="form-group">
          <label>Password:</label>
          <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text bg-dark"><i class="fa-solid fa-lock text-light"></i></span>
            </div>
            <input type="text" class="form-control" placeholder="Enter Password" autocomplete="off" required="required" id="password" name="password">
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