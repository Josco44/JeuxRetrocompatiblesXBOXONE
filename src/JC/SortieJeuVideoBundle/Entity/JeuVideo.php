<?php

namespace JC\SortieJeuVideoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * JeuVideo
 *
 * @ORM\Table(name="jeuvideo")
 * @ORM\Entity(repositoryClass="JC\SortieJeuVideoBundle\Repository\JeuVideoRepository")
 */
class JeuVideo
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
     * @var string
     *
     * @ORM\Column(name="description", type="text")
     */
    private $description;

    /**
     * @var bool
     *
     * @ORM\Column(name="published", type="boolean")
     */
    private $published;

    /**
     * @var string
     *
     * @ORM\Column(name="siteWeb", type="string", length=255, nullable=true)
     */
    private $siteWeb;    

    /**
     * @ORM\ManyToMany(targetEntity="JC\SortieJeuVideoBundle\Entity\TypeJeu", cascade={"persist"})
     */
    private $typesJeu;  

    /**
     * @ORM\ManyToMany(targetEntity="JC\SortieJeuVideoBundle\Entity\ThemeJeu", cascade={"persist"})
     */
    private $themesJeu;

    /**
     * @ORM\ManyToOne(targetEntity="JC\SortieJeuVideoBundle\Entity\AgePegi", inversedBy="jeuVideos")
     * @ORM\JoinColumn(nullable=true)
     */
    private $agePegi;    

    /**
     * @ORM\ManyToMany(targetEntity="JC\SortieJeuVideoBundle\Entity\ClassificationPegi", cascade={"persist"})
     */
    private $classificationsPegi;

    /**
     * @ORM\ManyToMany(targetEntity="JC\SortieJeuVideoBundle\Entity\ModeJeu", cascade={"persist"})
     */
    private $modesJeu;

    /**
     * @var bool
     *
     * @ORM\Column(name="triplea", type="boolean")
     */
    private $tripleA;    


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
     * @return JeuVideo
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
     * Set description
     *
     * @param string $description
     *
     * @return JeuVideo
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set published
     *
     * @param boolean $published
     *
     * @return JeuVideo
     */
    public function setPublished($published)
    {
        $this->published = $published;

        return $this;
    }

    /**
     * Get published
     *
     * @return bool
     */
    public function getPublished()
    {
        return $this->published;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->typesJeu = new \Doctrine\Common\Collections\ArrayCollection();
        $this->themesJeu = new \Doctrine\Common\Collections\ArrayCollection();
        $this->classificationsPegi = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add typesJeu
     *
     * @param \JC\SortieJeuVideoBundle\Entity\TypeJeu $typesJeu
     *
     * @return JeuVideo
     */
    public function addTypesJeu(\JC\SortieJeuVideoBundle\Entity\TypeJeu $typesJeu)
    {
        $this->typesJeu[] = $typesJeu;

        return $this;
    }

    /**
     * Remove typesJeu
     *
     * @param \JC\SortieJeuVideoBundle\Entity\TypeJeu $typesJeu
     */
    public function removeTypesJeu(\JC\SortieJeuVideoBundle\Entity\TypeJeu $typesJeu)
    {
        $this->typesJeu->removeElement($typesJeu);
    }

    /**
     * Get typesJeu
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getTypesJeu()
    {
        return $this->typesJeu;
    }

    /**
     * Set dateSortie
     *
     * @param \DateTime $dateSortie
     *
     * @return JeuVideo
     */
    public function setDateSortie($dateSortie)
    {
        $this->dateSortie = $dateSortie;

        return $this;
    }

    /**
     * Get dateSortie
     *
     * @return \DateTime
     */
    public function getDateSortie()
    {
        return $this->dateSortie;
    }


    /**
     * Set updatedAt
     *
     * @param \DateTime $updatedAt
     *
     * @return JeuVideo
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * Get updatedAt
     *
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * Set support
     *
     * @param \JC\SortieJeuVideoBundle\Entity\Support $support
     *
     * @return JeuVideo
     */
    public function setSupport(\JC\SortieJeuVideoBundle\Entity\Support $support)
    {
        $this->support = $support;

        return $this;
    }

    /**
     * Get support
     *
     * @return \JC\SortieJeuVideoBundle\Entity\Support
     */
    public function getSupport()
    {
        return $this->support;
    }

    /**
     * Add themesJeu
     *
     * @param \JC\SortieJeuVideoBundle\Entity\ThemeJeu $themesJeu
     *
     * @return JeuVideo
     */
    public function addThemesJeu(\JC\SortieJeuVideoBundle\Entity\ThemeJeu $themesJeu)
    {
        $this->themesJeu[] = $themesJeu;

        return $this;
    }

    /**
     * Remove themesJeu
     *
     * @param \JC\SortieJeuVideoBundle\Entity\ThemeJeu $themesJeu
     */
    public function removeThemesJeu(\JC\SortieJeuVideoBundle\Entity\ThemeJeu $themesJeu)
    {
        $this->themesJeu->removeElement($themesJeu);
    }

    /**
     * Get themesJeu
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getThemesJeu()
    {
        return $this->themesJeu;
    }

    /**
     * Set agePegi
     *
     * @param \JC\SortieJeuVideoBundle\Entity\AgePegi $agePegi
     *
     * @return JeuVideo
     */
    public function setAgePegi(\JC\SortieJeuVideoBundle\Entity\AgePegi $agePegi = null)
    {
        $this->agePegi = $agePegi;

        return $this;
    }

    /**
     * Get agePegi
     *
     * @return \JC\SortieJeuVideoBundle\Entity\AgePegi
     */
    public function getAgePegi()
    {
        return $this->agePegi;
    }

    /**
     * Add classificationsPegi
     *
     * @param \JC\SortieJeuVideoBundle\Entity\ClassificationPegi $classificationsPegi
     *
     * @return JeuVideo
     */
    public function addClassificationsPegi(\JC\SortieJeuVideoBundle\Entity\ClassificationPegi $classificationsPegi)
    {
        $this->classificationsPegi[] = $classificationsPegi;

        return $this;
    }

    /**
     * Remove classificationsPegi
     *
     * @param \JC\SortieJeuVideoBundle\Entity\ClassificationPegi $classificationsPegi
     */
    public function removeClassificationsPegi(\JC\SortieJeuVideoBundle\Entity\ClassificationPegi $classificationsPegi)
    {
        $this->classificationsPegi->removeElement($classificationsPegi);
    }

    /**
     * Get classificationsPegi
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getClassificationsPegi()
    {
        return $this->classificationsPegi;
    }

    /**
     * Add modesJeu
     *
     * @param \JC\SortieJeuVideoBundle\Entity\ModeJeu $modesJeu
     *
     * @return JeuVideo
     */
    public function addModesJeu(\JC\SortieJeuVideoBundle\Entity\ModeJeu $modesJeu)
    {
        $this->modesJeu[] = $modesJeu;

        return $this;
    }

    /**
     * Remove modesJeu
     *
     * @param \JC\SortieJeuVideoBundle\Entity\ModeJeu $modesJeu
     */
    public function removeModesJeu(\JC\SortieJeuVideoBundle\Entity\ModeJeu $modesJeu)
    {
        $this->modesJeu->removeElement($modesJeu);
    }

    /**
     * Get modesJeu
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getModesJeu()
    {
        return $this->modesJeu;
    }

    /**
     * Set siteWeb
     *
     * @param string $siteWeb
     *
     * @return JeuVideo
     */
    public function setSiteWeb($siteWeb)
    {
        $this->siteWeb = $siteWeb;

        return $this;
    }

    /**
     * Get siteWeb
     *
     * @return string
     */
    public function getSiteWeb()
    {
        return $this->siteWeb;
    }

    /**
     * Set tripleA
     *
     * @param boolean $tripleA
     *
     * @return JeuVideo
     */
    public function setTripleA($tripleA)
    {
        $this->tripleA = $tripleA;

        return $this;
    }

    /**
     * Get tripleA
     *
     * @return boolean
     */
    public function getTripleA()
    {
        return $this->tripleA;
    }
}
