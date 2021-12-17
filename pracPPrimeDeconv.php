<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Prime Factorization by PHP</title>
    </head>
    <body>
        <h1>Prime Factorization by PHP</h1>

        Prime Fractorization

        <form name="form1" method="post" action="pracPPrimeDeconv.php">
            Input a number: <input type="text" name="num"></input><br>
            <input type="submit" name="primeF" value="Fractorize"></input><br>
        </form>

        <?php
            if (isset($_POST["primeF"])) {
                $n1 = (int) $_POST["num"];
                printf("%d =  <br>\n", $n1);
            }
        ?>
    </body>
</html>