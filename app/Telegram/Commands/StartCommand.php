<?php

namespace App\Telegram\Commands;

use App\Telegram\Buttons\StartButton;

class StartCommand
{

    public static function handle($bot)
    {

        return \Closure::fromCallable(function (\TelegramBot\Api\Types\Message $message) use ($bot){

            try {
                $chatId = $message->getChat()->getId();

                $button= new StartButton();
                $bot->sendMessage($chatId, $button->message, "HTML", false, null, $button->get());


            } catch (Exception $exception) {

            }
        });

    }
}
