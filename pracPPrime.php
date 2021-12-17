<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Practice of PHP Prime Numbers (title)</title>
    </head>
    <body>
        <h1>Practice of PHP Prime Numbers</h1>

        <?php

            $nPrime = 0;
            for ($primeCand = 2 ; $primeCand <= 1000 ; ++$primeCand) {
                $nDivided = 0;
                for ($divisor = 1 ; $divisor <= $primeCand ; ++$divisor) {
                    if ( $primeCand % $divisor == 0) ++$nDivided;
                }
                if ($nDivided ==2) {
                    ++$nPrime;
                    print($nPrime . "-th prime number is ". $primeCand . " <br>\n");
                }
            }
        
        ?>
    </body>
</html>