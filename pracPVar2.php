<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Practice of PHP Variable 2(title)</title>
    </head>
    <body>
        <h1>Practice of PHP Variable 2</h1>

        <?php

            $i = 4;
            $j = 10;
            $k = $j / $i;

            print("$k = " . $k . "<br> \n");
            print("$k = " . (int)$k . "<br> \n");

            print('sin($k) = ' . sin($k) . "<br> \n");

            print("sin($k) = " . sin($k) . "<br> \n");

            print('aaa \n’');
            print(" xxx\n");

            $l = $j % $i;
            print('$l = ' . $l . "<br> \n");

            $k = 'abcd';
            $l = "efgh\n";

            print($k.$l);

        ?>
    </body>
</html>