<?php

include('queries/config.php');

//      $bookType = 'School Paper';
//     $getbooks = "SELECT * FROM papers WHERE p_cat=?";
//     $getbooks = $conn->prepare($getbooks);
//     $getbooks->execute(array($bookType));
//     $row = $getbooks->rowCount();
    
// 		if ($row>0) {
// 			while ($fetch = $getbooks->fetch()) {
        
//                $id = $fetch['p_id'];
//                echo $id;
//                 $insert = "UPDATE `papers` SET `added_date` = '2022-01-23' WHERE `papers`.`p_id` = $id; AND p_cat=$bookType";
//                  $conn->query($insert);


//             }
//         }



$insert = "UPDATE `books` SET `added_date` = '2022-01-23'";
$conn->query($insert);
        