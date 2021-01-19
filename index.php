include 'Telegram.php';
$bot_token = '1412102282:AAES2QSyW4iUCkHN0UcTgNd3Uj-kyDIrc8M';
$telegram = new Telegram($bot_token);
$text = $telegram->Text();
$chat_id = $telegram->ChatID();
$content = array('chat_id' => $chat_id, 'text' => 'Hello');
$telegram->sendMessage($content);
