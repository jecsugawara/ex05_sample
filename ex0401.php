<?php
require_once("db_connect.php");
?>
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ex0401</title>
</head>

<body>
    <h1>ex0401.php</h1>
    <h2>26jy02xx 電子タロウ</h2>
    <h3>カテゴリー一覧</h3>
    <?php
    // カテゴリー一覧を表示する
    try {  //例外処理は必ず入れること!!
        //SQL文を作成して実行する。
        //プリペアードステートメントを作成する。
        //プリペアードステートメントを実行する。
        //データベースを切断する。
    } catch (PDOException $e) {
        echo "データベースエラー: " . $e->getMessage();
        exit;
    }   

    // 結果セットからすべてのデータをフェッチ(取り出す)する
    while(        ) {
    
    
    }
    ?>
</body>

</html>
