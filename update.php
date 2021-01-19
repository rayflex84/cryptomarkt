<?php
include 'Telegram.php';
$bot_token = '70360V526:ADHMSEH1eoPfd3YSCppzYdL7PnKYxtk5k10';
$telegram = new Telegram($bot_token);
$text = $telegram->Text();
$chat_id = $telegram->ChatID();
$content = array('chat_id' => $chat_id, 'text' => 'Hello');
$telegram->sendMessage($content);
