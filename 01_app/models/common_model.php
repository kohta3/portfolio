<?php
    class common_model {
        function connectDB(){
            $servername = "mysql1.php.starfree.ne.jp"; // データベースのホスト名
            $username = "kohta_admin"; // データベースのユーザー名
            $password = "kohta1009"; // データベースのパスワード
            $dbname = "kohta_portfolio"; // データベースの名前
        
            $conn = new mysqli($servername, $username, $password, $dbname);
        
            if ($conn->connect_error) {
                setcookie("db_status", "接続失敗", time()+10);
            }
            echo "データベースに接続しました";   
        }
    }
?>
