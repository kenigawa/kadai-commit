<?php
    $result = '無し';
    if(array_key_exists('act', $_POST)){
        $result = omikuji();
    }

    function omikuji() {
        $fortune = ["大吉", "吉", "中吉", "小吉", "末吉", "凶"];
        // count = fortune配列の数量
        return $fortune[random_int(0, count($fortune) -1)];
    }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>おみくじ</title>
    </head>
    <body>
        <h1>おみくじ</h1>
        <p>おみくじの結果:<?php print htmlspecialchars($result, ENT_QUOTES, "UTF-8"); ?></p>
        <form action="sample.php" method="POST">
            <button type="submit" name="act" value="draw">おみくじをひく！</button>
        </form>
    </body>
</html>