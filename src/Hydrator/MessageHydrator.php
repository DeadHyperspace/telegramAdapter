<?php

namespace App\Hydrator;

use App\DTO\MessageDTO;

class MessageHydrator
{
    static public function hydrate(array $data):MessageDTO
    {
        $dto = new MessageDTO();
        $dto->setChatId($data["chatId"])
            ->setText($data["text"]);
        return $dto;
    }
}