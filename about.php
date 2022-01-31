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
    
    <title>About Us</title>
</head>
<body>
<div class="container">

<div class="chat_icon rounded-circle shadow" style="background-color: #fff; padding-left:  10px; padding-right: 10px;">
	<i class="fas fa-headset"></i>
    </div>

<?php include('includes/chatbot.php') ?>
<?php include('includes/main-navbar.php') ?>

<div class="container rounded-5 shadow mt-3">
        <div class="row">
            <div class="col-md-6">
                <img class="rounded-5 main-img mt-2 mb-2" src="img/logo.png" alt="" srcset="">
            </div>
            <div class="col-md-6">
                <h1 class="text-center mt-2">Who We Are ?</h1>
                <p style="font-size: 19px;">We are From W Creation Powered By Aqwa Technologies. W Creation is the One Of Our Main Brand Name in Sri Lanka. We are software development company established with a passion for building clever technology solutions. Over the years we have helped 250+ Worldwide Companies to Develop and Maintain their Softwares.</p>
                <ul style="list-style: none;">
                    <li>Email : <span style="font-weight: bold;">contact.wcreation@gmail.com</span> <br> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span style="font-weight: bold;">contact.dineshwayaman@gmail.com</span> <br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span style="font-weight: bold;">contact.dimuthuwayaman@gmail.com</span><br></li>
                    <li>Phone : Send Your Message Using ChatBot with Your Mobile Number. We will contact you soon.</li>
                </ul>
              

            </div>
        </div>
   </div>



<?php include('includes/registrationmodel.php') ?>
<?php include('includes/footer.php') ?>

</div>
</body>
</html>