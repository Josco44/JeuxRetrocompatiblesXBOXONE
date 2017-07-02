<?php
 
namespace JC\SortieJeuVideoBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture; 
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use JC\SortieJeuVideoBundle\Entity\ThemeJeu;
 
class LoadThemeJeuData extends AbstractFixture implements OrderedFixtureInterface {
 
    public function load(ObjectManager $manager) 
    {
        $themeJeu01 = new ThemeJeu();
        $themeJeu01->setNom('Historique');
        $themeJeu01->setNoOrdre(1);
        $manager->persist($themeJeu01);

        $themeJeu02 = new ThemeJeu();
        $themeJeu02->setNom('Fantastique');
        $themeJeu02->setNoOrdre(2);
        $manager->persist($themeJeu02);

        $themeJeu03 = new ThemeJeu();
        $themeJeu03->setNom('Heroic Fantasy');
        $themeJeu03->setNoOrdre(3);
        $manager->persist($themeJeu03);

        $manager->flush();

        $this->addReference('themeJeu01', $themeJeu01);
        $this->addReference('themeJeu02', $themeJeu02);
        $this->addReference('themeJeu03', $themeJeu03);
    }

    public function getOrder()
    {
        // the order in which fixtures will be loaded
        return 5;
    }

 
}