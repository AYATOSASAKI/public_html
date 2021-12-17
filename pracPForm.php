<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Practice of PHP Form (title)</title>
    </head>
    <body>
        <h1>Practice of PHP Form</h1>

        Addtion

        <form name="form1" method="post" action="pracPForm.php">
            1st number: <input type="text" name="num1"></input><br>
            2nd number: <input type="text" name="num2"></input><br>
            <input type="submit" name="execAdd" value="Add"></input><br>
        </form>

        <?php
            if (isset($_POST["execAdd"])) {
                $n1 = (int) $_POST["num1"];
                $n2 = (int) $_POST["num2"];
                printf("%d + %d = %d <br>\n", $n1, $n2, $n1 + $n2);
            }
        ?>
    </body>
</html>