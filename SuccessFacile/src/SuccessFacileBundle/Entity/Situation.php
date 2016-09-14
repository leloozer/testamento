<?php

namespace SuccessFacileBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Situation
 *
 * @ORM\Table(name="situation")
 * @ORM\Entity(repositoryClass="SuccessFacileBundle\Repository\SituationRepository")
 */
class Situation
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
     * @ORM\Column(name="recompose", type="boolean")
     */
    private $recompose;

    /**
     * @var int
     *
     * @ORM\Column(name="situ", type="integer")
     */
    private $situ;


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
     * Set recompose
     *
     * @param boolean $recompose
     * @return Situation
     */
    public function setRecompose($recompose)
    {
        $this->recompose = $recompose;

        return $this;
    }

    /**
     * Get recompose
     *
     * @return boolean 
     */
    public function getRecompose()
    {
        return $this->recompose;
    }

    /**
     * Set situ
     *
     * @param integer $situ
     * @return Situation
     */
    public function setSitu($situ)
    {
        $this->situ = $situ;

        return $this;
    }

    /**
     * Get situ
     *
     * @return integer
     */
    public function getSitu()
    {
        return $this->situ;
    }
}
