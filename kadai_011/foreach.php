<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>PHPの基礎を学ぼう_12章課題</title>
</head>
<body>
    <p>
        <?php
        // 連想配列に値を代入する
        $food_products = ['名前' => '玉ねぎ', '値段' => 200, '産地' => '北海道'];

        // 連想配列$food_productsのキーと値をコロンで区切り、要素ごとに改行して出力する
        foreach ($food_products as $key => $value) {
            echo "{$key} : {$value}<br>";
        }
        ?>
    </p>
</body>
</html>