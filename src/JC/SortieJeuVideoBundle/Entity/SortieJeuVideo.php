<?php

namespace JC\SortieJeuVideoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\File;
use Vich\UploaderBundle\Mapping\Annotation as Vich;

/**
 * SortieJeuVideo
 *
 * @ORM\Table(name="sortiejeuvideo")
 * @ORM\Entity(repositoryClass="JC\SortieJeuVideoBundle\Repository\SortieJeuVideoRepository")
 * @Vich\Uploadable
 */
class SortieJeuVideo
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
     * @var \DateTime
     *
     * @ORM\Column(name="dateSortie", type="date")
     */
    private $dateSortie;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @var string
     */
    private $image;

    /**
     * @Vich\UploadableField(mapping="jeuvideo_images", fileNameProperty="image")
     * @var File
     */
    private $imageFile;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     * @var \DateTime
     */
    private $updatedAt;

   /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @var string
     */
    private $imageBig;

    /**
     * @Vich\UploadableField(mapping="jeuvideobig_images", fileNameProperty="imageBig")
     * @var File
     */
    private $imageBigFile;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     * @var \DateTime
     */
    private $updatedBigAt;    

    /**
     * @ORM\ManyToMany(targetEntity="JC\SortieJeuVideoBundle\Entity\Tiers", cascade={"persist"})
     * @ORM\JoinTable(name="jeuvideo_tiersdev")
     */
    private $tiersDeveloppeur;

    /**
     * @ORM\ManyToMany(targetEntity="JC\SortieJeuVideoBundle\Entity\Tiers", cascade={"persist"})
     * @ORM\JoinTable(name="jeuvideo_tiersedi")
     */
    private $tiersEditeur;    

    /**
     * @ORM\ManyToOne(targetEntity="JC\SortieJeuVideoBundle\Entity\JeuVideo")
     * @ORM\JoinColumn(nullable=false)
     */
    private $jeuVideo;

    /**
     * @ORM\ManyToOne(targetEntity="JC\SortieJeuVideoBundle\Entity\Support")
     * @ORM\JoinColumn(nullable=false)
     */
    private $support;

    /**
     * @var bool
     *
     * @ORM\Column(name="retroXboxOne", type="boolean")
     */
    private $retroXboxOne;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateSortieRetroXboxOne", type="date", nullable=true)
     */
    private $dateSortieRetroXboxOne;    

    /**
     * @var bool
     *
     * @ORM\Column(name="enBoite", type="boolean")
     */
    private $enBoite;    

    /**
     * __toString
     *
     * @return string
     */

    public function __toString()
    {
        return $this->jeuVideo->getNom()." - ".$this->support->getNom();
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
     * Set dateSortie
     *
     * @param \DateTime $dateSortie
     *
     * @return SortieJeuVideo
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
     * Set image
     *
     * @param string $image
     *
     * @return SortieJeuVideo
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
     * Set imageBig
     *
     * @param string $imageBig
     *
     * @return SortieJeuVideo
     */
    public function setImageBig($imageBig)
    {
        $this->imageBig = $imageBig;

        return $this;
    }

    /**
     * Get imageBig
     *
     * @return string
     */
    public function getImageBig()
    {
        return $this->imageBig;
    }

    public function setImageBigFile(File $imageBig = null)
    {
        $this->imageBigFile = $imageBig;

        // VERY IMPORTANT:
        // It is required that at least one field changes if you are using Doctrine,
        // otherwise the event listeners won't be called and the file is lost
        if ($imageBig) {
            // if 'updatedAt' is not defined in your entity, use another property
            $this->updatedBigAt = new \DateTime('now');
        }
    }

    public function getImageBigFile()
    {
        return $this->imageBigFile;
    }    
    
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->tiersDeveloppeur = new \Doctrine\Common\Collections\ArrayCollection();
        $this->tiersEditeur = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set updatedAt
     *
     * @param \DateTime $updatedAt
     *
     * @return SortieJeuVideo
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
     * Add tiersDeveloppeur
     *
     * @param \JC\SortieJeuVideoBundle\Entity\Tiers $tiersDeveloppeur
     *
     * @return SortieJeuVideo
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
     * @return SortieJeuVideo
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
     * Set support
     *
     * @param \JC\SortieJeuVideoBundle\Entity\Support $support
     *
     * @return SortieJeuVideo
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
     * Set jeuVideo
     *
     * @param \JC\SortieJeuVideoBundle\Entity\JeuVideo $jeuVideo
     *
     * @return SortieJeuVideo
     */
    public function setJeuVideo(\JC\SortieJeuVideoBundle\Entity\JeuVideo $jeuVideo)
    {
        $this->jeuVideo = $jeuVideo;

        return $this;
    }

    /**
     * Get jeuVideo
     *
     * @return \JC\SortieJeuVideoBundle\Entity\JeuVideo
     */
    public function getJeuVideo()
    {
        return $this->jeuVideo;
    }

    /**
     * Set retroXboxOne
     *
     * @param boolean $retroXboxOne
     *
     * @return SortieJeuVideo
     */
    public function setRetroXboxOne($retroXboxOne)
    {
        $this->retroXboxOne = $retroXboxOne;

        return $this;
    }

    /**
     * Get retroXboxOne
     *
     * @return boolean
     */
    public function getRetroXboxOne()
    {
        return $this->retroXboxOne;
    }

    /**
     * Set dateSortieRetroXboxOne
     *
     * @param \DateTime $dateSortieRetroXboxOne
     *
     * @return SortieJeuVideo
     */
    public function setDateSortieRetroXboxOne($dateSortieRetroXboxOne)
    {
        $this->dateSortieRetroXboxOne = $dateSortieRetroXboxOne;

        return $this;
    }

    /**
     * Get dateSortieRetroXboxOne
     *
     * @return \DateTime
     */
    public function getDateSortieRetroXboxOne()
    {
        return $this->dateSortieRetroXboxOne;
    }

    /**
     * Set enBoite
     *
     * @param boolean $enBoite
     *
     * @return SortieJeuVideo
     */
    public function setEnBoite($enBoite)
    {
        $this->enBoite = $enBoite;

        return $this;
    }

    /**
     * Get enBoite
     *
     * @return boolean
     */
    public function getEnBoite()
    {
        return $this->enBoite;
    }

    /**
     * Set updatedBigAt
     *
     * @param \DateTime $updatedBigAt
     *
     * @return SortieJeuVideo
     */
    public function setUpdatedBigAt($updatedBigAt)
    {
        $this->updatedBigAt = $updatedBigAt;

        return $this;
    }

    /**
     * Get updatedBigAt
     *
     * @return \DateTime
     */
    public function getUpdatedBigAt()
    {
        return $this->updatedBigAt;
    }
}
