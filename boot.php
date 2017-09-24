<?php

include('TelegramBot/Api/BotApi.php');
include('TelegramBot/Api/Exception.php');
include('TelegramBot/Api/InvalidArgumentException.php');
include('TelegramBot/Api/BaseType.php');
include('TelegramBot/Api/TypeInterface.php');
include('TelegramBot/Api/Message.php');
include('TelegramBot/Api/User.php');

// Inicializar bot con el token
define(TOKEN, '423664442:AAHUt28V7GqmMETl9MVwMJRrXcbyaRmpFq4');
$bot = new \TelegramBot\Api\BotApi(TOKEN);

// Obtener actualizaciones de mensajes
try
    $aUpdates = $bot->getUpdates();
catch (\TelegramBot\Api\Exception $e)
    echo 'ERROR!: ' . $e->getMessage());
catch (\TelegramBot\Api\InvalidArgumentException $e)
    echo 'ERROR!: ' . $e->getMessage());

// Recorrer resultados
foreach ($aUpdates as $aUpdate) {

    $oMessage = $aUpdate['message'];

    // Aquí ya podemos acceder a los datos de cada mensaje devuelto
    echo 'ID del mensaje: ' . $oMessage->getMessageId();
    echo 'Contenido del mensaje: ' . $oMessage->getText();

}