<?php

namespace SuccessFacileBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Usufruit
 *
 * @ORM\Table(name="usufruit")
 * @ORM\Entity(repositoryClass="SuccessFacileBundle\Repository\UsufruitRepository")
 */
class Usufruit
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
     * @ORM\Column(name="age", type="smallint")
     */
    private $age;

    /**
     * @var int
     *
     * @ORM\Column(name="enfant", type="smallint", nullable=true)
     */
    private $enfant;

    /**
     * @var int
     *
     * @ORM\Column(name="enfant_conjoint", type="smallint", nullable=true)
     */
    private $enfant_conjoint;
    /**
     * @var int
     *
     * @ORM\Column(name="enfant_perso", type="smallint", nullable=true)
     */
    private $enfant_perso;
    /**
     * @var int
     *
     * @ORM\Column(name="pourcent_residence", type="integer", nullable=true)
     */
    private $pourcent_residence;
    /**
     * @var int
     *
     * @ORM\Column(name="opt_residence", type="integer", nullable=true)
     */
    private $opt_residence;

    /**
     * @var int
     *
     * @ORM\Column(name="residence", type="integer", nullable=true)
     */
    private $residence;

    /**
     * @var int
     *
     * @ORM\Column(name="epargne", type="integer", nullable=true)
     */
    private $epargne;

    /**
     * @var int
     *
     * @ORM\Column(name="autre", type="integer", nullable=true)
     */
    private $autre;

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
     * Set age
     *
     * @param integer $age
     * @return Usufruit
     */
    public function setAge($age)
    {
        $this->age = $age;

        return $this;
    }

    /**
     * Get age
     *
     * @return integer 
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * Set enfant
     *
     * @param integer $enfant
     * @return Usufruit
     */
    public function setEnfant($enfant)
    {
        $this->enfant = $enfant;

        return $this;
    }

    /**
     * Get enfant
     *
     * @return integer 
     */
    public function getEnfant()
    {
        return $this->enfant;
    }
    /**
     * Set enfant_conjoint
     *
     * @param integer $enfant_conjoint
     * @return Usufruit
     */
    public function setEnfantConjoint($enfant_conjoint)
    {
        $this->enfant_conjoint = $enfant_conjoint;

        return $this;
    }

    /**
     * Get enfant_conjoint
     *
     * @return integer 
     */
    public function getEnfantConjoint()
    {
        return $this->enfant_conjoint;
    }
    /**
     * Set enfant_perso
     *
     * @param integer $enfant_perso
     * @return Usufruit
     */
    public function setEnfantPerso($enfant_perso)
    {
        $this->enfant_perso = $enfant_perso;

        return $this;
    }

    /**
     * Get enfant_perso
     *
     * @return integer 
     */
    public function getEnfantPerso()
    {
        return $this->enfant_perso;
    }

    /**
     * Set pourcent_residence
     *
     * @param integer $pourcent_residence
     * @return Usufruit
     */
    public function setPourcentResidence($pourcent_residence)
    {
        $this->pourcent_residence = $pourcent_residence;

        return $this;
    }

    /**
     * Get pourcent_residence
     *
     * @return integer 
     */
    public function getPourcentResidence()
    {
        return $this->pourcent_residence;
    }
    /**
     * Set opt_residence
     *
     * @param integer $opt_residence
     * @return Usufruit
     */
    public function setOptResidence($opt_residence)
    {
        $this->opt_residence = $opt_residence;

        return $this;
    }

    /**
     * Get opt_residence
     *
     * @return integer 
     */
    public function getOptResidence()
    {
        return $this->opt_residence;
    }
    /**
     * Set residence
     *
     * @param integer $residence
     * @return Usufruit
     */
    public function setResidence($residence)
    {
        $this->residence = $residence;

        return $this;
    }

    /**
     * Get residence
     *
     * @return integer 
     */
    public function getResidence()
    {
        return $this->residence;
    }

    /**
     * Set epargne
     *
     * @param integer $epargne
     * @return Usufruit
     */
    public function setEpargne($epargne)
    {
        $this->epargne = $epargne;

        return $this;
    }

    /**
     * Get epargne
     *
     * @return integer 
     */
    public function getEpargne()
    {
        return $this->epargne;
    }

    /**
     * Set autre
     *
     * @param integer $autre
     * @return Usufruit
     */
    public function setAutre($autre)
    {
        $this->autre = $autre;

        return $this;
    }

    /**
     * Get autre
     *
     * @return integer 
     */
    public function getAutre()
    {
        return $this->autre;
    }
}
