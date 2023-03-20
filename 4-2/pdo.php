<?php
    // DBの接続情報を定数で定義
    define('DB_DATABASE','checktest4');
    define('DB_USERNAME','root');
    define('DB_PASSWORD','');
    define('PDO_DSN','mysql:host=localhost;charset=utf8;dbname='.DB_DATABASE);

    /**
     * DBの接続設定をしたPDOインスタンスを返却する
     * @return object
     */
    // getData.phpの11行目 コンストラクタで実行される
    function connect() {
        // PDOインスタンスの作成
        $pdo = new PDO(PDO_DSN,DB_USERNAME,DB_PASSWORD);
        // エラー処理方法の設定
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;
        try {
        } catch(PDOException $e) {
            echo 'Error:' . $e->getMessage();
            die();
        }
    }
?>