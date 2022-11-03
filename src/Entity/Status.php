<?php

namespace App\Entity;

use App\Repository\StatusRepository;
use ApiPlatform\Metadata\ApiResource;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: StatusRepository::class)]
#[ApiResource()]
class Status
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?bool $gotUser = null;

    #[ORM\Column]
    private ?bool $inPractise = null;

    #[ORM\Column]
    private ?bool $readyToPlay = null;

    #[ORM\ManyToOne(inversedBy: 'status')]
    private ?Instrument $instrument = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function isGotUser(): ?bool
    {
        return $this->gotUser;
    }

    public function setGotUser(bool $gotUser): self
    {
        $this->gotUser = $gotUser;

        return $this;
    }

    public function isInPractise(): ?bool
    {
        return $this->inPractise;
    }

    public function setInPractise(bool $inPractise): self
    {
        $this->inPractise = $inPractise;

        return $this;
    }

    public function isReadyToPlay(): ?bool
    {
        return $this->readyToPlay;
    }

    public function setReadyToPlay(bool $readyToPlay): self
    {
        $this->readyToPlay = $readyToPlay;

        return $this;
    }

    public function getInstrument(): ?Instrument
    {
        return $this->instrument;
    }

    public function setInstrument(?Instrument $instrument): self
    {
        $this->instrument = $instrument;

        return $this;
    }
}
