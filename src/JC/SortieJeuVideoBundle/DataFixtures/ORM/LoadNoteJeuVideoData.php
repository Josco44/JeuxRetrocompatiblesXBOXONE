<?php
 
namespace JC\SortieJeuVideoBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture; 
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use JC\SortieJeuVideoBundle\Entity\NoteJeuVideo;
 
class LoadNoteJeuVideoData extends AbstractFixture implements OrderedFixtureInterface {
 
    public function load(ObjectManager $manager) 
    {
        /*
        $noteJeuVideo01 = new NoteJeuVideo();
        $noteJeuVideo01->setNote(90);
        $noteJeuVideo01->setSortieJeuVideo($this->getReference('sortieJeuVideo01'));
        $noteJeuVideo01->setTiers($this->getReference('tiers03'));
        $manager->persist($noteJeuVideo01);

        $noteJeuVideo02 = new NoteJeuVideo();
        $noteJeuVideo02->setNote(80);
        $noteJeuVideo02->setSortieJeuVideo($this->getReference('sortieJeuVideo01'));
        $noteJeuVideo02->setTiers($this->getReference('tiers04'));
        $manager->persist($noteJeuVideo02);

        $noteJeuVideo03 = new NoteJeuVideo();
        $noteJeuVideo03->setNote(80);
        $noteJeuVideo03->setSortieJeuVideo($this->getReference('sortieJeuVideo01'));
        $noteJeuVideo03->setTiers($this->getReference('tiers05'));
        $manager->persist($noteJeuVideo03);

        $manager->flush();
        */
    }

    public function getOrder()
    {
        // the order in which fixtures will be loaded
        return 12;
    }
 
}