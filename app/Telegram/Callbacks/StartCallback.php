<?php

namespace App\Telegram\Callbacks;

use App\Models\User;
use App\Telegram\Buttons\StartButton;

class StartCallback
{
    public static function handle($bot,$query)
    {


            try {
                $chatId = $query->getMessage()->getChat()->getId();
                $data = $query->getData();
                $messageId = $query->getMessage()->getMessageId();
                $button= new StartButton();

                $user_ids=User::pluck('chat_id')->toArray();
                $bot->editMessageText($chatId, $messageId, 'salom2   '.$button->message, "HTML", false, $button->get());

            } catch (Exception $exception) {


            }


    }

}
