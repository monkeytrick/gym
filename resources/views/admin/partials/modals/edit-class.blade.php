<div class="modal fade" id="edit-class" tabindex="-1" role="dialog" aria-labelledby="edit-class" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h5 class="modal-title" id="modal-title-add-class"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body ">
      <div class="login_form mb-3">
                    <div class="panel-body">
                        <form method="" action="" id="edit-class-form" name="edit-class-form" class="login form_style2" enctype="multipart/form-data">
                        @csrf

                            <div class="form-group">
                            <label for="edit-class-name">Class Name</label>    
                                <span id="edit-class-name"></span>
                            </div>

                            <div class="form-group">
                            <label for="edit-class-date">Class Date</label>     
                                <span id="edit-class-date-display" value=""></span>
                            </div>

                            <div class="form-group">
                            <label for="edit-bookings">Slots Booked</label>     
                                <span id="edit-class-bookings"></span>
                            </div>

                            <div class="form-group">   
                            <label for="edit-class-time">Class time</label> 
                                <input id="edit-class-time" type="time" name="edit-class-time" required>
                            </div>


                            <div class="form-group">
                            <label for="edit-class-price">Price ¥</label>      
                                <input id="edit-class-price" type="number" name="edit-class-price" required>
                            </div>


                            <div class="form-group">
                            <label for="edit-class-slots">Slots Available</label>     
                                <input id="edit-class-slots" type="number" name="edit-class-slots" >
                            </div>

                            <input type="hidden" id="date-hidden" name="date-hidden">

                            <input type="hidden" id="class-hidden" name="class-hidden">
                            
                            <div class="form-group">
                                <button id="edit-update-button" type="submit" class="btn btn-default btn-block">UPDATE</button>
                            </div>
                        </form>
                    </div>
                </div>
      </div>
    </div>
  </div>
</div>