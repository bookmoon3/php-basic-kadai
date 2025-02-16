<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>
<body>
    <p>
        <?php
        // ソート関数の定義
        function sort_2way($array, $order) {
            if ($order) {
                echo '昇順にソートします。<br>';
                sort($array);
            } else {
                echo '降順にソートします。<br>';
                rsort($array);
            }
            foreach ($array as $array) {
                echo $array . '<br>';
            }
        }

        // ソースする配列を宣言
        $array = [15, 4, 18, 23, 10];

        // 配列をソート
        sort_2way($array, TRUE);
        sort_2way($array, FALSE);
        ?>
    </p>
</body>
</html>