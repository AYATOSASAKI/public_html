<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Practice of PHP 2 (title)</title>
    </head>
    <body>
        <h1>Practice of PHP If</h1>

        <?php

            $x = 3;
            $y = 5;
    
            if($x > 2) {
                if($y > 3) {
                    printf("x is larger than 2 and y is larger than 3\n");
                } else {
                    printf("x is larger than 2 and y is not larger than 3\n");
                }
            } else {
                printf("x is not larger than 2\n");
            }
        
        ?>
        </body>
</html>