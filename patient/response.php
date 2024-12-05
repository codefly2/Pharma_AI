<?php
require "vendor/autoload.php";
use GeminiAPI\Client;
use GeminiAPI\Resources\Parts\TextPart;

$data=json_decode(file_get_contents("php://input"));
$text=$data->text;
$client=new Client('AIzaSyC8U-8SNgYbf-29mj77tUrTIXszcFQZyeE');
$response=$client->geminiPro()->generateContent(
    new TextPart($text),
);
echo $response->text();