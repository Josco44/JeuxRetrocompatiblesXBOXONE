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
     * @ORM\ManyToMany(targetEntity="JC\SortieJeuVideoBundle\Entity\TypeJeu", cascade={"persist"})
     */
    private $typesJeu;  

    /**
     * @ORM\ManyToMany(targetEntity="JC\SortieJeuVideoBundle\Entity\ThemeJeu", cascade={"persist"})
     */
    private $themesJeu;  


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
        $this->tiersDeveloppeur = new \Doctrine\Common\Collections\ArrayCollection();
        $this->tiersEditeur = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Add tiersDeveloppeur
     *
     * @param \JC\SortieJeuVideoBundle\Entity\Tiers $tiersDeveloppeur
     *
     * @return JeuVideo
     */
    public function addTiersDeveloppeur(\JC\SortieJeuVideoBundle\Entity\Tiers $tiersDeveloppeur)
    {
        $this->tiersDeveloppeur[] = $tiersDeveloppeur;

        return $this;
    }

    /**
     * Remove tiersDeveloppeur
     *
     * @param \JC\SortieJeuVideoBundle\Entity\Tiers $tiersDeveloppeur
     */
    public function removeTiersDeveloppeur(\JC\SortieJeuVideoBundle\Entity\Tiers $tiersDeveloppeur)
    {
        $this->tiersDeveloppeur->removeElement($tiersDeveloppeur);
    }

    /**
     * Get tiersDeveloppeur
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getTiersDeveloppeur()
    {
        return $this->tiersDeveloppeur;
    }

    /**
     * Add tiersEditeur
     *
     * @param \JC\SortieJeuVideoBundle\Entity\Tiers $tiersEditeur
     *
     * @return JeuVideo
     */
    public function addTiersEditeur(\JC\SortieJeuVideoBundle\Entity\Tiers $tiersEditeur)
    {
        $this->tiersEditeur[] = $tiersEditeur;

        return $this;
    }

    /**
     * Remove tiersEditeur
     *
     * @param \JC\SortieJeuVideoBundle\Entity\Tiers $tiersEditeur
     */
    public function removeTiersEditeur(\JC\SortieJeuVideoBundle\Entity\Tiers $tiersEditeur)
    {
        $this->tiersEditeur->removeElement($tiersEditeur);
    }

    /**
     * Get tiersEditeur
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getTiersEditeur()
    {
        return $this->tiersEditeur;
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
}
