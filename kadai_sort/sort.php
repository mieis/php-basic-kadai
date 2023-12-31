<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php
        // ソート関数を定義
        function sort_2way($array, $order){
            if ($order === TRUE) {
                echo "昇順にソートします。<br>";
                sort($array);                
            } else {
                echo "降順にソートします。<br>";
                rsort($array);
            }

            foreach ($array as $val) {
                echo $val . "<br>";
            }
        }

        // ソートする配列を宣言
        $nums = [15, 4, 18, 23, 10 ];

        // ソート関数を呼び出す
        sort_2way($nums, TRUE);
        sort_2way($nums, FALSE);

        ?>
    </p>
</body>

</html>
