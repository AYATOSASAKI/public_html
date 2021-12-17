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
                $prime_list = array();
                $temp = $n1;
                for ($i = 2 ; $i <= round($n1**0.5) ; ++$i) {
                    if($temp % $i == 0) {
                        $cnt = 0;
                        $prime_n_count = array();
                        while($temp % $i == 0){
                            $cnt += 1;
                            $temp = round($temp / $i);
                        }
                        array_push($prime_n_count, $i, $cnt);
                        array_push($prime_list, $prime_n_count);
                    }
                }
                if ($temp != 1){
                    $arr = array();
                    array_push($arr, $temp, $i);
                    array_push($prime_list, $arr);
                }
                if (empty($prime_list)){
                    $arr = array();
                    array_push($arr, $n1, 1);
                    array_push($prime_list, $arr);
                }

                for ($i = 0 ; $i < count($prime_list) ; ++$i) {
                    $prime = $prime_list[$i];
                    for ($j = 0 ; $j < count($prime) ; ++$j) {
                        printf("%d = %d ^ %d <br>\n", $n1, $prime[0], $prime[1]);
                    }
                }
            }
        ?>
    </body>
</html>