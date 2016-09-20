<?php

namespace SuccessFacileBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Combien
 *
 * @ORM\Table(name="combien")
 * @ORM\Entity(repositoryClass="SuccessFacileBundle\Repository\CombienRepository")
 */
class Combien
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
     * @ORM\Column(name="somme", type="integer")
     */
    private $somme;

    /**
     * @var bool
     *
     * @ORM\Column(name="handicap", type="boolean")
     */
    private $handicap;

    /**
     * @var int
     *
     * @ORM\Column(name="lien", type="integer")
     */
    private $lien;


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
     * Set somme
     *
     * @param integer $somme
     * @return Combien
     */
    public function setSomme($somme)
    {
        $this->somme = $somme;

        return $this;
    }

    /**
     * Get somme
     *
     * @return integer 
     */
    public function getSomme()
    {
        return $this->somme;
    }

    /**
     * Set handicap
     *
     * @param boolean $handicap
     * @return Combien
     */
    public function setHandicap($handicap)
    {
        $this->handicap = $handicap;

        return $this;
    }

    /**
     * Get handicap
     *
     * @return boolean 
     */
    public function getHandicap()
    {
        return $this->handicap;
    }

    /**
     * Set lien
     *
     * @param integer $lien
     * @return Combien
     */
    public function setLien($lien)
    {
        $this->lien = $lien;

        return $this;
    }

    /**
     * Get lien
     *
     * @return integer 
     */
    public function getLien()
    {
        return $this->lien;
    }
}
