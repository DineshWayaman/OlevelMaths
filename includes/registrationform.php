<form method="POST" action="queries/sqlcode.php">
  <div class="row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Email</label>
      <input type="email" name="email" class="form-control" id="inputEmail4" placeholder="Email">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Password</label>
      <input type="password" name="password" class="form-control" id="inputPassword4" placeholder="Password">
    </div>
  </div>
  <div class="form-group">
    <label for="inputAddress">User Name</label>
    <input type="text" name="username" class="form-control" id="inputAddress" placeholder="User Name">
  </div>
  <div class="form-group">
    <label for="inputAddress2">School</label>
    <input type="text" name="school" class="form-control" id="inputAddress2" placeholder="Your School Name">
  </div>
  <div class="row">
    <div class="form-group col-md-6">
      <label for="inputCity">Phone Number</label>
      <input type="text" name="phone" class="form-control" id="inputCity">
    </div>
    <div class="form-group col-md-4">
      <label for="inputState">Grade</label>
      <select id="inputState" class="form-control" name="grade">
        <option selected>Grade 10</option>
        <option>Grade 11</option>
      </select>
    </div>

  </div>
  <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" name="privacy" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Agree to <a href="">Privacy Policy.</a>
      </label>
    </div>
  </div>
  <div class="row">
      <div class="form-group">
      <button type="submit" name="register" class="btn btn-primary">Sign Up</button>
  <button type="reset" class="btn btn-primary">Clear</button>
      </div>
  </div>


  <?php 
        if (isset($_SESSION['login_error_msg'])) {
            ?>
         <div class="alert alert-danger" role="alert"><?php echo $_SESSION['privacy']; ?></div>
        
        <?php
          unset($_SESSION['login_error_msg']);
         }

         ?>


</form>