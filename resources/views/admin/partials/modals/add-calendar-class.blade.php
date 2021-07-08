<div class="modal fade" id="add-class" tabindex="-1" role="dialog" aria-labelledby="add-class" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h5 class="modal-title" id="modal-title-add-class"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body modal-calendar-body">
      <div class="login_form mb-3">
                    <div class="panel-body">
                        <form method="" action="" id="add-class-form" name="add-class-form" class="login form_style2" enctype="multipart/form-data">
                        @csrf
                            <div class="form-group">
                            <label for="class-date">Class Date</label>     
                                <span id="class-date-display" value=""></span>
                                <input id="class-date" type='hidden' name="class-date" value="" required>
                            </div>

                            <div class="form-group">   
                            <label for="class-time">Class time</label> 
                                <input id="modal-class-time" type="time" name="class-time" required>
                            </div>

                            <div class="form-group">
                            <label for="class-name">Class Name</label>    
                                <input id="modal-class-name" name="class-name" type="text" required>
                            </div>

                            <div class="form-group">
                            <label for="class-price">Price ¥</label>      
                                <input id="modal-class-price" type="number" name="class-price" required>
                            </div>

                            <div class="form-group">
                            <label for="class-slots">Slots Available</label>     
                                <input id="modal-class-slots" type="number" name="class-slots" >
                            </div>
                            
                            <div class="form-group">
                                <button id="add-edit-button" type="submit" class="btn btn-default btn-block"></button>
                            </div>
                        </form>
                    </div>
                </div>
      </div>
    </div>
  </div>
</div>