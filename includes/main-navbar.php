<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <!-- <a class="navbar-brand" href="#">Navbar</a> -->
  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
  <a class="navbar-brand" href="index.php">Olevel Maths</a>
  <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Books
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
         <form action="books.php" method="post"><input type="hidden" class="dropdown-item" name="bookstype" value="Grade 10" id=""><input class="dropdown-item" type="submit" name="books" value="Grade 10"></form>
         <form action="books.php" method="post"><input type="hidden" class="dropdown-item" name="bookstype" value="Grade 11" id=""><input class="dropdown-item" type="submit" name="books" value="Grade 11"></form>
          <!-- <div class="dropdown-divider"></div>
         <form action="pages/papers.php" method="post"><input type="hidden" class="dropdown-item" name="pastpapers" value="Past Paper" id=""><input class="dropdown-item" type="submit" name="papers" value="Something else here"></form>
        </div> -->
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Papers
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
         <form action="papers.php" method="post"><input type="hidden" class="dropdown-item" name="pastpapers" value="Past Paper" id=""><input class="dropdown-item" type="submit" name="papers" value="Past Papers"></form>
         <form action="papers.php" method="post"><input type="hidden" class="dropdown-item" name="pastpapers" value="Model Paper" id=""><input class="dropdown-item" type="submit" name="papers" value="Model Paper"></form>
         <form action="papers.php" method="post"><input type="hidden" class="dropdown-item" name="pastpapers" value="School Paper" id=""><input class="dropdown-item" type="submit" name="papers" value="School Paper"></form>
          <!-- <div class="dropdown-divider"></div>
         <form action="pages/papers.php" method="post"><input type="hidden" class="dropdown-item" name="pastpapers" value="Past Paper" id=""><input class="dropdown-item" type="submit" name="papers" value="Something else here"></form>
        </div> -->
      </li>
    
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Test
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
         <form action="queries/sqlcode.php" method="post"><input type="hidden" class="dropdown-item" name="timingTest" value="Training Papers" id=""><input class="dropdown-item" type="submit" name="training" value="Training Papers"></form>
         <form action="queries/sqlcode.php" method="post"><input type="hidden" class="dropdown-item" name="timingTest" value="Timing Papers" id=""><input class="dropdown-item" type="submit" name="timing" value="Timing Papers"></form>
          <!-- <div class="dropdown-divider"></div>
         <form action="pages/papers.php" method="post"><input type="hidden" class="dropdown-item" name="pastpapers" value="Past Paper" id=""><input class="dropdown-item" type="submit" name="papers" value="Something else here"></form>
         -->
        </div>
      </li>
      <!-- <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li> -->
      <li class="nav-item">
        <a class="nav-link" href="about.php">About Us</a>
      </li>
    </ul>
    <!-- <form class="form-inline my-2 my-lg-0">
    <div class="input-group">
      <input class="form-control mr-sm-2 mr-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0 ml-1" type="submit">Search</button>
    </div>
    </form> -->

<!-- 
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Launch demo modal
</button> -->

    <div class="ml-10">
    <form class="form-inline my-2 my-lg-0">
    <?php 
        if (!isset($_SESSION['userID'])) {
            ?>
          <button class="btn btn-success my-2 my-sm-0 mr-1" type="button" data-bs-toggle="modal" data-bs-target="#regModel">Register</button>
         <button class="btn btn-danger my-2 my-sm-0 mr-1" type="button" data-bs-toggle="modal" data-bs-target="#logModel">Login</button>
        
        <?php
         }elseif (isset($_SESSION['userID'])=="" || isset($_SESSION['userID'])==null) {
             ?>
            <button class="btn btn-success my-2 my-sm-0 mr-1" type="button" data-bs-toggle="modal" data-bs-target="#regModel">Register</button>
            <button class="btn btn-danger my-2 my-sm-0 mr-1" type="button" data-bs-toggle="modal" data-bs-target="#logModel">Login</button>
         <?php
        }else{
            ?>
    
            <div class="navbar-nav mr-auto">
                <ul class="navbar-nav mr-auto">
                <li class="nav-item dropdown">
                <?php 
                     if (isset($_SESSION['username'])) {
                     ?> 
                 <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                     
                        Welcome <?php  echo $_SESSION['username']; ?>
                        </a>
                        <?php
                     }
                      ?>
                    
                 <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#profileModel">Profile</a>
                     <a class="dropdown-item" href="queries/logout.php">Logout</a>
                  </li>
                 </ul>
            </div>
           

            <?php
        }
    ?>
    <!-- <button class="btn btn-success my-2 my-sm-0 mr-1" type="button" data-bs-toggle="modal" data-bs-target="#regModel">Register</button>
    <button class="btn btn-danger my-2 my-sm-0 mr-1" type="button" data-bs-toggle="modal" data-bs-target="#logModel">Login</button> -->
    </form>
    </div>

  </div>




</nav>