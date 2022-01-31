
<?php

    include('queries/config.php');
    if (isset($_SESSION['userID'])) {
        $userID = $_SESSION['userID'];

        $getUserData = "SELECT * FROM `users` WHERE `u_id`=?";
        $query = $conn->prepare($getUserData);
        $query->execute(array($userID));
        $row = $query->rowCount();
        $fetch = $query->fetch();
        if ($row > 0) {
            $userEmail = $fetch['u_email'];
            $userName = $fetch['u_name'];
            $userSchool = $fetch['u_school'];
            $userPhone = $fetch['u_phone'];
            $userGrade = $fetch['u_class'];

  

?>
<form>
  <div class="row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Email</label>
      <input type="email" class="form-control" id="inputEmail4" placeholder="Email" value="<?php echo $userEmail ?>" readonly>
    </div>
    <div class="form-group col-md-6">
    <label for="inputAddress">User Name</label>
    <input type="text" class="form-control" id="inputAddress"  placeholder="User Name" value="<?php echo $userName ?>" readonly>
    </div>
  </div>
  <div class="form-group">
    <label for="inputAddress2">School</label>
    <input type="text" class="form-control" id="inputAddress2" placeholder="Your School Name" value="<?php echo $userSchool ?>" readonly>
  </div>
  <div class="row">
    <div class="form-group col-md-6">
      <label for="inputCity">Phone Number</label>
      <input type="text" class="form-control" id="inputCity" value="<?php echo $userPhone ?>" readonly>
    </div>
    <div class="form-group col-md-4">
      <label for="inputState">Grade</label>
      <select id="inputState" class="form-control">
        <option selected value="<?php echo $userGrade ?>">Grade 10</option>
      </select>
    </div>
  </div>
</form>

<?php 
      }
    }
?>