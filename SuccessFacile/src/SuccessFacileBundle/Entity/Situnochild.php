<?php

namespace SuccessFacileBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Situnochild
 *
 * @ORM\Table(name="situnochild")
 * @ORM\Entity(repositoryClass="SuccessFacileBundle\Repository\SitunochildRepository")
 */
class Situnochild
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
     * @var bool
     *
     * @ORM\Column(name="maman", type="boolean")
     */
    private $maman;

    /**
     * @var bool
     *
     * @ORM\Column(name="papa", type="boolean")
     */
    private $papa;

    /**
     * @var int
     *
     * @ORM\Column(name="siblings", type="integer")
     */
    private $siblings;

    /**
     * @var bool
     *
     * @ORM\Column(name="gppaternel", type="boolean")
     */
    private $gppaternel;

    /**
     * @var bool
     *
     * @ORM\Column(name="gpmaternel", type="boolean")
     */
    private $gpmaternel;


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
     * Set maman
     *
     * @param boolean $maman
     * @return Situnochild
     */
    public function setMaman($maman)
    {
        $this->maman = $maman;

        return $this;
    }

    /**
     * Get maman
     *
     * @return boolean 
     */
    public function getMaman()
    {
        return $this->maman;
    }

    /**
     * Set papa
     *
     * @param boolean $papa
     * @return Situnochild
     */
    public function setPapa($papa)
    {
        $this->papa = $papa;

        return $this;
    }

    /**
     * Get papa
     *
     * @return boolean 
     */
    public function getPapa()
    {
        return $this->papa;
    }

    /**
     * Set siblings
     *
     * @param integer $siblings
     * @return Situnochild
     */
    public function setSiblings($siblings)
    {
        $this->siblings = $siblings;

        return $this;
    }

    /**
     * Get siblings
     *
     * @return integer 
     */
    public function getSiblings()
    {
        return $this->siblings;
    }

    /**
     * Set gppaternel
     *
     * @param boolean $gppaternel
     * @return Situnochild
     */
    public function setGppaternel($gppaternel)
    {
        $this->gppaternel = $gppaternel;

        return $this;
    }

    /**
     * Get gppaternel
     *
     * @return boolean 
     */
    public function getGppaternel()
    {
        return $this->gppaternel;
    }

    /**
     * Set gpmaternel
     *
     * @param boolean $gpmaternel
     * @return Situnochild
     */
    public function setGpmaternel($gpmaternel)
    {
        $this->gpmaternel = $gpmaternel;

        return $this;
    }

    /**
     * Get gpmaternel
     *
     * @return boolean 
     */
    public function getGpmaternel()
    {
        return $this->gpmaternel;
    }
}
