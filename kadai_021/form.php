<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>21章課題</title>
</head>

<body>
    <h2>個人情報入力フォーム</h2>
    <form action="confirmation.php" method="post">
        <label>お名前</label>
        <input type="text" name="user_name" placeholder="侍　太郎">
        <br>

        <label>性別</label>
        <select name="user_gender">
        <option value="男性">男性</option>
        <option value="女性">女性</option>
        <option value="no anser to this question">no anser to this question</option>
        </select>
        <br>

        <label>メールアドレス</label>
        <input type="text" name="user_email">
        <br>

        <input type="submit" value="送信">
    </form>
</body>

</html>
