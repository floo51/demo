<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiFilter;
use ApiPlatform\Core\Annotation\ApiProperty;
use ApiPlatform\Core\Annotation\ApiResource;
use ApiPlatform\Core\Bridge\Doctrine\Orm\Filter\OrderFilter;
use ApiPlatform\Core\Bridge\Doctrine\Orm\Filter\SearchFilter;
use Doctrine\ORM\Mapping as ORM;
use Ramsey\Uuid\UuidInterface;
use Symfony\Component\Serializer\Annotation\Groups;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * A customer
 *
 * @ApiResource
 * @ORM\Entity
 */
class ProductReview
{
    /**
     * @var int The product Id
     *
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @var \DateTimeInterface Date
     *
     * @ORM\Column(type="datetime")
     */
    public $date = '';

   /**
     * @var Customer The book this review is about.
     *
     * @ORM\ManyToOne(targetEntity="Customer")
     */
    public $customer;

   /**
     * @var Product
     *
     * @ORM\ManyToOne(targetEntity="Product")
     */
    public $product;

    /**
     * @var string
     *
     * @ORM\Column
     */
    public $comment = '';

    /**
     * @var string
     *
     * @ORM\Column
     */
    public $status = '';

    /**
     * @var int
     *
     * @ORM\Column(type="integer")
     */
    public $rating;

    public function getId(): int
    {
        return $this->id;
    }
}
