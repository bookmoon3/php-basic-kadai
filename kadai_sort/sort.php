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
            // TRUEなら昇順、FALSEなら降順にソート
            if ($order) {
                echo '昇順にソートします。<br>';
                sort($array);
            } else {
                echo '降順にソートします。<br>';
                rsort($array);
            }

            // ソート結果を1行ずつ表示
            foreach ($array as $value) {
                echo $value . '<br>';
            }
        }

        // ソースする配列を宣言
        $nums = [15, 4, 18, 23, 10];

        // 配列をソート
        sort_2way($nums, TRUE);
        sort_2way($nums, FALSE);
        ?>
    </p>
</body>
</html>