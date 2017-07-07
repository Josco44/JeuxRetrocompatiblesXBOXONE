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
        $themeJeu01->setNom('1ère guerre mondiale');
        $themeJeu01->setNoOrdre(1);
        $manager->persist($themeJeu01);

        $themeJeu02 = new ThemeJeu();
        $themeJeu02->setNom('Amérique du nord');
        $themeJeu02->setNoOrdre(5);
        $manager->persist($themeJeu02);

        $themeJeu03 = new ThemeJeu();
        $themeJeu03->setNom('Animation');
        $themeJeu03->setNoOrdre(10);
        $manager->persist($themeJeu03);

        $themeJeu04 = new ThemeJeu();
        $themeJeu04->setNom('cinéma');
        $themeJeu04->setNoOrdre(15);
        $manager->persist($themeJeu04);

        $themeJeu05 = new ThemeJeu();
        $themeJeu05->setNom('comics');
        $themeJeu05->setNoOrdre(20);
        $manager->persist($themeJeu05);

        $themeJeu06 = new ThemeJeu();
        $themeJeu06->setNom('Contemporain');
        $themeJeu06->setNoOrdre(25);
        $manager->persist($themeJeu06);

        $themeJeu07 = new ThemeJeu();
        $themeJeu07->setNom('Cyberpunk');
        $themeJeu07->setNoOrdre(30);
        $manager->persist($themeJeu07);

        $themeJeu08 = new ThemeJeu();
        $themeJeu08->setNom('Dinosaures');
        $themeJeu08->setNoOrdre(35);
        $manager->persist($themeJeu08);

        $themeJeu09 = new ThemeJeu();
        $themeJeu09->setNom('Dragons');
        $themeJeu09->setNoOrdre(40);
        $manager->persist($themeJeu09);

        $themeJeu10 = new ThemeJeu();
        $themeJeu10->setNom('Espace');
        $themeJeu10->setNoOrdre(45);
        $manager->persist($themeJeu10);

        $themeJeu11 = new ThemeJeu();
        $themeJeu11->setNom('Extraterrestres');
        $themeJeu11->setNoOrdre(50);
        $manager->persist($themeJeu11);

        $themeJeu12 = new ThemeJeu();
        $themeJeu12->setNom('Fantastique');
        $themeJeu12->setNoOrdre(55);
        $manager->persist($themeJeu12);

        $themeJeu13 = new ThemeJeu();
        $themeJeu13->setNom('Football');
        $themeJeu13->setNoOrdre(60);
        $manager->persist($themeJeu13);

        $themeJeu14 = new ThemeJeu();
        $themeJeu14->setNom('Futuriste');
        $themeJeu14->setNoOrdre(65);
        $manager->persist($themeJeu14);

        $themeJeu15 = new ThemeJeu();
        $themeJeu15->setNom('Heroic Fantasy');
        $themeJeu15->setNoOrdre(70);
        $manager->persist($themeJeu15);

        $themeJeu16 = new ThemeJeu();
        $themeJeu16->setNom('Historique');
        $themeJeu16->setNoOrdre(75);
        $manager->persist($themeJeu16);

        $themeJeu17 = new ThemeJeu();
        $themeJeu17->setNom('Horreur');
        $themeJeu17->setNoOrdre(80);
        $manager->persist($themeJeu17);

        $themeJeu18 = new ThemeJeu();
        $themeJeu18->setNom('Mangas');
        $themeJeu18->setNoOrdre(85);
        $manager->persist($themeJeu18);

        $themeJeu19 = new ThemeJeu();
        $themeJeu19->setNom('Mecha');
        $themeJeu19->setNoOrdre(90);
        $manager->persist($themeJeu19);

        $themeJeu20 = new ThemeJeu();
        $themeJeu20->setNom('Moyen-age');
        $themeJeu20->setNoOrdre(95);
        $manager->persist($themeJeu20);

        $themeJeu21 = new ThemeJeu();
        $themeJeu21->setNom('Monstres');
        $themeJeu21->setNoOrdre(100);
        $manager->persist($themeJeu21);

        $themeJeu22 = new ThemeJeu();
        $themeJeu22->setNom('Musique');
        $themeJeu22->setNoOrdre(105);
        $manager->persist($themeJeu22);

        $themeJeu23 = new ThemeJeu();
        $themeJeu23->setNom('Ninjas');
        $themeJeu23->setNoOrdre(110);
        $manager->persist($themeJeu23);

        $themeJeu24 = new ThemeJeu();
        $themeJeu24->setNom('Post-apocalyptique');
        $themeJeu24->setNoOrdre(115);
        $manager->persist($themeJeu24);

        $themeJeu25 = new ThemeJeu();
        $themeJeu25->setNom('Rallye');
        $themeJeu25->setNoOrdre(120);
        $manager->persist($themeJeu25);

        $themeJeu26 = new ThemeJeu();
        $themeJeu26->setNom('Robots');
        $themeJeu26->setNoOrdre(125);
        $manager->persist($themeJeu26);

        $themeJeu27 = new ThemeJeu();
        $themeJeu27->setNom('Science-fiction');
        $themeJeu27->setNoOrdre(130);
        $manager->persist($themeJeu27);

        $themeJeu28 = new ThemeJeu();
        $themeJeu28->setNom('Série TV');
        $themeJeu28->setNoOrdre(135);
        $manager->persist($themeJeu28);

        $themeJeu29 = new ThemeJeu();
        $themeJeu29->setNom('Steampunk');
        $themeJeu29->setNoOrdre(140);
        $manager->persist($themeJeu29);

        $themeJeu30 = new ThemeJeu();
        $themeJeu30->setNom('Super-héros');
        $themeJeu30->setNoOrdre(145);
        $manager->persist($themeJeu30);

        $themeJeu31 = new ThemeJeu();
        $themeJeu31->setNom('Western');
        $themeJeu31->setNoOrdre(150);
        $manager->persist($themeJeu31);

        $themeJeu32 = new ThemeJeu();
        $themeJeu32->setNom('Zombies');
        $themeJeu32->setNoOrdre(155);
        $manager->persist($themeJeu32);

        $manager->flush();

        $this->addReference('themeJeu01', $themeJeu01);
        $this->addReference('themeJeu02', $themeJeu02);
        $this->addReference('themeJeu03', $themeJeu03);
        $this->addReference('themeJeu04', $themeJeu04);
        $this->addReference('themeJeu05', $themeJeu05);
        $this->addReference('themeJeu06', $themeJeu06);
        $this->addReference('themeJeu07', $themeJeu07);
        $this->addReference('themeJeu08', $themeJeu08);
        $this->addReference('themeJeu09', $themeJeu09);
        $this->addReference('themeJeu10', $themeJeu10);
        $this->addReference('themeJeu11', $themeJeu11);
        $this->addReference('themeJeu12', $themeJeu12);
        $this->addReference('themeJeu13', $themeJeu13);
        $this->addReference('themeJeu14', $themeJeu14);
        $this->addReference('themeJeu15', $themeJeu15);
        $this->addReference('themeJeu16', $themeJeu16);
        $this->addReference('themeJeu17', $themeJeu17);
        $this->addReference('themeJeu18', $themeJeu18);
        $this->addReference('themeJeu19', $themeJeu19);
        $this->addReference('themeJeu20', $themeJeu20);
        $this->addReference('themeJeu21', $themeJeu21);
        $this->addReference('themeJeu22', $themeJeu22);
        $this->addReference('themeJeu23', $themeJeu23);
        $this->addReference('themeJeu24', $themeJeu24);
        $this->addReference('themeJeu25', $themeJeu25);
        $this->addReference('themeJeu26', $themeJeu26);
        $this->addReference('themeJeu27', $themeJeu27);
        $this->addReference('themeJeu28', $themeJeu28);
        $this->addReference('themeJeu29', $themeJeu29);
        $this->addReference('themeJeu30', $themeJeu30);
        $this->addReference('themeJeu31', $themeJeu31);
        $this->addReference('themeJeu32', $themeJeu32);
    }

    public function getOrder()
    {
        // the order in which fixtures will be loaded
        return 5;
    }

 
}