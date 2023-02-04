<?php
// step2
    $raretsu = $_POST['raretsu'];
    $mojisu = strlen($raretsu);
    $nanmojime = mt_rand(0, $mojisu - 1);
    $unsei = substr($raretsu, $nanmojime, 1);

// step3
    echo date("Y/m/d", time())."の運勢は<br>";
    echo "選ばれた数字は{$unsei}<br>";
    switch ($unsei) {
        case "0":
            echo "凶";
        break;
   
        case "1":
        case "2":
        case "3":
            echo "小吉";
        break;

        case "4":
        case "5":
        case "6":
            echo "中吉";
        break;

        case "7":
        case "8":
            echo "吉";
        break;

        case "9":
            echo "大吉";
        break;
    }
?>