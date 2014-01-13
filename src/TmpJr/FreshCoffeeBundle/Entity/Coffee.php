<?php

namespace TmpJr\FreshCoffeeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\Collection;

use TmpJr\FreshCoffeeBundle\Entity\CoffeeEntry;

/**
 * Coffee
 *
 * @ORM\Entity
 * @ORM\Table(name="coffee")
 */
class Coffee
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
     * @ORM\Column(name="created_at", type="datetime")
     */
    private $created_at;

    /**
     * @var string $name
     *
     * @ORM\Column(name="name", type="string")
     */
    private $name;

    /**
     * @var Collection $coffee_entries
     * @ORM\OneToMany(targetEntity="\TmpJr\FreshCoffeeBundle\Entity\CoffeeEntry", mappedBy="coffee")
     */
    protected $coffee_entries;

    public function __construct()
    {
        $this->created_at = new \DateTime();
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param \DateTime $created_at
     */
    public function setCreatedAt(\DateTime $created_at)
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
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Add a coffee_entry
     *
     * @param CoffeeEntry $coffee_entry
     * @return Coffee
     */
    public function addCoffeeEntry(CoffeeEntry $coffee_entry)
    {
        $this->coffee_entries[] = $coffee_entry;

        return $this;
    }
}