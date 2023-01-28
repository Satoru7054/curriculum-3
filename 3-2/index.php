<?php
// step1
    $price = ["りんご" => 100, "みかん" => 150, "もも" => 300];
    $num = [3, 1, 10];

// step2
    function Ikura($price, $num) {
        return $price * $num;
    }    

// step3
    foreach ($price as $key => $value) {
        switch ($key) {
            case "りんご":
                echo "$key"."は".Ikura($value, $num[0])."円です。";
                echo "<br>";
            break;
            
            case "みかん":
                echo "$key"."は".Ikura($value, $num[1])."円です。";
                echo "<br>";
            break;

            case "もも":
                echo "$key"."は".Ikura($value, $num[2])."円です。";
                echo "<br>";
            break;
            
            default:
                echo "switchに新たなcaseを追加してください。";
        }
    }
?>