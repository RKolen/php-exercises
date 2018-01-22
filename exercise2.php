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
       
      echo "<table border= 1>";
      for ($number = 1; $number < 11; $number++) {
          $secondPower = $number**2;
          $thirdPower = $number**3;
          /*pow($numbers[$i], 2) and pow($numbers[$i], 3) must be used if php version is below 5.6 */
          echo "<tr>";
          echo "<td>" . $number . "</td>";
          echo "<td>" . $secondPower . "</td>";
          echo "<td>" . $thirdPower . "</td>";
          echo "</tr>";
        }
        echo "</table>";
      ?>
  </body>
</html>