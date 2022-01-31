<div class="row">

        
<?php
   $paperCat = 'School Paper';
    $getModelPapers = "SELECT * FROM notifications ORDER BY not_id DESC";
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
        <h5 class="news-p" data-bs-toggle="modal" data-bs-target="#notiModel"><?php echo $fetch['not_title']; ?></h5>
        <p class="" style="margin-bottom: 0;"><?php echo $fetch['not_description']; ?></p>
        <p style="text-align: right; color:brown; margin-bottom: 0;"><?php echo $fetch['not_dat']; ?></p>   
    </div>
    

</div>

<?php
     }
    }
   ?>

</div>