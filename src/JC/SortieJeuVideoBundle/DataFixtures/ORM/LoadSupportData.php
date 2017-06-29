<?php
 
namespace JC\SortieJeuVideoBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture; 
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use JC\SortieJeuVideoBundle\Entity\Support;
 
class LoadSupportData extends AbstractFixture implements OrderedFixtureInterface {
 
    public function load(ObjectManager $manager) 
    {
        $support01 = new Support();
        $support01->setNom('PS4');
        $support01->setNoOrdre(1);
        $support01->setDatesortie(new \DateTime('2013-11-29'));
        $support01->setDescription('PS4');
        $support01->setPublished('1');
        $manager->persist($support01);

        $support02 = new Support();
        $support02->setNom('XBOX ONE');
        $support02->setNoOrdre(2);
        $support02->setDatesortie(new \DateTime('2013-11-22'));
        $support02->setDescription('XBOX ONE');
        $support02->setPublished('1');
        $manager->persist($support02);

        $support03 = new Support();
        $support03->setNom('SWITCH');
        $support03->setNoOrdre(3);
        $support03->setDatesortie(new \DateTime('2017-03-03'));
        $support03->setDescription('SWITCH');
        $support03->setPublished('1');
        $manager->persist($support03);

        $support04 = new Support();
        $support04->setNom('WII U');
        $support04->setNoOrdre(4);
        $support04->setDatesortie(new \DateTime('2012-11-30'));
        $support04->setDescription('WII U');
        $support04->setPublished('1');
        $manager->persist($support04);

        $support05 = new Support();
        $support05->setNom('PS3');
        $support05->setNoOrdre(5);
        $support05->setDatesortie(new \DateTime('2007-03-23'));
        $support05->setDescription('PS3');
        $support05->setPublished('1');
        $manager->persist($support05);

        $support06 = new Support();
        $support06->setNom('XBOX 360');
        $support06->setNoOrdre(6);
        $support06->setDatesortie(new \DateTime('2005-12-02'));
        $support06->setDescription('XBOX 360');
        $support06->setPublished('1');
        $manager->persist($support06);

        $support07 = new Support();
        $support07->setNom('WII');
        $support07->setNoOrdre(7);
        $support07->setDatesortie(new \DateTime('2006-12-08'));
        $support07->setDescription('WII');
        $support07->setPublished('1');
        $manager->persist($support07);
        
        $support08 = new Support();
        $support08->setNom('ANDROID');
        $support08->setNoOrdre(8);
        $support08->setDatesortie(new \DateTime('2007-06-01'));
        $support08->setDescription('ANDROID');
        $support08->setPublished('1');
        $manager->persist($support08);

        $support09 = new Support();
        $support09->setNom('IOS');
        $support09->setNoOrdre(9);
        $support09->setDatesortie(new \DateTime('2008-06-03'));
        $support09->setDescription('IOS');
        $support09->setPublished('1');
        $manager->persist($support09);

        $support10 = new Support();
        $support10->setNom('PC');
        $support10->setNoOrdre(10);
        $support10->setDatesortie(new \DateTime('1981-01-01'));
        $support10->setDescription('PC');
        $support10->setPublished('1');
        $manager->persist($support10);

        $manager->flush();

        $this->addReference('support01', $support01);
        $this->addReference('support02', $support02);
        $this->addReference('support03', $support03);
        $this->addReference('support04', $support04);
        $this->addReference('support05', $support05);
        $this->addReference('support06', $support06);
        $this->addReference('support07', $support07);
        $this->addReference('support08', $support08);
        $this->addReference('support09', $support09);
        $this->addReference('support10', $support10);

    }

    public function getOrder()
    {
        // the order in which fixtures will be loaded
        return 2;
    }
 
}