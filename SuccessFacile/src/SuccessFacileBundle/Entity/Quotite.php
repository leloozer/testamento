<?php

namespace SuccessFacileBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Quotite
 *
 * @ORM\Table(name="quotite")
 * @ORM\Entity(repositoryClass="SuccessFacileBundle\Repository\QuotiteRepository")
 */
class Quotite
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="patrimoine", type="integer")
     */
    private $patrimoine;

    /**
     * @var int
     *
     * @ORM\Column(name="child", type="integer")
     */
    private $child;

    /**
     * @var bool
     *
     * @ORM\Column(name="marie", type="boolean")
     */
    private $marie;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set patrimoine
     *
     * @param integer $patrimoine
     * @return Quotite
     */
    public function setPatrimoine($patrimoine)
    {
        $this->patrimoine = $patrimoine;

        return $this;
    }

    /**
     * Get patrimoine
     *
     * @return integer 
     */
    public function getPatrimoine()
    {
        return $this->patrimoine;
    }

    /**
     * Set child
     *
     * @param integer $child
     * @return Quotite
     */
    public function setChild($child)
    {
        $this->child = $child;

        return $this;
    }

    /**
     * Get child
     *
     * @return integer 
     */
    public function getChild()
    {
        return $this->child;
    }

    /**
     * Set marie
     *
     * @param boolean $marie
     * @return Quotite
     */
    public function setMarie($marie)
    {
        $this->marie = $marie;

        return $this;
    }

    /**
     * Get marie
     *
     * @return boolean 
     */
    public function getMarie()
    {
        return $this->marie;
    }
}
