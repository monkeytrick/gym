<div class="modal fade" id="display-class" tabindex="-1" role="dialog" aria-labelledby="display-class" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h5 class="modal-title" id="modal-title-add-class"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
        <div class="modal-body">
          <p>Class name: <span id="view-class-name"></span></p>
          <span id="class-id"></span>
          <p>Class date: <span id="view-class-date"></span></p>
          <p>Class time: <span id="view-class-time"></span></p>
          <p>Class price: ¥<span id="view-class-price"></span></p>
          <p>Total slots: <span id="view-class-avail"></span></p>
          <p>Slots booked: <span id="view-class-booked"></span></p>
        </div>
        <div class="modal-footer display-class-modal-footer">
          <button type="button" id="launch-delete-modal"class="btn btn-danger" data-dismiss="modal">Delete</button>
          <button type="button" id="launch-edit-modal" class="btn btn-primary" data-dismiss="modal">Edit</button>
      </div>
    </div>
  </div>
</div>