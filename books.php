<?php
ob_start();
session_start();
include('queries/config.php');


    if (!isset($_SESSION['userID'])) {
        $_SESSION['cant_access'] = "Please Login To access this pages.";
        header("location: index.php");
    }
    else if (isset($_SESSION['userID'])=="" || isset($_SESSION['userID'])==null) {
        $_SESSION['cant_access'] = "Please Login To access this pages.";
        header("location: index.php");
    }else{

        if (isset($_POST['books'])) {
            $bookType = $_POST['bookstype'];
        }else{
            $_SESSION['cant_access'] = "Error while proccessing. Please try again.";
            header("location: index.php");
        }

    }
   

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
    

    <title><?php echo $bookType; ?> | Olevel Maths</title>
</head>
<body>

<div class="container">

<div class="chat_icon rounded-circle shadow" style="background-color: #fff; padding-left:  10px; padding-right: 10px;">
	<i class="fas fa-headset"></i>
    </div>

    <?php include('includes/chatbot.php') ?>


<?php include('includes/main-navbar.php') ?>



<div class="container rounded-5 shadow mt-4 pt-2">
       <h1 class="text-center"><?php echo $bookType; ?> Books</h1>
       <hr>
       <div class="row">
           <?php
            // $paperCat = 'Model Paper';
           

            $getbooks = "SELECT * FROM books WHERE b_cat=?";
            $query = $conn->prepare($getbooks);
            $query->execute(array($bookType));
            $row = $query->rowCount();
            if ($row > 0) {
               while($fetch = $query->fetch()){

           ?>
           <div class="col-md-2 shadow">
           <img class="paper-img mt-2" src="img/playlogo.png" alt="" srcset="">
            <p><?php echo $fetch['b_name']; ?><br><span style="color: rgb(173, 167, 167);"><?php echo $fetch['b_cat']; ?></span><br><span style="color: rgb(247, 0, 0);"><?php echo $fetch['added_date']; ?></spam></p>
            <div class="justify-content-center text-center mb-2" >
            <form action="viewpdf.php" target="_blank" method="POST">
                <input type="hidden" name="link" id="" value="<?php echo $fetch['b_file']; ?>">
            <!-- <a href="<?php echo $fetch['b_file']; ?>" target="_blank"> -->
          
            <a href="<?php echo $fetch['b_file']; ?>" target="_blank" style="text-decoration: none;">  <button type="" name="" class="btn btn-success"><i class="fas fa-eye"></i> View Book</button></a>
            <!-- </a> -->
            </form>
            </div>
           </div>

           <?php
             }
            }
           ?>


       </div>
   </div>



   <?php include('includes/registrationmodel.php') ?>

<?php include('includes/footer.php') ?>
</div>

</body>
</html>