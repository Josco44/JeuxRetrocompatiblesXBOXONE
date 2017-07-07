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
        $support01->setNom("3DS");
        $support01->setNoOrdre(8);
        $support01->setDatesortie(new \DateTime('2011-03-25'));
        $support01->setDescription("Nintendo 3DS");
        $support01->setPublished('1');
        $manager->persist($support01);

        $support02 = new Support();
        $support02->setNom("Android");
        $support02->setNoOrdre(8);
        $support02->setDatesortie(new \DateTime('2007-06-01'));
        $support02->setDescription("Android");
        $support02->setPublished('1');
        $manager->persist($support02);

        $support03 = new Support();
        $support03->setNom("DS");
        $support03->setNoOrdre(8);
        $support03->setDatesortie(new \DateTime('2005-03-11'));
        $support03->setDescription("Nintendo DS");
        $support03->setPublished('1');
        $manager->persist($support03);

        $support04 = new Support();
        $support04->setNom('iOS');
        $support04->setNoOrdre(9);
        $support04->setDatesortie(new \DateTime('2008-06-03'));
        $support04->setDescription('iOS');
        $support04->setPublished('1');
        $manager->persist($support04);

        $support05 = new Support();
        $support05->setNom('Mac');
        $support05->setNoOrdre(10);
        $support05->setDatesortie(new \DateTime('1984-01-24'));
        $support05->setDescription('Mac');
        $support05->setPublished('1');
        $manager->persist($support05);

        $support06 = new Support();
        $support06->setNom('PC');
        $support06->setNoOrdre(10);
        $support06->setDatesortie(new \DateTime('1981-01-01'));
        $support06->setDescription('PC');
        $support06->setPublished('1');
        $manager->persist($support06);

        $support07 = new Support();
        $support07->setNom("PlayStation 3");
        $support07->setNoOrdre(5);
        $support07->setDatesortie(new \DateTime('2007-03-23'));
        $support07->setDescription("PlayStation 3");
        $support07->setPublished('1');
        $manager->persist($support07);

        $support08 = new Support();
        $support08->setNom('PlayStation 4');
        $support08->setNoOrdre(1);
        $support08->setDatesortie(new \DateTime('2013-11-29'));
        $support08->setDescription('PlayStation 4');
        $support08->setPublished('1');
        $manager->persist($support08);

        $support09 = new Support();
        $support09->setNom('PlayStation Vita');
        $support09->setNoOrdre(1);
        $support09->setDatesortie(new \DateTime('2012-02-22'));
        $support09->setDescription('PlayStation Vita');
        $support09->setPublished('1');
        $manager->persist($support09);

        $support10 = new Support();
        $support10->setNom("Switch");
        $support10->setNoOrdre(3);
        $support10->setDatesortie(new \DateTime('2017-03-03'));
        $support10->setDescription("Nintendo Switch");
        $support10->setPublished('1');
        $manager->persist($support10);

        $support11 = new Support();
        $support11->setNom("Xbox 360");
        $support11->setNoOrdre(6);
        $support11->setDatesortie(new \DateTime('2005-12-02'));
        $support11->setDescription("Xbox 360");
        $support11->setPublished('1');
        $manager->persist($support11);

        $support12 = new Support();
        $support12->setNom('Xbox One');
        $support12->setNoOrdre(2);
        $support12->setDatesortie(new \DateTime('2013-11-22'));
        $support12->setDescription('Xbox One');
        $support12->setPublished('1');
        $manager->persist($support12);

        $support13 = new Support();
        $support13->setNom('Web');
        $support13->setNoOrdre(2);
        $support13->setDatesortie(new \DateTime('1990-01-01'));
        $support13->setDescription('Web');
        $support13->setPublished('1');
        $manager->persist($support13);

        $support14 = new Support();
        $support14->setNom('Wii');
        $support14->setNoOrdre(7);
        $support14->setDatesortie(new \DateTime('2006-12-08'));
        $support14->setDescription('Nintendo Wii');
        $support14->setPublished('1');
        $manager->persist($support14);

        $support15 = new Support();
        $support15->setNom("Wii U");
        $support15->setNoOrdre(4);
        $support15->setDatesortie(new \DateTime('2012-11-30'));
        $support15->setDescription("Nintendo Wii U");
        $support15->setPublished('1');
        $manager->persist($support15);

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
        $this->addReference('support11', $support11);
        $this->addReference('support12', $support12);
        $this->addReference('support13', $support13);
        $this->addReference('support14', $support14);
        $this->addReference('support15', $support15);

    }

    public function getOrder()
    {
        // the order in which fixtures will be loaded
        return 2;
    }
 
}