<?php

namespace App\Entity;

use App\Repository\SeasonRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: SeasonRepository::class)]
class Season
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::DATE_IMMUTABLE)]
    private ?\DateTimeImmutable $startYear = null;

    #[ORM\Column(type: Types::DATE_IMMUTABLE)]
    private ?\DateTimeImmutable $endYear = null;

    public function __toString()
    {
        return 'Saison ' . $this->getStartYear()->format('Y') . ' - ' . $this->getEndYear()->format('Y');
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getStartYear(): ?\DateTimeImmutable
    {
        return $this->startYear;
    }

    public function setStartYear(\DateTimeImmutable $startYear): static
    {
        $this->startYear = $startYear;

        return $this;
    }

    public function getEndYear(): ?\DateTimeImmutable
    {
        return $this->endYear;
    }

    public function setEndYear(\DateTimeImmutable $endYear): static
    {
        $this->endYear = $endYear;

        return $this;
    }
}
