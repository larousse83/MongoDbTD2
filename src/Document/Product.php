<?php


namespace App\Document;

Use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;

/**
 * Product
 * @MongoDB\Document
 */
class Product
{
    /**
     * @var string
     * @MongoDB\Id
     */
    private $id;

    /**
     * @var string
     * @MongoDB\Field(type="string", name="name")
     */
    protected $name;

    /**
     * @MongoDB\Field(type="string", name="price")
     */
    protected $price;

    public function getName()
    {
        return $this->name;
    }

    public function setName(string $string)
    {
        $this->name = $string;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function setPrice(string $string)
    {
        $this->price = $string;
    }

    public function getId()
    {
        return $this->id;
    }
}