<?php

namespace JC\SortieJeuVideoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * NoteJeuVideo
 *
 * @ORM\Table(name="note_jeu_video")
 * @ORM\Entity(repositoryClass="JC\SortieJeuVideoBundle\Repository\NoteJeuVideoRepository")
 */
class NoteJeuVideo
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
     * @ORM\Column(name="note", type="integer")
     */
    private $note;

    /**
     * @ORM\ManyToOne(targetEntity="JC\SortieJeuVideoBundle\Entity\SortieJeuVideo")
     * @ORM\JoinColumn(nullable=false)
     */
    private $sortieJeuVideo;

    /**
     * @ORM\ManyToOne(targetEntity="JC\SortieJeuVideoBundle\Entity\Tiers")
     * @ORM\JoinColumn(nullable=false)
     */
    private $tiers;            

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
     * Set note
     *
     * @param integer $note
     *
     * @return NoteJeuVideo
     */
    public function setNote($note)
    {
        $this->note = $note;

        return $this;
    }

    /**
     * Get note
     *
     * @return int
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Set sortieJeuVideo
     *
     * @param \JC\SortieJeuVideoBundle\Entity\SortieJeuVideo $sortieJeuVideo
     *
     * @return NoteJeuVideo
     */
    public function setSortieJeuVideo(\JC\SortieJeuVideoBundle\Entity\SortieJeuVideo $sortieJeuVideo)
    {
        $this->sortieJeuVideo = $sortieJeuVideo;

        return $this;
    }

    /**
     * Get sortieJeuVideo
     *
     * @return \JC\SortieJeuVideoBundle\Entity\SortieJeuVideo
     */
    public function getSortieJeuVideo()
    {
        return $this->sortieJeuVideo;
    }

    /**
     * Set tiers
     *
     * @param \JC\SortieJeuVideoBundle\Entity\Tiers $tiers
     *
     * @return NoteJeuVideo
     */
    public function setTiers(\JC\SortieJeuVideoBundle\Entity\Tiers $tiers)
    {
        $this->tiers = $tiers;

        return $this;
    }

    /**
     * Get tiers
     *
     * @return \JC\SortieJeuVideoBundle\Entity\Tiers
     */
    public function getTiers()
    {
        return $this->tiers;
    }
}
