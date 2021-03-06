<?php

namespace JC\SortieJeuVideoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TypeJeu
 *
 * @ORM\Table(name="typejeu")
 * @ORM\Entity(repositoryClass="JC\SortieJeuVideoBundle\Repository\TypeJeuRepository")
 */
class TypeJeu
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
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=100)
     */
    private $nom;

    /**
     * @var int
     *
     * @ORM\Column(name="noOrdre", type="integer")
     */
    private $noOrdre;

    /**
     * __toString
     *
     * @return string
     */

    public function __toString()
    {
        return $this->nom;
    }

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return TypeJeu
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set noOrdre
     *
     * @param integer $noOrdre
     *
     * @return TypeJeu
     */
    public function setNoOrdre($noOrdre)
    {
        $this->noOrdre = $noOrdre;

        return $this;
    }

    /**
     * Get noOrdre
     *
     * @return int
     */
    public function getNoOrdre()
    {
        return $this->noOrdre;
    }
}

