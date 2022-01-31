<?php
session_start();
session_destroy();
session_unset($_SESSION['userID']);
session_unset($_SESSION['username']);
header('location: ../index.php');
?>