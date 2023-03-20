<?php

// データ取得用ファイルの読み込み
require_once 'getData.php';

// getDataクラスのインスタンス化
$data = new getData();
// getDataクラスのデータ取得をする関数を実行し、変数に格納
$user_data = $data->getUserData();
// $post_data = ??????
$post_data = $data->getPostData();
?> 

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>記事一覧ページ</title>
</head>
<body>
    <div class="container">
            <div class="curriculum_logo">
                <img src="image/curriculum_logo.png" alt="ロゴ">
            </div>
        <div class="welcome">ようこそ<?php echo $user_data['last_name'] . $user_data['first_name']?>さん</div>
        <div class="last_login">最終ログイン日 : <?php echo date("Y-m-d H:i:s", time()); ?></div><!-- phpタグ内でユーザーの最終ログイン日を出力 -->
    </div>
        <table>
            <tr id="title">
                <th>記事ID</th>
                <th>タイトル</th>
                <th>カテゴリ</th>
                <th>本文</th>
                <th>投稿日</th>
            </tr>
            <?php foreach ($post_data as $row) {?>
            <tr id="contents">
                <!-- $rowにpostsのデータが1レコードずつ入るので、カラム名を指定して取得 -->
                <td><?php echo $row['id'];?></td><!-- 記事ID -->
                <td><?php echo $row['title'];?></td><!-- タイトル -->
                <td><?php switch ($row['category_no']) {
                    case 1: echo "食事"; break;
                    case 2: echo "旅行"; break;
                    default: echo "その他";
                };?></td><!-- カテゴリ -->
                <td><?php echo $row['comment'];?></td><!-- 本文 -->
                <td><?php echo $row['created'];?></td><!-- 登校日 -->
            </tr>
            <?php } ?>
        </table>
    <div class="company_name">Y&I group.inc</div>
</body>
</html>