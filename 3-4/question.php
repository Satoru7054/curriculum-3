<?php
$name = $_POST["name"];

$mondai1 = [80, 22, 20, 21];
$mondai2 = ["PHP", "Python", "JAVA", "HTML"];
$mondai3 = ["join", "select", "insert", "update"];

$seikai = [80, "HTML", "select"];
?>

<link rel="stylesheet" href="style.css">
<p>お疲れ様です<?php echo $name;?>さん</p>
<form action="answer.php" method="post">
    <h2>①ネットワークのポート番号は何番？</h2>
    <?php foreach ($mondai1 as $value1) { ?>
    <input type="radio" name="question1" value="<?php echo $value1;?>"><?php echo $value1;}?>

    <h2>②Webページを作成するための言語は？</h2>
    <?php foreach ($mondai2 as $value2) { ?>
    <input type="radio" name="question2" value="<?php echo $value2;?>"><?php echo $value2;}?>

    <h2>③MySQLで情報を取得するためのコマンドは？</h2>
    <?php foreach ($mondai3 as $value3) { ?>
    <input type="radio" name="question3" value="<?php echo $value3;?>"><?php echo $value3;}?>
    
    <br>
    <input type="hidden" name="name" value="<?php echo $name;?>" />
    <?php $i = 0; 
    while ($i < 3) { ?>
    <input type="hidden" name="seikai[]" value="<?php echo $seikai[$i]?>" />
    <?php $i++; } ?>
    <input type="submit" value="回答する" />
<form>