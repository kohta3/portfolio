<?php
    class common{
        function generate_csrf_token() {
            session_start();
            if (!isset($_SESSION['csrf_token'])) {
                $_SESSION['csrf_token'] = bin2hex(random_bytes(32)); // 32バイトのランダムなバイト列を生成し、16進数に変換してトークンとして保存
            }
            return $_SESSION['csrf_token'];
        }
    }
?>