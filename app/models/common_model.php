<?php
    class common_model {
        function connectDB(){
            $servername = "mysql1.php.starfree.ne.jp"; // データベースのホスト名
            $username = "kohta_admin"; // データベースのユーザー名
            $password = "kohta1009"; // データベースのパスワード
            $dbname = "kohta_portfolio"; // データベースの名前
        
            $conn = new mysqli($servername, $username, $password, $dbname);
           
            return $conn;
        }

    }
?>
