<?php

namespace App\Entity;

use App\Repository\MessageRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]
#[ORM\Table(name: 'messages2')]
class Messages2
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(targetEntity: User2::class, inversedBy: 'sentMessages')]
    #[ORM\JoinColumn(nullable: false)]
    private ?User2 $sender = null;

    #[ORM\ManyToOne(inversedBy: 'receivedMessages')]
    #[ORM\JoinColumn(nullable: false)]
    private ?User2 $recipient = null;

    #[ORM\Column(length: 0)]
    private ?string $message = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(int $id): static
    {
        $this->id = $id;

        return $this;
    }

    public function getSender(): ?User2
    {
        return $this->sender;
    }

    public function setSender(?User2 $sender): static
    {
        $this->sender = $sender;

        return $this;
    }

    public function getRecipient(): ?User2
    {
        return $this->recipient;
    }

    public function setRecipient(?User2 $recipient): static
    {
        $this->recipient = $recipient;

        return $this;
    }

    public function getMessage(): ?string
    {
        return $this->message;
    }

    public function setMessage(string $message): static
    {
        $this->message = $message;

        return $this;
    }
}
