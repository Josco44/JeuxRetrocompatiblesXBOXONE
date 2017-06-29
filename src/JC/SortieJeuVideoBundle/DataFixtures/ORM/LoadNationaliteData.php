<?php
 
namespace JC\SortieJeuVideoBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture; 
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use JC\SortieJeuVideoBundle\Entity\Nationalite;
 
class LoadNationaliteData extends AbstractFixture implements OrderedFixtureInterface {
 
    public function load(ObjectManager $manager) 
    {
        $nationalite01 = new Nationalite();
        $nationalite01->setNom('France');
        $manager->persist($nationalite01);

        $nationalite02 = new Nationalite();
        $nationalite02->setNom('Etats-Unis');
        $manager->persist($nationalite02);

        $nationalite03 = new Nationalite();
        $nationalite03->setNom('Japon');
        $manager->persist($nationalite03);

        $nationalite04 = new Nationalite();
        $nationalite04->setNom('Canada');
        $manager->persist($nationalite04);

        $manager->flush();

        $this->addReference('nationalite01', $nationalite01);
        $this->addReference('nationalite02', $nationalite02);
        $this->addReference('nationalite03', $nationalite03);
        $this->addReference('nationalite04', $nationalite04);
    }

    public function getOrder()
    {
        // the order in which fixtures will be loaded
        return 1;
    }
 
}