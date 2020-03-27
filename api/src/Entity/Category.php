<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use ApiPlatform\Core\Annotation\ApiProperty;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * A customer
 *
 * @ApiResource
 * @ORM\Entity
 */
class Category
{
    /**
     * @var int The category Id
     *
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @var string Name
     *
     * @ORM\Column
     * @Assert\NotBlank
     */
    public $name = '';

    public function getId(): int
    {
        return $this->id;
    }
}
