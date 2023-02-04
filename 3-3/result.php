<?php
// step2
    $raretsu = $_POST['raretsu'];
    $mojisu = strlen($raretsu);
    $nanmojime = mt_rand(0, $mojisu - 1);
    $unsei = substr($raretsu, $nanmojime, 1);

// step3
    echo date("Y/m/d", time())."の運勢は<br>";
    echo "選ばれた数字は{$unsei}<br>";
    if ($unsei == "0") {
        echo "凶";
    } elseif ($unsei == "1" || $unsei == "2" || $unsei == "3") {
        echo "小吉";
    } elseif ($unsei == "4" || $unsei == "5" || $unsei == "6") {
        echo "中吉";
    } elseif ($unsei == "7" || $unsei == "8") {
        echo "吉";
    } else {
        echo "大吉";
    }
?>