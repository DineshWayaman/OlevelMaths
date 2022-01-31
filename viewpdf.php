<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Paper</title>
</head>
<body>
    <?php
    if (isset($_POST['pdflink'])) {
        $pdflink = $_POST['link'];
        
   ?>

       <!-- <iframe src="<?php echo $pdflink ?>#toolbar=0" width="100%" height="700px" frameborder="0"></iframe>  -->
       <iframe src="http://docs.google.com/gview?url=<?php echo $pdflink ?>&embedded=true" style="width:100%; height:500px;" frameborder="0"></iframe>
     
    <?php
    }
     ?>


    </body>
</html>