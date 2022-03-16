<?php 
require_once 'actions/db_connect.php';



$id = $_GET['id'];
$query = "SELECT * FROM `dishes` WHERE `dishid`=$id";
$result1 = mysqli_query($connect,$query);

$details1 = mysqli_fetch_array($result1, MYSQLI_ASSOC);
$details = "<img src='".$details1['image']."' style='width:400px'></img>
<br><h3>".$details1['name']."</h3>
<br><h5> €".$details1['price']."</h5>
<br><p>".$details1['mealdesc']."</p>

";



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
               <?= $details;?>
           </div>
           </div>
   </body>
</html>