<?php
ob_start();
session_start();
include('queries/config.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!--<meta name="viewport" content="width=device-width, initial-scale=1.0">-->
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script type="text/javascript" src="js/jquery.convform.js"></script>
    <script type="text/javascript" src="js/custom.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/home.css?v=<?php echo time() ?>">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    
  
    <title>Home | Olevel Maths</title>
</head>
<body>
    
    
    <div class="container">
    
    <div class="chat_icon rounded-circle shadow" style="background-color: #fff; padding-left:  10px; padding-right: 10px;">
	<i class="fas fa-headset"></i>
    </div>

    <?php include('includes/chatbot.php') ?>



   <?php include('includes/main-navbar.php') ?>

        <?php 
        if (isset($_SESSION['login_error_msg'])) {
            ?>
         <div class="alert alert-danger" role="alert"><?php echo $_SESSION['login_error_msg']; ?></div>
        
        <?php
          unset($_SESSION['login_error_msg']);
         }


         if (isset($_SESSION['userreg'])) {
            ?>
         <div class="alert alert-success" role="alert"><?php echo $_SESSION['userreg']; ?></div>
        
        <?php
          unset($_SESSION['userreg']);
         }

         if (isset($_SESSION['cant_access'])) {
            ?>
         <div class="alert alert-danger" role="alert"><?php echo $_SESSION['cant_access']; ?></div>
        
        <?php
          unset($_SESSION['cant_access']);
         }


         ?>




   <div class="container rounded-5 shadow mt-3">
        <div class="row">
            <div class="col-md-6">
                <img class="rounded-5 main-img mt-2 mb-2" src="img/playlogo.png" alt="" srcset="">
            </div>
            <div class="col-md-6">
                <h1 class="text-center mt-2">Olevel Mathematics</h1>
                <p style="font-size: 19px;">Sri Lanka Best Online Olevel Mathematics Platform, Now Available on <a href="#">Web</a> and <a target="_blank" href="https://play.google.com/store/apps/details?id=com.wcreation.ordinarylevel&hl=en&gl=US">Android.</a> You can use Android app or Website to Find,</p>
                <ul>
                    <li>Grade 10 Maths School Book</li>
                    <li>Grade 10 Distric Papers</li>
                    <li>Grade 10 School Term Test Papers</li>
                    <li>Grade 10 Model Papers</li>
                    <li>Grade 11 Maths School Book</li>
                    <li>Grade 11 District Papers</li>
                    <li>Grade 11 School Term Test Papers</li>
                    <li>Grade 11 Model Papers</li>
                    <li>Model Papers</li>
                    <li>Timing Test</li>
                    <li>Daily Update Questions</li>
                </ul>
               <a href="https://play.google.com/store/apps/details?id=com.wcreation.ordinarylevel&hl=en&gl=US" target="_blank"><img src="img/playstoreicon2.png" style=" height: 80px; cursor: pointer;" alt="" srcset=""></a> 

            </div>
        </div>
   </div>



   <div class="container rounded-5 shadow mt-4 pt-2">
       <h1 class="text-center">Latest Added Papers</h1>
       <hr>
       <div class="row">
           <?php
           $paperCat = 'Model Paper';
            $getModelPapers = "SELECT * FROM papers WHERE p_cat=? ORDER BY p_id DESC LIMIT 2";
            $query = $conn->prepare($getModelPapers);
            $query->execute(array($paperCat));
            $row = $query->rowCount();
            if ($row > 0) {
               while($fetch = $query->fetch()){

           ?>
           <div class="col-md-2 shadow">
           <img class="paper-img mt-2" src="img/playlogo.png" alt="" srcset="">
            <p><?php echo $fetch['p_name']; ?><br><span style="color: rgb(173, 167, 167);"><?php echo $fetch['p_cat']; ?></span><br><span style="color: rgb(247, 0, 0);">2022-01-23</spam></p>
            <div class="justify-content-center text-center mb-2" >
            <a href="<?php echo $fetch['p_file']; ?>" target="_blank"><button class="btn btn-success"><i class="fas fa-eye"></i> View Paper</button></a>
            </div>
           </div>

           <?php
             }
            }
           ?>


         <?php
           $paperCat = 'Past Paper';
            $getModelPapers = "SELECT * FROM papers WHERE p_cat=? ORDER BY p_id DESC LIMIT 2";
            $query = $conn->prepare($getModelPapers);
            $query->execute(array($paperCat));
            $row = $query->rowCount();
            if ($row > 0) {
               while($fetch = $query->fetch()){

            ?>
           <div class="col-md-2 shadow">
           <img class="paper-img mt-2" src="img/playlogo.png" alt="" srcset="">
            <p><?php echo $fetch['p_name']; ?><br><span style="color: rgb(173, 167, 167);"><?php echo $fetch['p_cat']; ?></span><br><span style="color: rgb(247, 0, 0);">2022-01-23</spam></p>
            <div class="justify-content-center text-center mb-2">
            <a href="<?php echo $fetch['p_file']; ?>" target="_blank"><button class="btn btn-success"><i class="fas fa-eye"></i> View Paper</button></a>
            </div>
           </div>
           <?php
             }
            }
           ?>


            <?php
           $paperCat = 'School Paper';
            $getModelPapers = "SELECT * FROM papers WHERE p_cat=? ORDER BY p_id DESC LIMIT 2";
            $query = $conn->prepare($getModelPapers);
            $query->execute(array($paperCat));
            $row = $query->rowCount();
            if ($row > 0) {
               while($fetch = $query->fetch()){
            ?>
           <div class="col-md-2 shadow">
           <img class="paper-img mt-2" src="img/playlogo.png" alt="" srcset="">
           <p><?php echo $fetch['p_name']; ?><br><span style="color: rgb(173, 167, 167);"><?php echo $fetch['p_cat']; ?></span><br><span style="color: rgb(247, 0, 0);">2022-01-23</spam></p>
            <div class="justify-content-center text-center mb-2">
            <a href="<?php echo $fetch['p_file']; ?>" target="_blank"><button class="btn btn-success"><i class="fas fa-eye"></i> View Paper</button></a>
            </div>
         </div>
         <?php
             }
            }
           ?>



        <!-- <div class="col-md-2 shadow">
           <img class="paper-img mt-2" src="img/playlogo.png" alt="" srcset="">
            <p>Model Paper Galewela Central Collage<br><span style="color: rgb(173, 167, 167);">Paper Type</span><br><span style="color: rgb(247, 0, 0);">Paper Added Date</spam></p>
            <div class="justify-content-center text-center mb-2">
            <button class="btn btn-success"><i class="fas fa-eye"></i> View Paper</button>
            </div>
        </div>
        <div class="col-md-2 shadow">
           <img class="paper-img mt-2" src="img/playlogo.png" alt="" srcset="">
            <p>Model Paper Galewela Central Collage<br><span style="color: rgb(173, 167, 167);">Paper Type</span><br><span style="color: rgb(247, 0, 0);">Paper Added Date</spam></p>
            <div class="justify-content-center text-center mb-2">
            <button class="btn btn-success"><i class="fas fa-eye"></i> View Paper</button>
            </div>
        </div>
        <div class="col-md-2 shadow">
           <img class="paper-img mt-2" src="img/playlogo.png" alt="" srcset="">
            <p>Model Paper Galewela Central Collage<br><span style="color: rgb(173, 167, 167);">Paper Type</span><br><span style="color: rgb(247, 0, 0);">Paper Added Date</spam></p>
            <div class="justify-content-center text-center mb-2">
            <button class="btn btn-success"><i class="fas fa-eye"></i> View Paper</button>
            </div>
        </div> -->


       </div>
   </div>





  <div class="container rounded-5 shadow mt-4 pt-2">
      <div class="row">

      <div class="col-md-6">
        <h2 class="text-center">Latest News</h2>
        
        <div class="row">
        <hr>
        <div class="row news-shadow">
            <div class="col-md-3">
                <img class="news-img mt-1 mb-1" src="img/paper1.png" alt="">
            </div>
            <div class="col-md-9">
                <h5 class="news-p">Updating Soon.....</h5>
                <p class="lines" style="margin-bottom: 0;">With the depreciation of the pound, Azzam’s monthly salary has fallen to the equivalent of less than $100, and she is struggling to keep up with skyrocketing fuel costs to keep the lights on and the heaters working in the winter.</p>
                <p style="text-align: right; color:brown; margin-bottom: 0;">2021-12-31</p>   
            </div>
        </div>
        <hr>
        <div class="row news-shadow">
            <div class="col-md-3">
                <img class="news-img mt-1 mb-1" src="img/paper1.png" alt="">
            </div>
            <div class="col-md-9">
                <h5 class="news-p">Updating Soon.....</h5>
                <p class="lines" style="margin-bottom: 0;">With the depreciation of the pound, Azzam’s monthly salary has fallen to the equivalent of less than $100, and she is struggling to keep up with skyrocketing fuel costs to keep the lights on and the heaters working in the winter.</p>
                <p style="text-align: right; color:brown; margin-bottom: 0;">2021-12-31</p>   
            </div>
        </div>
        <hr>
        <div class="row news-shadow">
            <div class="col-md-3">
                <img class="news-img mt-1 mb-1" src="img/paper1.png" alt="">
            </div>
            <div class="col-md-9">
                <h5 class="news-p">Updating Soon.....</h5>
                <p class="lines" style="margin-bottom: 0;">With the depreciation of the pound, Azzam’s monthly salary has fallen to the equivalent of less than $100, and she is struggling to keep up with skyrocketing fuel costs to keep the lights on and the heaters working in the winter.</p>
                <p style="text-align: right; color:brown; margin-bottom: 0;">2021-12-31</p>   
            </div>
        </div>

        <div class="justify-content-center text-center mb-2 mt-2">
            <button class="btn btn-success"><i class="fas fa-newspaper"></i>&nbsp; View More</button>
            </div>

      </div>
      </div>


    <div class="col-md-6">
    <h2 class="text-center">Admin Messages</h2>  
        <div class="row">

        
        <?php
           $paperCat = 'School Paper';
            $getModelPapers = "SELECT * FROM notifications ORDER BY not_id DESC LIMIT 3";
            $query = $conn->prepare($getModelPapers);
            $query->execute();
            $row = $query->rowCount();
            if ($row > 0) {
               while($fetch = $query->fetch()){
               
            ?>
        <hr>
        <div class="row news-shadow">
            <div class="col-md-3">
                <img class="news-img mt-1 mb-1" src="<?php echo $fetch['not_image']; ?>" alt="">
            </div>
            <div class="col-md-9">
                <h5 class="news-p"><?php echo $fetch['not_title']; ?></h5>
                <p class="" style="margin-bottom: 0;"><?php echo $fetch['not_description']; ?></p>
                <p style="text-align: right; color:brown; margin-bottom: 0;"><?php echo $fetch['not_dat']; ?></p>   
            </div>
        </div>
        
        <?php
             }
            }
           ?>


        <div class="justify-content-center text-center mb-2 mt-2">
            <button class="btn btn-success" type="button" data-bs-toggle="modal" data-bs-target="#adminNotiModel"><i class="fas fa-newspaper"></i>&nbsp; View More</button>
        </div>

      </div>


    </div>

          


    
    </div>


  </div>




  <?php include('includes/registrationmodel.php') ?>


  <?php
  if (!isset($_SESSION['userID'])) {
    include('includes/subscribe_model.php');
  }else{
    
  }
    ?>

  <?php include('includes/footer.php') ?>

   </div>

 
   <script>
       const popupModel = document.querySelector('.subModel');
       const closeModel = document.querySelector('.close-model');

        window.onload = function(){
        setTimeout(function(){
        popupModel.style.display = "block";
        
    }, 3000)

    }

    closeModel.addEventListener('click', () =>{
        popupModel.style.display = "none";
    }); 

   </script>

   <!-- Added Coment to check git -->
</body>
</html>


