<div class="modal fade" id="usermodal"  role="dialog" >
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Adding or Updating Students</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form  id="addstaff" method="post" enctype="multipart/form-data">
      <div class="modal-body">
          <!--- Regno --->
          <div class="form-group">
          <label>Regno:</label>
          <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text bg-dark"><i class="fa-solid fa-list-ol text-light"></i></span>
            </div>
            <input type="text" class="form-control" placeholder="Enter Regno" autocomplete="off" required="required" name="regno" id="regno">
        </div>
          </div>
          <!--- Student Name --->
          <div class="form-group">
          <label>Student Name:</label>
          <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text bg-dark"><i class="fas fa-user-alt text-light"></i></span>
            </div>
            <input type="text" class="form-control" placeholder="Enter Student Name" autocomplete="off" required="required" id="studentname" name="studentname">
        </div>
          </div>
          <!--- Department --->
          <div class="form-group">
          <label>Department:</label>
          <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text bg-dark"><i class="fa-solid fa-people-roof text-light"></i></span>
            </div>
             <select id="department" name="department">
                <option value='Computer Science'>Computer Science</option>
                    <option value='English'>English</option>
                    <option value='Maths'>Maths</option>
                    <option value='Tamil'>Tamil</option>
                    <option value='Zoology'>Zoology</option>
                    <option value='Botany'>Botany</option>
                </select>
            
        </div>
          </div>
          <!--- Batch --->
          <div class="form-group">
          <label>Batch:</label>
          <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text bg-dark"><i class="fa-solid fa-people-group text-light"></i></span>
            </div>
             <select id="batch" name="batch">
                    <option value='19CSE'>19CSE</option>
                    <option value='19ENG'>19ENG</option>
                    <option value='19MAT'>19MAT</option>
                    <option value='19TAM'>19TAM</option>
                    <option value='19ZOO'>19ZOO</option>
                    <option value='19BOT'>19BOT</option>
                    <option value='18CSE'>18CSE</option>
                    <option value='18ENG'>18ENG</option>
                    <option value='18MAT'>18MAT</option>
                    <option value='18TAM'>18TAM</option>
                    <option value='18ZOO'>18ZOO</option>
                    <option value='18BOT'>18BOT</option>
                    <option value='17CSE'>17CSE</option>
                    <option value='17ENG'>17ENG</option>
                    <option value='17MAT'>17MAT</option>
                    <option value='17TAM'>17TAM</option>
                    <option value='17ZOO'>17ZOO</option>
                    <option value='17BOT'>17BOT</option>
                </select>
            
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
            <input type="text" class="form-control" placeholder="Enter Contact Number" pattern="[7-9]{1}[0-9]{9}" title="please enter the start with 7 to 9" autocomplete="off" required="required" id="contactnumber" name="contactnumber" maxLength="10"  minLength="10">
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