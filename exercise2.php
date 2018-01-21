<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>
      <?php 
        echo "PHP assignment by: Raymond Kolen (Exponentiation exercise)"; 
      ?>
    </title>
  </head>

  <body>
      <?php
        $numbers = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
        for ($i = 0; $i < count($numbers); $i++) {
          global $numbers;
          echo  nl2br /*Inserts HTML line breaks before all newlines in a string*/ ($numbers[$i] . " || " . ($numbers[$i]**2) . " || " . ($numbers[$i]**3) . "\n");
          /*pow($numbers[$i], 2) and pow($numbers[$i], 3) must be used if php version is below 5.6*/
        }
      ?>
  </body>
</html>