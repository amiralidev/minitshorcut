<?php
// YYYYYYYYY = fill it with your own uuid
if($_GET["action"] == 'start')
{
    $url = "https://minitapp.ir/api/ws/YYYYYYYYY/time_chunk/start";
}

if($_GET["action"] == 'stop')
{
    $url = "https://minitapp.ir/api/ws/YYYYYYYYY/time_chunk/stop";
}

$curl = curl_init($url);
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

$headers = array(
   "Connection: keep-alive",
   "Accept: application/json, text/plain, */*",
   "User-Agent: Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.93 Safari/537.36",
   "Content-Type: application/json",
   "Sec-GPC: 1",
   "Origin: https://minitapp.ir",
   "Sec-Fetch-Site: same-origin",
   "Sec-Fetch-Mode: cors",
   "Sec-Fetch-Dest: empty",
   "Referer: https://minitapp.ir/",
   "Accept-Language: en-US,en;q=0.9",
   "Cookie: JSESSIONID=YYYYYYYYY",
);
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);

$data = '{"title":"","project":{"uid":"YYYYYYYYY"},"task_type":null,"tags":[]}';

curl_setopt($curl, CURLOPT_POSTFIELDS, $data);

//for debug only!
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

$resp = curl_exec($curl);
curl_close($curl);
var_dump($resp);

?>
