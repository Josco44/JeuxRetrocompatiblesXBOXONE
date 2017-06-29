<?php

namespace JC\SortieJeuVideoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ThemeJeu
 *
 * @ORM\Table(name="theme_jeu")
 * @ORM\Entity(repositoryClass="JC\SortieJeuVideoBundle\Repository\ThemeJeuRepository")
 */
class ThemeJeu
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
     * @return ThemeJeu
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
     * @return ThemeJeu
     */
    public function setNoOrdre($noOrdre)
    {
        $this->noOrdre = $noOrdre;

        return $this;
    }

    /**
     * Get noOrdre
     *
     * @return integer
     */
    public function getNoOrdre()
    {
        return $this->noOrdre;
    }
}
