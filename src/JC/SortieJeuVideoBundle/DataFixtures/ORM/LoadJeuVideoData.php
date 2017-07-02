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

        $jeuVideo02 = new JeuVideo();
        $jeuVideo02->setNom("The Elder Scrolls IV : Oblivion");
        $jeuVideo02->setDescription("The Elder Scrolls IV : Oblivion est un jeu de rôle sur Xbox 360. L'apparition grandissante et apocalyptique des portes d'Oblivion menace le sort de ce monde féérique. A vous de devenir le héros de tous et de partir à l'aventure pour accomplir les nombreuses quêtes que réserve le titre. Vous découvrirez des donjons et des trésors cachés sur la très vaste carte du soft. La progression suit une difficulté pleinement réglable et le jeu intègre un éditeur de niveaux très puissant.");
        $jeuVideo02->setPublished('1'); 
        $jeuVideo02->addTypesJeu($this->getReference('typeJeu05'));
        $jeuVideo02->addThemesJeu($this->getReference('themeJeu02'));
        $jeuVideo02->addThemesJeu($this->getReference('themeJeu03'));
        $jeuVideo02->setAgePegi($this->getReference('agePegi04'));
        $jeuVideo02->addClassificationsPegi($this->getReference('classificationPegi08'));
        $manager->persist($jeuVideo02);

        $manager->flush();

        $this->addReference('jeuVideo01', $jeuVideo01);
        $this->addReference('jeuVideo02', $jeuVideo02);

    }

    public function getOrder()
    {
        // the order in which fixtures will be loaded
        return 9;
    }
 
}