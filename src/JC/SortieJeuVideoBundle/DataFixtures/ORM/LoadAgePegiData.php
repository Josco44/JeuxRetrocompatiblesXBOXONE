<?php
 
namespace JC\SortieJeuVideoBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture; 
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use JC\SortieJeuVideoBundle\Entity\AgePegi;
 
class LoadAgePegiData extends AbstractFixture implements OrderedFixtureInterface {
 
    public function load(ObjectManager $manager) 
    {
        $agePegi01 = new AgePegi();
        $agePegi01->setAge(3);
        $agePegi01->setImage('3.gif');
        $agePegi01->setUpdatedAt(new \DateTime('now'));
        $manager->persist($agePegi01);

        $agePegi02 = new AgePegi();
        $agePegi02->setAge(7);
        $agePegi02->setImage('7.gif');
        $agePegi02->setUpdatedAt(new \DateTime('now'));
        $manager->persist($agePegi02);

        $agePegi03 = new AgePegi();
        $agePegi03->setAge(12);
        $agePegi03->setImage('12.gif');
        $agePegi03->setUpdatedAt(new \DateTime('now'));
        $manager->persist($agePegi03);

        $agePegi04 = new AgePegi();
        $agePegi04->setAge(16);
        $agePegi04->setImage('16.gif');
        $agePegi04->setUpdatedAt(new \DateTime('now'));
        $manager->persist($agePegi04);

        $agePegi05 = new AgePegi();
        $agePegi05->setAge(18);
        $agePegi05->setImage('18.gif');
        $agePegi05->setUpdatedAt(new \DateTime('now'));
        $manager->persist($agePegi05);

        $manager->flush();

        $this->addReference('agePegi01', $agePegi01);
        $this->addReference('agePegi02', $agePegi02);
        $this->addReference('agePegi03', $agePegi03);
        $this->addReference('agePegi04', $agePegi04);
        $this->addReference('agePegi05', $agePegi05);

    }

    public function getOrder()
    {
        // the order in which fixtures will be loaded
        return 6;
    }
 
}