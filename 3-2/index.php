<?php
// step1
    $price = ["りんご" => 100, "みかん" => 150, "もも" => 300];
    $num = [3, 1, 10];

// step2
    function Ikura($price, $num) {
        return $price * $num;
    }    

// step3
    $i = 0;
    foreach ($price as $key => $value) {
        echo "$key"."は".Ikura($value, $num[$i])."円です。";
        echo "<br>";
        $i++;
    }
?>