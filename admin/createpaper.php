<?php
include('../queries/config.php')
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
    <link rel="stylesheet" href="../css/home.css?v=<?php echo time() ?>">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    
    <title>Document</title>
</head>
<body>
<h1>Classic editor</h1>
    
    <div class="container">
        <form action="queries/sqlcode.php" method="post">
            <textarea name="content" id="editor"> 
            </textarea>
          <p><input type="submit" name="Save" value="Submit"></p>
        </form>
    </div>
    

          <?php
            $gettestCon = "SELECT * FROM test ORDER BY id DESC";
            $query = $conn->prepare($gettestCon);
            $query->execute();
            $row = $query->rowCount();
            if ($row > 0) {
               while($fetch = $query->fetch()){
               
            ?>

    <div class="container shadow div">
        <?php echo $fetch['content']; ?>
         <p class="mb-0" style="text-align: right;"><?php echo date('Y-m-d', strtotime($fetch['Created_Date'])) ?></p>
         <p style="text-align: right;"><?php echo date('H:i', strtotime($fetch['Created_Date'])) ?></p>
    
    </div>
    <br>
    <br>


    <?php
             }
            }
           ?>


    <script src="http://cdn.ckeditor.com/4.6.2/standard-all/ckeditor.js"></script>
    <script src="https://ckeditor.com/apps/ckfinder/3.5.0/ckfinder.js"></script>

    <script>

    CKEDITOR.replace( 'editor', {
        height: 300,
        filebrowserUploadUrl: "queries/sqlcode.php"
        });

    </script>
</body>
</html>