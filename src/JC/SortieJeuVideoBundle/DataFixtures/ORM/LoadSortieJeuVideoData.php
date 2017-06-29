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
        $sortieJeuVideo01->setDateSortie(new \DateTime('2015-10-23')); 
        $sortieJeuVideo01->setJeuVideo($this->getReference('jeuVideo01')); 
        $sortieJeuVideo01->setSupport($this->getReference('support01'));
        $sortieJeuVideo01->setUpdatedAt(new \DateTime('2017-06-16')); 
        $manager->persist($sortieJeuVideo01);

        $sortieJeuVideo02 = new SortieJeuVideo();
        $sortieJeuVideo02->setDateSortie(new \DateTime('2015-10-23')); 
        $sortieJeuVideo02->setJeuVideo($this->getReference('jeuVideo01')); 
        $sortieJeuVideo02->setSupport($this->getReference('support02'));
        $sortieJeuVideo02->setUpdatedAt(new \DateTime('2017-06-16')); 
        $manager->persist($sortieJeuVideo02);

        $sortieJeuVideo03 = new SortieJeuVideo();
        $sortieJeuVideo03->setDateSortie(new \DateTime('2015-10-23')); 
        $sortieJeuVideo03->setJeuVideo($this->getReference('jeuVideo01')); 
        $sortieJeuVideo03->setSupport($this->getReference('support10'));
        $sortieJeuVideo03->setUpdatedAt(new \DateTime('2017-06-16')); 
        $manager->persist($sortieJeuVideo03);

        $manager->flush();

    }

    public function getOrder()
    {
        // the order in which fixtures will be loaded
        return 7;
    }
 
}