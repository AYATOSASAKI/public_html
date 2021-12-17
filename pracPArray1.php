<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Practice of PHP Array 1 (title)</title>
    </head>
    <body>
        <h1>Practice of PHP Array 1</h1>

        <?php

            $array1 = array();
            $array1[0] = 0;
            $array1[1] = 11;
            $array1[2] = 22;
            $array1[3] = 33;
            $array1[4] = 44;

            for ($i = 0 ; $i < 5 ; ++$i) {
                print(’$array1[’.$i.’] = ’. $array1[$i]." <br>\n");
            }

            $array2 = array();
            $array2["class"] = "gakkyu";
            $array2["student"] = "Seito";
            $array2["information"] = "Jouhou";

            foreach ($array2 as $english => $japanese) {
                print(’$array2[’.$english.’] = ’. $japanese." <br>\n");
            }

        ?>
    </body>
</html>