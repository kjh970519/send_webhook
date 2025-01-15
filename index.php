<?php

$curl = curl_init();

curl_setopt_array($curl, array(
    CURLOPT_URL => 'https://discord.com/api/webhooks/1328597708553846785/jQzkSmExZpaw72vyc-nNL3LTHXdwvTlRqAIgsTNHokyckjuXVaFovqp2sUFLhXelaaQe',
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => '',
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => 'POST',
    CURLOPT_POSTFIELDS =>'{"content":"**[ LAES, LAESV ]** [SEALSQ in Cooperation with WISeKey Expands Post-Quantum Footprint in Saudi Arabia](https:\\/\\/www.stocktitan.net\\/news\\/LAES\\/sealsq-in-cooperation-with-wi-se-key-expands-post-quantum-footprint-8t64vsnpc29b.html)","username":"stock-new-bot","avatar_url":"https:\\/\\/encrypted-tbn0.gstatic.com\\/images?q=tbn:ANd9GcQ6ecGI6G--McHmbv95b61RDQbL7ZggrsQ4IA&s"}',
    CURLOPT_HTTPHEADER => array(
        'Content-Type: application/json',
        'Cookie: __cfruid=aa297349782f364b166bd43d6d0f8f1cf2da9ec8-1736843886; __dcfduid=e03a12bcd25211ef9856ba35e2a72568; __sdcfduid=e03a12bcd25211ef9856ba35e2a72568f2d4edc37bb8c884f68e1ef77e73e4b2cbacddcf1882f6dd71c3b7cf22aef6f3; _cfuvid=iNOCpsg1.HQVsS2NUcHaWfrDujO2RxRrVdYUz9YJyuA-1736843886380-0.0.1.1-604800000'
    ),
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;
