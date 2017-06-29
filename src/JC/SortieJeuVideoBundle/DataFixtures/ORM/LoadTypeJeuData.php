<?php
 
namespace JC\SortieJeuVideoBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture; 
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use JC\SortieJeuVideoBundle\Entity\TypeJeu;
 
class LoadTypeJeuData extends AbstractFixture implements OrderedFixtureInterface {
 
    public function load(ObjectManager $manager) 
    {
        $typeJeu01 = new TypeJeu();
        $typeJeu01->setNom('Action');
        $typeJeu01->setNoOrdre(1);
        $manager->persist($typeJeu01);

        $typeJeu02 = new TypeJeu();
        $typeJeu02->setNom('Aventure');
        $typeJeu02->setNoOrdre(2);
        $manager->persist($typeJeu02);

        $typeJeu03 = new TypeJeu();
        $typeJeu03->setNom('Sport');
        $typeJeu03->setNoOrdre(3);
        $manager->persist($typeJeu03);

        $typeJeu04 = new TypeJeu();
        $typeJeu04->setNom('Plate-Forme');
        $typeJeu04->setNoOrdre(4);
        $manager->persist($typeJeu04);

        $typeJeu05 = new TypeJeu();
        $typeJeu05->setNom('RPG');
        $typeJeu05->setNoOrdre(5);
        $manager->persist($typeJeu05);

        $typeJeu06 = new TypeJeu();
        $typeJeu06->setNom('Shooter');
        $typeJeu06->setNoOrdre(6);
        $manager->persist($typeJeu06);

        $typeJeu07 = new TypeJeu();
        $typeJeu07->setNom('Course');
        $typeJeu07->setNoOrdre(7);
        $manager->persist($typeJeu07);

        $typeJeu08 = new TypeJeu();
        $typeJeu08->setNom('Stategie');
        $typeJeu08->setNoOrdre(8);
        $manager->persist($typeJeu08);

        $typeJeu09 = new TypeJeu();
        $typeJeu09->setNom('FPS');
        $typeJeu09->setNoOrdre(9);
        $manager->persist($typeJeu09);

        $typeJeu10 = new TypeJeu();
        $typeJeu10->setNom('Gestion');
        $typeJeu10->setNoOrdre(10);
        $manager->persist($typeJeu10);

        $typeJeu11 = new TypeJeu();
        $typeJeu11->setNom('Combat');
        $typeJeu11->setNoOrdre(11);
        $manager->persist($typeJeu11);

        $typeJeu12 = new TypeJeu();
        $typeJeu12->setNom('Simulation');
        $typeJeu12->setNoOrdre(12);
        $manager->persist($typeJeu12);

        $typeJeu13 = new TypeJeu();
        $typeJeu13->setNom("Beat'em All");
        $typeJeu13->setNoOrdre(13);
        $manager->persist($typeJeu13);

        $typeJeu14 = new TypeJeu();
        $typeJeu14->setNom('Puzzle-Game');
        $typeJeu14->setNoOrdre(14);
        $manager->persist($typeJeu14);

        $typeJeu15 = new TypeJeu();
        $typeJeu15->setNom('Autres');
        $typeJeu15->setNoOrdre(15);
        $manager->persist($typeJeu15);

        $typeJeu16 = new TypeJeu();
        $typeJeu16->setNom("Point'n Click");
        $typeJeu16->setNoOrdre(16);
        $manager->persist($typeJeu16);

        $typeJeu17 = new TypeJeu();
        $typeJeu17->setNom('Party Game');
        $typeJeu17->setNoOrdre(17);
        $manager->persist($typeJeu17);

        $typeJeu18 = new TypeJeu();
        $typeJeu18->setNom('Rythme');
        $typeJeu18->setNoOrdre(18);
        $manager->persist($typeJeu18);

        $typeJeu19 = new TypeJeu();
        $typeJeu19->setNom('Survival-Horror');
        $typeJeu19->setNoOrdre(19);
        $manager->persist($typeJeu19);

        $typeJeu20 = new TypeJeu();
        $typeJeu20->setNom('Tactique');
        $typeJeu20->setNoOrdre(20);
        $manager->persist($typeJeu20);

        $typeJeu21 = new TypeJeu();
        $typeJeu21->setNom("Shoot'n up");
        $typeJeu21->setNoOrdre(21);
        $manager->persist($typeJeu21);

        $typeJeu22 = new TypeJeu();
        $typeJeu22->setNom('Adresse');
        $typeJeu22->setNoOrdre(22);
        $manager->persist($typeJeu22);

        $typeJeu23 = new TypeJeu();
        $typeJeu23->setNom('MMO');
        $typeJeu23->setNoOrdre(23);
        $manager->persist($typeJeu23);

        $typeJeu24 = new TypeJeu();
        $typeJeu24->setNom('Infiltration');
        $typeJeu24->setNoOrdre(24);
        $manager->persist($typeJeu24);

        $typeJeu25 = new TypeJeu();
        $typeJeu25->setNom('Tir');
        $typeJeu25->setNoOrdre(25);
        $manager->persist($typeJeu25);

        $typeJeu26 = new TypeJeu();
        $typeJeu26->setNom('Compilation');
        $typeJeu26->setNoOrdre(26);
        $manager->persist($typeJeu26);

        $typeJeu27 = new TypeJeu();
        $typeJeu27->setNom('Jeux de cartes');
        $typeJeu27->setNoOrdre(27);
        $manager->persist($typeJeu27);

        $typeJeu28 = new TypeJeu();
        $typeJeu28->setNom('War Game');
        $typeJeu28->setNoOrdre(28);
        $manager->persist($typeJeu28);

        $typeJeu29 = new TypeJeu();
        $typeJeu29->setNom('Jeu de société');
        $typeJeu29->setNoOrdre(29);
        $manager->persist($typeJeu29);

        $typeJeu30 = new TypeJeu();
        $typeJeu30->setNom('Ludo-Educatif');
        $typeJeu30->setNoOrdre(30);
        $manager->persist($typeJeu30);

        $typeJeu31 = new TypeJeu();
        $typeJeu31->setNom('Action RPG');
        $typeJeu31->setNoOrdre(31);
        $manager->persist($typeJeu31);

        $typeJeu32 = new TypeJeu();
        $typeJeu32->setNom('Coaching');
        $typeJeu32->setNoOrdre(32);
        $manager->persist($typeJeu32);

		$typeJeu33 = new TypeJeu();
        $typeJeu33->setNom('Création');
        $typeJeu33->setNoOrdre(33);
        $manager->persist($typeJeu33);

        $typeJeu34 = new TypeJeu();
        $typeJeu34->setNom('Flipper');
        $typeJeu34->setNoOrdre(34);
        $manager->persist($typeJeu34);

        $typeJeu35 = new TypeJeu();
        $typeJeu35->setNom('Runner');
        $typeJeu35->setNoOrdre(35);
        $manager->persist($typeJeu35);

        $typeJeu36 = new TypeJeu();
        $typeJeu36->setNom('Open World');
        $typeJeu36->setNoOrdre(36);
        $manager->persist($typeJeu36);

        $typeJeu37 = new TypeJeu();
        $typeJeu37->setNom('Reflexion');
        $typeJeu37->setNoOrdre(37);
        $manager->persist($typeJeu37);


        $manager->flush();

        $this->addReference('typeJeu01', $typeJeu01);
        $this->addReference('typeJeu02', $typeJeu02);
        $this->addReference('typeJeu03', $typeJeu03);
        $this->addReference('typeJeu04', $typeJeu04);
        $this->addReference('typeJeu05', $typeJeu05);
        $this->addReference('typeJeu06', $typeJeu06);
        $this->addReference('typeJeu07', $typeJeu07);
        $this->addReference('typeJeu08', $typeJeu08);
        $this->addReference('typeJeu09', $typeJeu09);
        $this->addReference('typeJeu10', $typeJeu10);
        $this->addReference('typeJeu11', $typeJeu11);
        $this->addReference('typeJeu12', $typeJeu12);
        $this->addReference('typeJeu13', $typeJeu13);
        $this->addReference('typeJeu14', $typeJeu14);
        $this->addReference('typeJeu15', $typeJeu15);
        $this->addReference('typeJeu16', $typeJeu16);
        $this->addReference('typeJeu17', $typeJeu17);
        $this->addReference('typeJeu18', $typeJeu18);
        $this->addReference('typeJeu19', $typeJeu19);
        $this->addReference('typeJeu20', $typeJeu20);
        $this->addReference('typeJeu21', $typeJeu21);
        $this->addReference('typeJeu22', $typeJeu22);
        $this->addReference('typeJeu23', $typeJeu23);
        $this->addReference('typeJeu24', $typeJeu24);
        $this->addReference('typeJeu25', $typeJeu25);
        $this->addReference('typeJeu26', $typeJeu26);
        $this->addReference('typeJeu27', $typeJeu27);
        $this->addReference('typeJeu28', $typeJeu28);
        $this->addReference('typeJeu29', $typeJeu29);
        $this->addReference('typeJeu30', $typeJeu30);
        $this->addReference('typeJeu31', $typeJeu31);
        $this->addReference('typeJeu32', $typeJeu32);
        $this->addReference('typeJeu33', $typeJeu33);
        $this->addReference('typeJeu34', $typeJeu34);
        $this->addReference('typeJeu35', $typeJeu35);
        $this->addReference('typeJeu36', $typeJeu36);
        $this->addReference('typeJeu37', $typeJeu37);
    }

    public function getOrder()
    {
        // the order in which fixtures will be loaded
        return 4;
    }

}