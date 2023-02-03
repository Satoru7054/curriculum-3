<?php
// 書き込み
    $testFile = "test.txt";
    $contents = "こんにちは！";

    if (is_writable($testFile)) {
        $fp = fopen($testFile, "w");
        fwrite($fp, $contents);
        fclose($fp);
        echo "finsh writing!!";
    } else {
        echo "not writable!!";
        exit;
    }

// 読み込み
    $test_File = "test2.txt";

    if (is_readable($test_File)) {
        $fp = fopen($test_File, "r");
        while ($line = fgets($fp)) {
            echo $line."<br>";
        }
        fclose($fp);
    } else {
        echo "not readable";
        exit;
    } 
?>