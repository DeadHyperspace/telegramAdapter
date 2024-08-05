<?php

namespace App\Entity;

use App\Repository\MessageRepository;
use DateTime;
use Doctrine\ORM\Mapping as ORM;

#[
    ORM\Table(name: 'messages'),
    ORM\Entity(repositoryClass: MessageRepository::class)
]
class Message
{

    #[ORM\Id()]
    #[ORM\GeneratedValue(strategy: 'IDENTITY')]
    #[ORM\Column(name: 'id', type: 'integer')]
    private int $id;

    #[ORM\Column(name: 'chat_id', type: 'string')]
    private string $chatId;

    #[ORM\Column(name: 'text', type: 'string')]
    private string $text;

    #[ORM\Column(name: 'send_time', type:'datetime')]
    private DateTime $sendTime;

    #[ORM\Column(name: 'delivery_flag', type: 'boolean')]
    private bool $deliveryFlag;
    public function __construct()
    {
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): Message
    {
        $this->id = $id;
        return $this;

    }

    public function getChatId(): string
    {
        return $this->chatId;
    }

    public function setChatId(string $chatId): Message
    {
        $this->chatId = $chatId;
        return $this;

    }

    public function getText(): string
    {
        return $this->text;
    }

    public function setText(string $text): Message
    {
        $this->text = $text;
        return $this;
    }
}