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
        $jeuVideo01->setNom("Assassin's Creed Syndicate");
        $jeuVideo01->setDescription("Prenant place dans le Londres de l'époque victorienne, Assassin's Creed Syndicate est un jeu d'action-aventure en monde ouvert. Parmi les nouveautés, on peut notamment citer la possibilité de se déplacer sur des éléments en mouvement (calèche par exemple).");
        $jeuVideo01->setPublished('1'); 
        $jeuVideo01->addTypesJeu($this->getReference('typeJeu01'));
        $jeuVideo01->addTypesJeu($this->getReference('typeJeu02')); 
        $jeuVideo01->addTypesJeu($this->getReference('typeJeu03'));  
        $manager->persist($jeuVideo01);

        $manager->flush();

        $this->addReference('jeuVideo01', $jeuVideo01);

    }

    public function getOrder()
    {
        // the order in which fixtures will be loaded
        return 6;
    }
 
}