<?php
 
namespace JC\SortieJeuVideoBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture; 
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use JC\SortieJeuVideoBundle\Entity\SortieJeuVideo;
 
class LoadSortieJeuVideoData extends AbstractFixture implements OrderedFixtureInterface {
 
    public function load(ObjectManager $manager) 
    {
        $sortieJeuVideo01 = new SortieJeuVideo();
        $sortieJeuVideo01->setDateSortie(new \DateTime('2010-11-17')); 
        $sortieJeuVideo01->setJeuVideo($this->getReference('jeuVideo01')); 
        $sortieJeuVideo01->setSupport($this->getReference('support06'));
        $sortieJeuVideo01->setImage('AssassinsCreedBrotherHood.png');
        $sortieJeuVideo01->setUpdatedAt(new \DateTime('now'));
        $sortieJeuVideo01->setRetroXboxOne('1'); 
        $manager->persist($sortieJeuVideo01);

        $manager->flush();

        $this->addReference('sortieJeuVideo01', $sortieJeuVideo01);

    }

    public function getOrder()
    {
        // the order in which fixtures will be loaded
        return 10;
    }
 
}