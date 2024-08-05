<?php

namespace App\DTO;

class MessageDTO
{
    private string $chatId;
    private ?string $text;

    public function __construct()
    {
    }

    public function getChatId(): string
    {
        return $this->chatId;
    }

    public function setChatId(string $chatId): MessageDTO
    {
        $this->chatId = $chatId;
        return $this;

    }

    public function getText(): ?string
    {
        return $this->text;
    }

    public function setText(?string $text): MessageDTO
    {
        $this->text = $text;
        return $this;
    }



}