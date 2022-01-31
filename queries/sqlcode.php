<?php 
session_start();

include('config.php');

if (isset($_POST['login'])) {
   $email = $_POST['email'];
   $password = $_POST['password'];

   $checkUser = "SELECT * FROM `users` WHERE `u_email`=? AND `u_password`=?";
   $query = $conn->prepare($checkUser);
   $query->execute(array($email,$password));
   $row = $query->rowCount();
   $fetch = $query->fetch();
   if ($row > 0) {
       $_SESSION['userID'] = $fetch['u_id'];
       $_SESSION['username'] = $fetch['u_name'];
       header('location: ../index.php');
   }else{
    $_SESSION['login_error_msg'] = "Sorry, that user name or password is incorrect. Please try again.";
    header('location: ../index.php');
    // echo '<script>alert("Invalid Email or Password"); window.location = "../index.php";</script>';
   }
}


if (isset($_POST['register'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $username = $_POST['username'];
    $school = $_POST['school'];
    $phone = $_POST['phone'];
    $grade = $_POST['grade'];
    $active = 1;

    if (isset($_POST['privacy'])) {

    $checkEmail = "SELECT * FROM `users` WHERE `u_email`=?";
    $queryEmail = $conn->prepare($checkEmail);
    $queryEmail->execute(array($email));
    $row = $queryEmail->rowCount();

    if ($row > 0) {
        $_SESSION['login_error_msg'] = "Your email address is already Exit. Please Log In..";
        header('location: ../index.php');
    }else{

    $sql = "INSERT INTO users(u_name, u_school, u_class, u_email, u_phone, u_password, u_active)  
    VALUES (?,?,?,?,?,?,?)";
    $query = $conn->prepare($sql);
    $query->execute(array($username,$school,$grade,$email,$phone,$password,$active));

    if ($query) {
        $_SESSION['userreg'] = "Registration Successfully Completed. You can log now.";
         header('location: ../index.php');
    }else{
        $_SESSION['login_error_msg'] = "Error while proccessing. Please try again.";
         header('location: ../index.php');
    }

    }

  }else{
    $_SESSION['login_error_msg'] = "You should check privacy tick.";
    header('location: ../index.php');
  }
}

if(isset($_POST['sendemail'])){
    // $fullname	= $_POST['name'];
	// $email		= $_POST['email'];
	// $message	= $_POST['message'];

    // $to	 = 'contact.wcreation@gmail.com';
	// $mail_subject = 'Help Need From Olevel Mathes Website For'+$fullname;
	// $email_body   .= "<b>Message:</b><br>" . nl2br(strip_tags($message));

    // $header       = "From: {$email}\r\nContent-Type: text/html;";

	// $send_mail_result = mail($to, $mail_subject, $email_body, $header);

    $fullname	= $_POST['name'];
	$email		= $_POST['email'];
	$message	= $_POST['message'];

    $to	 = 'contact.wcreation@gmail.com';
	$mail_subject = "Help Need From Olevel Mathes Website For {$fullname} ";
	$email_body   .= "Message:" . nl2br(strip_tags($message));

 	$send_mail_result = mail($to, $mail_subject, $email_body);

    if ( $send_mail_result ) {
        $_SESSION['userreg'] = "Email Sent Successfully. One of our admin will contact you soon...";
        header('location: ../index.php');

    } else {
        $_SESSION['login_error_msg'] = "Email Sent Unsuccess. Please Try Again..";
         header('location: ../index.php');
    }



}


if (isset($_POST['timingTest'])) {
    $training = $_POST['training'];
    $timing = $_POST['timing'];

    if ($training = 'Training Papers') {
        $_SESSION['userreg'] = "Sorry For The inconvenience.. This Page is Under Maintain...(සිදුවූ අපහසුතාවයට සමාවන්න.. මෙම පිටුව නඩත්තු කටයුතු සඳහා වසා ඇත.)";
        header('location: ../index.php');
    }

    if ($timing = 'Timing Papers') {
        $_SESSION['userreg'] = "Sorry For The inconvenience.. This Page is Under Maintain...(සිදුවූ අපහසුතාවයට සමාවන්න.. මෙම පිටුව නඩත්තු කටයුතු සඳහා වසා ඇත.)";
        header('location: ../index.php');
    }


}