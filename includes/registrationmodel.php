<!-- Button trigger modal -->
<!--Reg Modal -->
<div class="modal fade " id="regModel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">New Registration</h5>
        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?php include('registrationform.php'); ?>
      </div>
      <div class="modal-footer">
        <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button> -->
        <p>Developed By W Creation</p>
      </div>
    </div>
  </div>
</div>



<!--Login Modal -->
<div class="modal fade" id="logModel" tabindex="-1" role="dialog" aria-labelledby="logModelLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
     
    <div class="modal-header">
        <h5 class="modal-title" id="logModelLabel">Login</h5>
        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?php include('loginform.php'); ?>
      </div>
      <div class="modal-footer">
        <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button> -->
        <p>Developed By W Creation</p>
      </div>
    </div>
  </div>
</div>



<!-- Profile Model -->
<div class="modal fade" id="profileModel" tabindex="-1" role="dialog" aria-labelledby="profileModelLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
     
    <div class="modal-header">
        <h5 class="modal-title" id="profileModelLabel">Your Profile</h5>
        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?php include('profile.php'); ?>
      </div>
      <div class="modal-footer">
        <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button> -->
        <p>Developed By W Creation</p>
      </div>
    </div>
  </div>
</div>








<!-- adminNoti Model -->
<div class="modal fade" id="adminNotiModel" tabindex="-1" role="dialog" aria-labelledby="adminNotiModelLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
     
    <div class="modal-header">
        <h5 class="modal-title" id="adminNotiModelLabel">Admin Messages</h5>
        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <?php include('adminnoti.php'); ?>
      </div>
      <div class="modal-footer">
        <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button> -->
        <p>Developed By W Creation</p>
      </div>
    </div>
  </div>
</div>




