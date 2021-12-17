<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Practice of PHP 2 (title)</title>
    </head>
    <body>
        <h1>Practice of PHP For</h1>

        <?php

            $sum = 0;
            for ($i = 1 ; $i <= 100 ; ++$i) {
                $sum = $sum + $i;
            }
        
            print("The sum from 1 to 100 is " . $sum);
        
        ?>
    </body>
</html>