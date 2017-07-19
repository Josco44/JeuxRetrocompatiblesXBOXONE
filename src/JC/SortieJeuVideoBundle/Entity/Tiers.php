<?php

namespace JC\SortieJeuVideoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\File;
use Vich\UploaderBundle\Mapping\Annotation as Vich;

/**
 * Tiers
 *
 * @ORM\Table(name="tiers")
 * @ORM\Entity(repositoryClass="JC\SortieJeuVideoBundle\Repository\TiersRepository")
 * @Vich\Uploadable
 */
class Tiers
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
     * @ORM\Column(name="adresse", type="string", length=255, nullable=true)
     */
    private $adresse;

    /**
     * @var string
     *
     * @ORM\Column(name="siteWeb", type="string", length=255)
     */
    private $siteWeb;

    /**
     * @var bool
     *
     * @ORM\Column(name="published", type="boolean")
     */
    private $published;

    /**
     * @var int
     *
     * @ORM\Column(name="anneeCreation", type="integer")
     */
    private $anneeCreation;

    /**
     * @ORM\ManyToOne(targetEntity="JC\SortieJeuVideoBundle\Entity\Nationalite")
     * @ORM\JoinColumn(nullable=false)
     */
    private $nationalite;

    /**
     * @ORM\ManyToOne(targetEntity="JC\SortieJeuVideoBundle\Entity\TypeTiers")
     * @ORM\JoinColumn(nullable=false)
     */

    /**
     * @ORM\ManyToMany(targetEntity="JC\SortieJeuVideoBundle\Entity\TypeTiers", cascade={"persist"})
     */    
    private $typeTiers;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @var string
     */
    private $image;

    /**
     * @Vich\UploadableField(mapping="tiers_images", fileNameProperty="image")
     * @var File
     */
    private $imageFile;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     * @var \DateTime
     */
    private $updatedAt;

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
     * @return Tiers
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
     * Set adresse
     *
     * @param string $adresse
     *
     * @return Tiers
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;

        return $this;
    }

    /**
     * Get adresse
     *
     * @return string
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * Set site
     *
     * @param string $site
     *
     * @return Tiers
     */
    public function setSite($site)
    {
        $this->site = $site;

        return $this;
    }

    /**
     * Get site
     *
     * @return string
     */
    public function getSite()
    {
        return $this->site;
    }

    /**
     * Set published
     *
     * @param boolean $published
     *
     * @return Tiers
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
     * Set nationalite
     *
     * @param \JC\SortieJeuVideoBundle\Entity\Nationalite $nationalite
     *
     * @return Tiers
     */
    public function setNationalite(\JC\SortieJeuVideoBundle\Entity\Nationalite $nationalite)
    {
        $this->nationalite = $nationalite;

        return $this;
    }

    /**
     * Get nationalite
     *
     * @return \JC\SortieJeuVideoBundle\Entity\Nationalite
     */
    public function getNationalite()
    {
        return $this->nationalite;
    }

    
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->typeTiers = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add typeTier
     *
     * @param \JC\SortieJeuVideoBundle\Entity\TypeTiers $typeTier
     *
     * @return Tiers
     */
    public function addTypeTier(\JC\SortieJeuVideoBundle\Entity\TypeTiers $typeTier)
    {
        $this->typeTiers[] = $typeTier;

        return $this;
    }

    /**
     * Remove typeTier
     *
     * @param \JC\SortieJeuVideoBundle\Entity\TypeTiers $typeTier
     */
    public function removeTypeTier(\JC\SortieJeuVideoBundle\Entity\TypeTiers $typeTier)
    {
        $this->typeTiers->removeElement($typeTier);
    }

    /**
     * Get typeTiers
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getTypeTiers()
    {
        return $this->typeTiers;
    }

    /**
     * Set anneeCreation
     *
     * @param integer $anneeCreation
     *
     * @return Tiers
     */
    public function setAnneeCreation($anneeCreation)
    {
        $this->anneeCreation = $anneeCreation;

        return $this;
    }

    /**
     * Get anneeCreation
     *
     * @return integer
     */
    public function getAnneeCreation()
    {
        return $this->anneeCreation;
    }

    /**
     * Set siteWeb
     *
     * @param string $siteWeb
     *
     * @return Tiers
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
     * Set image
     *
     * @param string $image
     *
     * @return Tiers
     */
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return string
     */
    public function getImage()
    {
        return $this->image;
    }

    public function setImageFile(File $image = null)
    {
        $this->imageFile = $image;

        // VERY IMPORTANT:
        // It is required that at least one field changes if you are using Doctrine,
        // otherwise the event listeners won't be called and the file is lost
        if ($image) {
            // if 'updatedAt' is not defined in your entity, use another property
            $this->updatedAt = new \DateTime('now');
        }
    }

    public function getImageFile()
    {
        return $this->imageFile;
    }        

    /**
     * Set updatedAt
     *
     * @param \DateTime $updatedAt
     *
     * @return Tiers
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
}
