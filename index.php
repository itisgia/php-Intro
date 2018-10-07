<?php
// You can write php on the top midle or bottom. If you wrtie it on the top, It will render first.
#This is another single line comment

/*
M
U
L
T
I Line comment */

// in php var is $
$hello = "HELLO WORLD";

$_hello ="Hello with underscore";

//semi colons in php are really important

$number = 10;
$boolean = false;

$array = array(10,20,30,40);

//echo is spiitng out data, information
// echo "Hello";
// echo ("Hello with bracket");
// echo $_hello;
// print("This is from print with no brackets");
// print($number);


//This is more for debugging
var_dump("This is from a var_dump");
var_dump($array);

//What die does is cut everything below die()
// die("This is from die");

$list = array("apples", "bananas", "pears","mango");

 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    </head>
    <body  style="font-family: 'Roboto', sans-serif;">
        <h1 class="heading_1 <?php echo "className"; ?>">Learning PHP - this is running from a HTML file</h1>
        <?php
            echo "<h2>This is from an echo</h2>";
         ?>
         <h2><?php echo $hello; ?></h2>
         <!-- wirting echo for short -->
         <h3><?= "This is from the shortcode"?></h3>

         <!-- First way to do it -->
         <ul>
             <?php
                foreach ($list as $listItem) {
                    echo "<li>".$listItem."</li>";
                }
              ?>
          </ul>

          <!-- Second way to do it -->
          <ul>
              <?php foreach ($list as $listItem):?>
                  <li><?= $listItem; ?></li>
              <?php endforeach; ?>
          </ul>



          <?php
            $scores = array(0,22,50,78,35,90,100,15);
          ?>
          <h2>The total number of people are <?= count($scores); ?></h2>
          <ul>
              <?php foreach ($scores as $score): ?>
                  <li>  This person got <?= $score; ?></li>
              <?php endforeach; ?>
          </ul>
              <?php
                $totalScore = 0;
                foreach ($scores as $score) {
                    $totalScore += $score;
                }

                $averageScore = $totalScore / count($scores);
               ?>
               <h3>The average score is <?= $averageScore; ?></h3>
               <?php if ($averageScore > 50): ?>
                   <p>Class has passed</p>
               <?php else: ?>
                   <p>Class has filed</p>
               <?php endif;  ?>

    </body>
</html>
