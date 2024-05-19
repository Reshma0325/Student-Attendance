<div class="modal fade" id="usermodal"  role="dialog" >
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Order</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form  id="addorder" method="post" enctype="multipart/form-data">
      <div class="modal-body">
          <!--- Date --->
          <div class="form-group">
          <label>Date:</label>
          <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text bg-dark"><i class="fa-solid fa-calendar-days text-light"></i></span>
            </div>
            <input type="date" class="form-control" placeholder="Enter Date" autocomplete="off" required="required" name="date" id="date">
        </div>
          </div>
          <!--- Order --->
          <div class="form-group">
          <label>Order:</label>
          <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text bg-dark"><i class="fa-solid fa-arrow-down-short-wide text-light"></i></span>
            </div>
             <select id="order" name="order">
                <option value='A'>A</option>
                    <option value='B'>B</option>
                    <option value='C'>C</option>
                    <option value='D'>D</option>
                    <option value='E'>E</option>
                    <option value='F'>F</option>
                </select>
        </div>
          </div>
          <!--- Description --->
          <div class="form-group">
          <label>Description:</label>
          <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text bg-dark"><i class="fa-solid fa-book text-light"></i></span>
            </div>
            <input type="text" class="form-control" placeholder="Enter Description" autocomplete="off" required="required" id="description" name="description">
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