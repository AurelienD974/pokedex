<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\PokemonRepisotory")
 */
class Pokemon
{
    /**
     * @ORM\Name()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="string")
     */
    private $name;
      /**
     * @ORM\Photo()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="string")
     */
    private $url_photo; 
      /**
     * @ORM\Element()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="string")
     */
    private $element;

    public function getName(): ?string
    {
        return $this->name;
    }
    public function getPhoto(): ?string
    {
        return $this->url_photo;
    }
    public function getElement(): ?string
    {
        return $this->element;
    }
}
