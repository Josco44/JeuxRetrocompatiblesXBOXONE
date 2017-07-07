<?php
 
namespace JC\SortieJeuVideoBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture; 
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use JC\SortieJeuVideoBundle\Entity\SortieJeuVideo;
 
class LoadSortieJeuVideoData extends AbstractFixture implements OrderedFixtureInterface {
 
    public function load(ObjectManager $manager) 
    {
        /*
        $sortieJeuVideo01 = new SortieJeuVideo();
        $sortieJeuVideo01->setDateSortie(new \DateTime('2010-11-17')); 
        $sortieJeuVideo01->setJeuVideo($this->getReference('jeuVideo01')); 
        $sortieJeuVideo01->setSupport($this->getReference('support06'));
        $sortieJeuVideo01->setImage('AssassinsCreedBrotherHood.png');
        $sortieJeuVideo01->setUpdatedAt(new \DateTime('now'));
        $sortieJeuVideo01->setRetroXboxOne('1'); 
        $sortieJeuVideo01->setdateSortieRetroXboxOne(new \DateTime('2017-03-24'));
        $manager->persist($sortieJeuVideo01);

        $sortieJeuVideo02 = new SortieJeuVideo();
        $sortieJeuVideo02->setDateSortie(new \DateTime('2006-03-24')); 
        $sortieJeuVideo02->setJeuVideo($this->getReference('jeuVideo02')); 
        $sortieJeuVideo02->setSupport($this->getReference('support06'));
        $sortieJeuVideo02->setImage('Oblivion.jpg');
        $sortieJeuVideo02->setUpdatedAt(new \DateTime('now'));
        $sortieJeuVideo02->setRetroXboxOne('1'); 
        $sortieJeuVideo02->setdateSortieRetroXboxOne(new \DateTime('2016-11-29'));
        $manager->persist($sortieJeuVideo02);


        $manager->flush();

        $this->addReference('sortieJeuVideo01', $sortieJeuVideo01);
        $this->addReference('sortieJeuVideo02', $sortieJeuVideo02);
        */

    }

    public function getOrder()
    {
        // the order in which fixtures will be loaded
        return 11;
    }
 
}