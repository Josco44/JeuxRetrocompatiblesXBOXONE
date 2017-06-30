<?php
 
namespace JC\SortieJeuVideoBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture; 
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use JC\SortieJeuVideoBundle\Entity\JeuVideo;
 
class LoadJeuVideoData extends AbstractFixture implements OrderedFixtureInterface {
 
    public function load(ObjectManager $manager) 
    {
        $jeuVideo01 = new JeuVideo();
        $jeuVideo01->setNom("Assassin's Creed Brotherhood");
        $jeuVideo01->setDescription("Jeu d'action-aventure en monde ouvert, Assassin's Creed : Brotherhood vous permet d'incarner le Maitre Assassin Ezio à Rome, dans sa lutte contre l'Ordre des Templiers. Dans ce troisième opus de la série, l'esprit du jeu est conservé, et le multijoueur prend désormais une place importante notamment à travers plusieurs modes proposés. Chaque personnage pouvant être incarné possède armes et attaques spécifiques à son style de gameplay.");
        $jeuVideo01->setPublished('1'); 
        $jeuVideo01->addTypesJeu($this->getReference('typeJeu01'));
        $jeuVideo01->addTypesJeu($this->getReference('typeJeu02')); 
        $jeuVideo01->addThemesJeu($this->getReference('themeJeu01'));
        $jeuVideo01->setAgePegi($this->getReference('agePegi01'));
        $jeuVideo01->addClassificationsPegi($this->getReference('classificationPegi01'));
        $manager->persist($jeuVideo01);

        $manager->flush();

        $this->addReference('jeuVideo01', $jeuVideo01);

    }

    public function getOrder()
    {
        // the order in which fixtures will be loaded
        return 9;
    }
 
}