<?php

namespace TmpJr\FreshCoffeeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

use TmpJr\FreshCoffeeBundle\Entity\Coffee;

/**
 * Coffee
 *
 * @ORM\Entity
 * @ORM\Table(name="coffee_entries")
 */
class CoffeeEntry
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var Coffee $coffee
     *
     * @ORM\ManyToOne(targetEntity="\TmpJr\FreshCoffeeBundle\Entity\Coffee", inversedBy="coffee_entries")
     */
    protected $coffee;

    /**
     * @var string $comment
     *
     * @ORM\Column(name="comment", type="string")
     */
    private $comment;

    /**
     * @ORM\Column(name="created_at", type="datetime")
     */
    private $created_at;

    public function __construct()
    {
        $this->created_at = new \DateTime();
    }

    /**
     * @param mixed $created_at
     */
    public function setCreatedAt($created_at)
    {
        $this->created_at = $created_at;
    }

    /**
     * @return mixed
     */
    public function getCreatedAt()
    {
        return $this->created_at;
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param string $comment
     */
    public function setComment($comment)
    {
        $this->comment = $comment;
    }

    /**
     * @return string
     */
    public function getComment()
    {
        return $this->comment;
    }



    /**
     * Set coffee
     *
     * @param Coffee $coffee
     * @return $this
     */
    public function setCoffee(Coffee $coffee)
    {
        $this->coffee = $coffee;

        return $this;
    }
}