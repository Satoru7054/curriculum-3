<?php 
$name = $_POST["name"];
$question1 = $_POST["question1"];
$question2 = $_POST["question2"];
$question3 = $_POST["question3"];
$seikai = $_POST["seikai"];

function seigo($kaitou, $kotae) {
    if ($kaitou === $kotae) {
        echo "正解！";
    } else {
        echo "残念・・・";
    }
}
?>

<link rel="stylesheet" href="style.css">
<p><?php echo $name;?>さんの結果は・・・？</p>
<p>①の答え</p>
<p><?php seigo($question1, $seikai[0]);?></p>

<p>②の答え</p>
<p><?php seigo($question2, $seikai[1]);?></p>

<p>③の答え</p>
<p><?php seigo($question3, $seikai[2]);?></p>