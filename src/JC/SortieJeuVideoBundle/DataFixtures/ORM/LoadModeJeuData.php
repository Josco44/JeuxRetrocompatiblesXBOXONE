<?php
 
namespace JC\SortieJeuVideoBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture; 
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use JC\SortieJeuVideoBundle\Entity\ModeJeu;
 
class LoadModeJeuData extends AbstractFixture implements OrderedFixtureInterface {
 
    public function load(ObjectManager $manager) 
    {
        $modeJeu01 = new ModeJeu();
        $modeJeu01->setNom('Jouable en solo');
        $modeJeu01->setNoOrdre(1);
        $manager->persist($modeJeu01);

        $modeJeu02 = new ModeJeu();
        $modeJeu02->setNom('Multi en compétitif');
        $modeJeu02->setNoOrdre(5);
        $manager->persist($modeJeu02);

        $modeJeu03 = new ModeJeu();
        $modeJeu03->setNom('Multi en ligne');
        $modeJeu03->setNoOrdre(10);
        $manager->persist($modeJeu03);

        $modeJeu04 = new ModeJeu();
        $modeJeu04->setNom('Multi en local');
        $modeJeu04->setNoOrdre(15);
        $manager->persist($modeJeu04);

        $modeJeu05 = new ModeJeu();
        $modeJeu05->setNom('Multi sur le même écran');
        $modeJeu05->setNoOrdre(20);
        $manager->persist($modeJeu05);

        $manager->flush();

        $this->addReference('modeJeu01', $modeJeu01);
        $this->addReference('modeJeu02', $modeJeu02);
        $this->addReference('modeJeu03', $modeJeu03);
        $this->addReference('modeJeu04', $modeJeu04);
        $this->addReference('modeJeu05', $modeJeu05);

    }

    public function getOrder()
    {
        // the order in which fixtures will be loaded
        return 8;
    }
 
}