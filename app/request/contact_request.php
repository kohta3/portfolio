<?php
    $referer = $_SERVER['HTTP_REFERER'];
    $url = 'kohta.starfree.jp';
    $referer_url = parse_url($referer)['host'];
    $redirect = $_SERVER['DOCUMENT_ROOT']."/404";

    if (stristr($referer_url, $url) || count($_POST) > 0) {

        switch ($_POST['post_type']) {
            case 'contact_send':
                $ch = curl_init();

                // cURL オプションを設定
                curl_setopt($ch, CURLOPT_URL, 'https://script.google.com/macros/s/AKfycbzepYWU2rIlOoBld9F4ms1B4CssCMtn6F0r-7tRWcnEjslvJxG04xzKCiSp6UKnfkkx/exec');
                curl_setopt($ch, CURLOPT_POST, 1);
                curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($_POST));
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

                // POST リクエストを実行し、レスポンスを取得
                $response = curl_exec($ch);

                // cURL リソースを閉じる
                curl_close($ch);
                
                return $response;
                break;
            default:
                die("その他の処理");

                break;
        }

    }else{
        header(`Location:  $redirect`);
        exit(); 
    }