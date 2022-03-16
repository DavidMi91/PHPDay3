<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Classwork PHP Day 3</title>
</head>
<body>
<!-- Exercise 1
Create a for loop which will print your name 50 times on the screen. Do the same with while and do while loop.  -->
<?php
    // start for loop 
    //    for( $i=0; $i<50; $i++)
    //    {
    //     echo ("David <br>");
    // }
    // end for loop 

    // start while loop 
    // $i = 0;
    //    while($i < 50)
    //    {
    //     echo ("David<br>");
    //        $i++;
    //    }
    // end while loop 

    // start do while loop 
    // $i = 0;
    // do
    // {
    //     echo ("David<br>");
    //     $i++;

    //  } while ($i < 50);
    ?>


<!-- Exercise 2
Define a numeric array with 10 elements. Use a foreach loop to output the value of every array's element. -->
<?php 
    // $array = array(1,2,3,4,5,6,7,8,9,10);
    // foreach($array as $value)
    // {
    //     echo "$value <br/>";
    // }
?>

<!-- Exercise 3
Create a function that will have a parameter. The argument given to that parameter should be an array. The function should return the highest value from the array. Try to create an array with at least 10 numbers created randomly. You may want to take a look at the rand() function from PHP. -->
<?php
    // $array = array(rand(1, 100),rand(1, 100),rand(1, 100),rand(1, 100),rand(1, 100),rand(1, 100),rand(1, 100),rand(1, 100),rand(1, 100),rand(1, 100),);
    // function ex3($param1){
    //     $highestvalue = max($param1);
    //     return $highestvalue; 
    // }

    // foreach ($array as $value) {
    //     echo $value." ";
    // }
    // echo "<br>Highest value: ".ex3($array);
?>


<!-- Exercise 4
Create a PHP program that iterates the integers from 1 to 100. For multiples of three print "Back-End" instead of the number and for the multiples of five print "Front-End". For numbers that are multiples of both three and five print "Full-Stack".
e.g. 
1
2
Back-End
4
Front-End
Back-End
7
8
Back-End
Front-End
11
Back-End
13
14
Full-Stack
16
17
Back-End
19
Front-End
etc.     -->



<div class="row">
    <div class="col text-end">
        <h5>Option 1</h5>
    <?php
    
    // option 1 
       for($i=1; $i<101; $i++){
            // checks if $i can be divided by 5. if not, it just prints i
            if($i%5){
                $result=$i;
            }
            // checks if $i can be divided by 3, if true then "Back-End" will be printed
            if(!($i%3)){
                $result="Back-End";
            }
            // checks if $i can be divided by 5 but not by 3, if true then "Front-End" will be printed
            if(!($i%5) && ($i%3)){
                $result = "Front-End";
            }
            // checks if $i can be divided by 5 AND 3, if true then "Full-Stack" will be printed
            if(($i%5)==0 && ($i%3)==0){
                $result = "Full-Stack";
            }
            echo "<br>".$result;
    }

?>
    </div>
    <div class="col text-start">
    <h5>Option 2</h5>
    <?php
    // option 2 

    for($i=1; $i<101; $i++){
        if(($i%5)==0 && ($i%3)==0){
            $result2 = "Full-Stack";
        } 
        elseif (!($i%5) && ($i%3)){
            $result2 = "Front-End";
        }
        elseif (($i%5) && !($i%3)){
            $result2 = "Back-End";
        } else {
            $result2 = $i;
        }    
        echo "<br>".$result2;
    }
    ?>
    </div>
</div>

</body>
</html>