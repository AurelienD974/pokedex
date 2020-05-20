<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ElementRepisotory")
 */
class Element
{
    /**
     * @ORM\Name()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="string")
     */
    private $name;

    public function getName(): ?string
    {
        return $this->name;
    } 
}
