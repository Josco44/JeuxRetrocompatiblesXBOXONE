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

        $manager->flush();

        $this->addReference('themeJeu01', $themeJeu01);
    }

    public function getOrder()
    {
        // the order in which fixtures will be loaded
        return 5;
    }

 
}