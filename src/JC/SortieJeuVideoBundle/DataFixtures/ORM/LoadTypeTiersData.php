<?php
 
namespace JC\SortieJeuVideoBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture; 
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use JC\SortieJeuVideoBundle\Entity\TypeTiers;
 
class LoadTypeTiersData extends AbstractFixture implements OrderedFixtureInterface {
 
    public function load(ObjectManager $manager) 
    {
        $typeTiers01 = new TypeTiers();
        $typeTiers01->setNom('Constructeur');
        $manager->persist($typeTiers01);

        $typeTiers02 = new TypeTiers();
        $typeTiers02->setNom('Editeur');
        $manager->persist($typeTiers02);

        $typeTiers03 = new TypeTiers();
        $typeTiers03->setNom('Developpeur');
        $manager->persist($typeTiers03);

        $typeTiers04 = new TypeTiers();
        $typeTiers04->setNom('Site jeux video');
        $manager->persist($typeTiers04);

        $manager->flush();

        $this->addReference('typeTiers01', $typeTiers01);
        $this->addReference('typeTiers02', $typeTiers02);
        $this->addReference('typeTiers03', $typeTiers03);
        $this->addReference('typeTiers04', $typeTiers04);
    }

    public function getOrder()
    {
        // the order in which fixtures will be loaded
        return 3;
    }

 
}