<?php 
require_once 'actions/db_connect.php';


$sql = "SELECT * FROM dishes";
$result = mysqli_query($connect ,$sql);
$card=''; 
if(mysqli_num_rows($result)  > 0) {    
   while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){        
       $card .="
       <div class='card' style='width: 18rem;'>
  <img class='card-img-top' src='".$row["image"]."' alt='Card image cap'>
  <div class='card-body'>
    <h5 class='card-title'>".$row["name"]."</h5>
    <a href='info.php?id=".$row["dishID"]."' class='btn btn-primary'>Show details</a>
  </div>
</div>";
   };
} else {
   $card =  "No Data Available";
}


mysqli_close($connect);
?>

<!DOCTYPE html>
<html lang="en">
   <head>
       <meta charset="UTF-8">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <title>PHP Day 3 Challenge</title>
       <?php require_once 'components/boot.php'?>
       <style type="text/css">
           .manageProduct {          
               margin: auto;
           }
           .img-thumbnail {
               width: 70px !important;
               height: 70px !important;
           }
           td {          
               text-align: left;
               vertical-align: middle;

            }
           tr {
               text-align: center;
           }
       </style>
   </head>
   <body>
           <div class="container mt-5">
               <div class="row">
           <?= $card;?>
           </div>

           </div>
   </body>
</html>