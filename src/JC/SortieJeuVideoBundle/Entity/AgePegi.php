<?php

namespace JC\SortieJeuVideoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\File;
use Vich\UploaderBundle\Mapping\Annotation as Vich;

/**
 * AgePegi
 *
 * @ORM\Table(name="agepegi")
 * @ORM\Entity(repositoryClass="JC\SortieJeuVideoBundle\Repository\AgePegiRepository")
 * @Vich\Uploadable
 */
class AgePegi
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
     * @ORM\Column(name="age", type="integer")
     */
    private $age;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @var string
     */
    private $image;

    /**
     * @Vich\UploadableField(mapping="agepegi_images", fileNameProperty="image")
     * @var File
     */
    private $imageFile;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     * @var \DateTime
     */
    private $updatedAt;

    /**
     * @ORM\OneToMany(targetEntity="JC\SortieJeuVideoBundle\Entity\JeuVideo", mappedBy="agePegi")
     */
    private $jeuVideos;


    /**
     * __toString
     *
     * @return string
     */

    public function __toString()
    {
        return strval($this->age)." ans";
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
     * Set age
     *
     * @param integer $age
     *
     * @return AgePegi
     */
    public function setAge($age)
    {
        $this->age = $age;

        return $this;
    }

    /**
     * Get age
     *
     * @return int
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * Set image
     *
     * @param string $image
     *
     * @return AgePegi
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
     * @return AgePegi
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
     * Constructor
     */
    public function __construct()
    {
        $this->jeuVideos = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add jeuVideo
     *
     * @param \JC\SortieJeuVideoBundle\Entity\JeuVideo $jeuVideo
     *
     * @return AgePegi
     */
    public function addJeuVideo(\JC\SortieJeuVideoBundle\Entity\JeuVideo $jeuVideo)
    {
        $this->jeuVideos[] = $jeuVideo;

        return $this;
    }

    /**
     * Remove jeuVideo
     *
     * @param \JC\SortieJeuVideoBundle\Entity\JeuVideo $jeuVideo
     */
    public function removeJeuVideo(\JC\SortieJeuVideoBundle\Entity\JeuVideo $jeuVideo)
    {
        $this->jeuVideos->removeElement($jeuVideo);
    }

    /**
     * Get jeuVideos
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getJeuVideos()
    {
        return $this->jeuVideos;
    }
}
