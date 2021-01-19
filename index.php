<?php

include 'Telegram.php';
$bot_token = '1412102282:AAES2QSyW4iUCkHN0UcTgNd3Uj-kyDIrc8M';
$telegram = new Telegram($bot_token);
$text = $telegram->Text();
$chat_id = $telegram->ChatID();

if ($text == '/start') {
//     $option = [["\xF0\x9F\x90\xAE"], ['Git', 'Credit']];
    $option = [["QWERTYUI1223311223"]];
    // Create a permanent custom keyboard
    //$keyb = $telegram->buildKeyBoard($option, $onetime = false);
    $content = ['chat_id' => $chat_id, 'text' => "Bienvenue ".$telegram->FirstName()." dans la famille CryptoMarkt 😊,\nEntrez votre nom d'utilisateur sur CryptoMarkt pour pouvoir activer votre compte.\nSi vous ne vous souvenez plus de votre Nom d'utilisateur, vous le trouverez allant sur votre compte https://cryptomarkt.com."];
} else {
    $content = array('chat_id' => $chat_id, 'text' => $text);
}
$telegram->sendMessage($content);
