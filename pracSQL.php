<?php
    $error = False;
    $htmlStr = '';
    $mysqli = new mysqli('localhost', '21M51651', 'nf8ZVxsU', '21M51651');
    /* 接続状況をチェックします */
    if ($mysqli->connect_errno) {
        $htmlStr .= "<font color=\"red\">".$mysqli->connect_error;"</font>";
        $error = True;
    } else {
        $mysqli->set_charset ( "utf8" );
    }
    if (! $error) {
        $query = "select userTbl.name, groupTbl.name from groupTbl,groupUser,userTbl where groupTbl.gid=groupUser.gid and userTbl.uid=groupUser.uid;";
        if ($result = $mysqli->query ( $query )) {
            $nRow = $result->num_rows;
            $htmlStr .= "The number of combination of member and group is " . $nRow . "<br>\n";
            $htmlStr .= "<table border=\"1\">\n";
            $htmlStr .= "<tr><td>Name</td><td>Group</td></tr>\n";
            while ( $row = $result->fetch_array () ) {
                $htmlStr .= "<tr><td>" . $row [0] . "</td><td>" . $row[1] . "</td></tr>\n";
            }
            $htmlStr .= "</table>\n";
        }
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Practice SQL (title)</title>
    </head>
    <body>
        <h1>Practice SQL</h1>
        <?php
            echo $htmlStr
        ?>
    </body>
</html>