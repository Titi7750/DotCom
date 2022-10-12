<?php

namespace App\Entity;

use App\Repository\TypeRestaurantRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: TypeRestaurantRepository::class)]
class TypeRestaurant
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $type_restaurant = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTypeRestaurant(): ?string
    {
        return $this->type_restaurant;
    }

    public function setTypeRestaurant(string $type_restaurant): self
    {
        $this->type_restaurant = $type_restaurant;

        return $this;
    }
}
