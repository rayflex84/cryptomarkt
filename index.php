<?php

include 'Telegram.php';
$bot_token = '1412102282:AAES2QSyW4iUCkHN0UcTgNd3Uj-kyDIrc8M';
$telegram = new Telegram($bot_token);
$text = $telegram->Text();
$chat_id = $telegram->ChatID();

if ($text == '/start') {
    $option = [["\xF0\x9F\x90\xAE"], ['Git', 'Credit']];
    // Create a permanent custom keyboard
    $keyb = $telegram->buildKeyBoard($option, $onetime = false);
    $content = ['chat_id' => $chat_id, 'reply_markup' => $keyb, 'text' => "Welcome ".$telegram->FirstName()." to CowBot \xF0\x9F\x90\xAE \nPlease type /cowsay or click the Cow button !"];
} else {
    $content = array('chat_id' => $chat_id, 'text' => $text);
}
$telegram->sendMessage($content);
