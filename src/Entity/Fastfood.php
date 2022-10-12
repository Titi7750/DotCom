<?php

namespace App\Entity;

use App\Repository\FastfoodRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: FastfoodRepository::class)]
class Fastfood
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    public function getId(): ?int
    {
        return $this->id;
    }
}
