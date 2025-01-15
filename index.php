<?php
    $send_data = $_REQUEST['send_data'];

    if (isset($_REQUEST['send_data'])) {

        $webhook_url = $send_data['webhook'];
        
        $data = [
            "content" => "**[ {$send_data['ticker']} ]** [{$send_data['subject']}]({$send_data['url']})",
            "username" => "stock-new-bot", // 선택사항: 웹훅에 표시될 사용자 이름
            "avatar_url" => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ6ecGI6G--McHmbv95b61RDQbL7ZggrsQ4IA&s', // 봇의 프로필 이미지 URL
        ];

        $json_data = json_encode($data);

        $ch = curl_init($webhook_url);

        curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $json_data);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $response = curl_exec($ch);
        curl_close($ch);

        if ($response === false) {
            return false;
        } else {
            return true;
        }
    }
?>