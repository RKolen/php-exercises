<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title><?php echo ("PHP assignment by: 'Raymond Kolen' (fix PHP syntax errors)") ?></title>
  </head>

  <body>
      <?php
        $ages = array(10,50,39,40,67,99,7,2,10,88);
        $sum = 0;

        function getAverageAge($ages) {
          for($i=1; $i<count($ages); $i++) {
            global $sum;
            $sum += $ages[$i];
          }

          return $sum/count($ages);
          /*to actually get the average number*/
        }

        echo getAverageAge($ages);
        ?>
  </body>
</html>
