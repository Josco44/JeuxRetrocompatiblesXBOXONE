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
        $typeJeu01->setNom('4X');
        $typeJeu01->setNoOrdre(1);
        $manager->persist($typeJeu01);

        $typeJeu02 = new TypeJeu();
        $typeJeu02->setNom('Action');
        $typeJeu02->setNoOrdre(5752);
        $manager->persist($typeJeu02);

        $typeJeu03 = new TypeJeu();
        $typeJeu03->setNom('Action RPG');
        $typeJeu03->setNoOrdre(63);
        $manager->persist($typeJeu03);

        $typeJeu04 = new TypeJeu();
        $typeJeu04->setNom('Adresse');
        $typeJeu04->setNoOrdre(248);
        $manager->persist($typeJeu04);

        $typeJeu05 = new TypeJeu();
        $typeJeu05->setNom('Autres');
        $typeJeu05->setNoOrdre(377);
        $manager->persist($typeJeu05);

        $typeJeu06 = new TypeJeu();
        $typeJeu06->setNom('Aventure');
        $typeJeu06->setNoOrdre(2346);
        $manager->persist($typeJeu06);

        $typeJeu07 = new TypeJeu();
        $typeJeu07->setNom("Beat'em All");
        $typeJeu07->setNoOrdre(505);
        $manager->persist($typeJeu07);

        $typeJeu08 = new TypeJeu();
        $typeJeu08->setNom('Casse briques');
        $typeJeu08->setNoOrdre(8);
        $manager->persist($typeJeu08);

        $typeJeu09 = new TypeJeu();
        $typeJeu09->setNom('City Builder');
        $typeJeu09->setNoOrdre(8);
        $manager->persist($typeJeu09);

        $typeJeu10 = new TypeJeu();
        $typeJeu10->setNom('Coaching');
        $typeJeu10->setNoOrdre(53);
        $manager->persist($typeJeu10);

        $typeJeu11 = new TypeJeu();
        $typeJeu11->setNom('Combat');
        $typeJeu11->setNoOrdre(684);
        $manager->persist($typeJeu11);

        $typeJeu12 = new TypeJeu();
        $typeJeu12->setNom('Compilation');
        $typeJeu12->setNoOrdre(145);
        $manager->persist($typeJeu12);

        $typeJeu13 = new TypeJeu();
        $typeJeu13->setNom('Course');
        $typeJeu13->setNoOrdre(1545);
        $manager->persist($typeJeu13);

        $typeJeu14 = new TypeJeu();
        $typeJeu14->setNom('Création');
        $typeJeu14->setNoOrdre(43);
        $manager->persist($typeJeu14);

        $typeJeu15 = new TypeJeu();
        $typeJeu15->setNom('Danse');
        $typeJeu15->setNoOrdre(3);
        $manager->persist($typeJeu15);

        $typeJeu16 = new TypeJeu();
        $typeJeu16->setNom('Drague');
        $typeJeu16->setNoOrdre(5);
        $manager->persist($typeJeu16);

        $typeJeu17 = new TypeJeu();
        $typeJeu17->setNom('Dungeon RPG');
        $typeJeu17->setNoOrdre(21);
        $manager->persist($typeJeu17);

        $typeJeu18 = new TypeJeu();
        $typeJeu18->setNom('Film Interactif');
        $typeJeu18->setNoOrdre(7);
        $manager->persist($typeJeu18);

        $typeJeu19 = new TypeJeu();
        $typeJeu19->setNom('Flipper');
        $typeJeu19->setNoOrdre(42);
        $manager->persist($typeJeu19);

        $typeJeu20 = new TypeJeu();
        $typeJeu20->setNom('FPS');
        $typeJeu20->setNoOrdre(1180);
        $manager->persist($typeJeu20);

        $typeJeu21 = new TypeJeu();
        $typeJeu21->setNom('Gestion');
        $typeJeu21->setNoOrdre(730);
        $manager->persist($typeJeu21);

        $typeJeu22 = new TypeJeu();
        $typeJeu22->setNom('God Game');
        $typeJeu22->setNoOrdre(1);
        $manager->persist($typeJeu22);

        $typeJeu23 = new TypeJeu();
        $typeJeu23->setNom("Hack'n slash");
        $typeJeu23->setNoOrdre(17);
        $manager->persist($typeJeu23);

        $typeJeu24 = new TypeJeu();
        $typeJeu24->setNom('Infiltration');
        $typeJeu24->setNoOrdre(225);
        $manager->persist($typeJeu24);

        $typeJeu25 = new TypeJeu();
        $typeJeu25->setNom('Jeu de cartes');
        $typeJeu25->setNoOrdre(110);
        $manager->persist($typeJeu25);

        $typeJeu26 = new TypeJeu();
        $typeJeu26->setNom('Jeu de société');
        $typeJeu26->setNoOrdre(82);
        $manager->persist($typeJeu26);

        $typeJeu27 = new TypeJeu();
        $typeJeu27->setNom('Karaoké');
        $typeJeu27->setNoOrdre(3);
        $manager->persist($typeJeu27);

        $typeJeu28 = new TypeJeu();
        $typeJeu28->setNom('Ludo-Educatif');
        $typeJeu28->setNoOrdre(64);
        $manager->persist($typeJeu28);

        $typeJeu29 = new TypeJeu();
        $typeJeu29->setNom('Management');
        $typeJeu29->setNoOrdre(6);
        $manager->persist($typeJeu29);

        $typeJeu30 = new TypeJeu();
        $typeJeu30->setNom('Match 3');
        $typeJeu30->setNoOrdre(4);
        $manager->persist($typeJeu30);

        $typeJeu31 = new TypeJeu();
        $typeJeu31->setNom('MMO');
        $typeJeu31->setNoOrdre(228);
        $manager->persist($typeJeu31);

        $typeJeu32 = new TypeJeu();
        $typeJeu32->setNom('MMORPG');
        $typeJeu32->setNoOrdre(25);
        $manager->persist($typeJeu32);

        $typeJeu33 = new TypeJeu();
        $typeJeu33->setNom('MOBA');
        $typeJeu33->setNoOrdre(9);
        $manager->persist($typeJeu33);

        $typeJeu34 = new TypeJeu();
        $typeJeu34->setNom('Open World');
        $typeJeu34->setNoOrdre(24);
        $manager->persist($typeJeu34);

        $typeJeu35 = new TypeJeu();
        $typeJeu35->setNom('Objets cachés');
        $typeJeu35->setNoOrdre(2);
        $manager->persist($typeJeu35);

        $typeJeu36 = new TypeJeu();
        $typeJeu36->setNom('Party-Game');
        $typeJeu36->setNoOrdre(346);
        $manager->persist($typeJeu36);

        $typeJeu37 = new TypeJeu();
        $typeJeu37->setNom('Plate-Forme');
        $typeJeu37->setNoOrdre(1892);
        $manager->persist($typeJeu37);

        $typeJeu38 = new TypeJeu();
        $typeJeu38->setNom("Point'n Click");
        $typeJeu38->setNoOrdre(361);
        $manager->persist($typeJeu38);

        $typeJeu39 = new TypeJeu();
        $typeJeu39->setNom('Puzzle-Game');
        $typeJeu39->setNoOrdre(421);
        $manager->persist($typeJeu39);

        $typeJeu40 = new TypeJeu();
        $typeJeu40->setNom('Réflexion');
        $typeJeu40->setNoOrdre(1154);
        $manager->persist($typeJeu40);

        $typeJeu41 = new TypeJeu();
        $typeJeu41->setNom('Roguelike');
        $typeJeu41->setNoOrdre(16);
        $manager->persist($typeJeu41);

        $typeJeu42 = new TypeJeu();
        $typeJeu42->setNom('RPG');
        $typeJeu42->setNoOrdre(1706);
        $manager->persist($typeJeu42);

        $typeJeu43 = new TypeJeu();
        $typeJeu43->setNom('Runner');
        $typeJeu43->setNoOrdre(37);
        $manager->persist($typeJeu43);

        $typeJeu44 = new TypeJeu();
        $typeJeu44->setNom('Rythme');
        $typeJeu44->setNoOrdre(321);
        $manager->persist($typeJeu44);

        $typeJeu45 = new TypeJeu();
        $typeJeu45->setNom('Sandbox');
        $typeJeu45->setNoOrdre(17);
        $manager->persist($typeJeu45);

        $typeJeu46 = new TypeJeu();
        $typeJeu46->setNom('Serious Games');
        $typeJeu46->setNoOrdre(1);
        $manager->persist($typeJeu46);

        $typeJeu47 = new TypeJeu();
        $typeJeu47->setNom('Shooter');
        $typeJeu47->setNoOrdre(1673);
        $manager->persist($typeJeu47);

        $typeJeu48 = new TypeJeu();
        $typeJeu48->setNom("Shoot'em Up");
        $typeJeu48->setNoOrdre(260);
        $manager->persist($typeJeu48);

        $typeJeu49 = new TypeJeu();
        $typeJeu49->setNom('Simulation');
        $typeJeu49->setNoOrdre(632);
        $manager->persist($typeJeu49);

        $typeJeu50 = new TypeJeu();
        $typeJeu50->setNom('Simulation de vie');
        $typeJeu50->setNoOrdre(5);
        $manager->persist($typeJeu50);

        $typeJeu51 = new TypeJeu();
        $typeJeu51->setNom('Simulation de vol');
        $typeJeu51->setNoOrdre(3);
        $manager->persist($typeJeu51);

        $typeJeu52 = new TypeJeu();
        $typeJeu52->setNom('Sport');
        $typeJeu52->setNoOrdre(1921);
        $manager->persist($typeJeu52);

        $typeJeu53 = new TypeJeu();
        $typeJeu53->setNom('Stratégie');
        $typeJeu53->setNoOrdre(1321);
        $manager->persist($typeJeu53);

        $typeJeu54 = new TypeJeu();
        $typeJeu54->setNom('Survival-Horror');
        $typeJeu54->setNoOrdre(283);
        $manager->persist($typeJeu54);

        $typeJeu55 = new TypeJeu();
        $typeJeu55->setNom('Tactical RPG');
        $typeJeu55->setNoOrdre(21);
        $manager->persist($typeJeu55);

        $typeJeu56 = new TypeJeu();
        $typeJeu56->setNom('Tactique');
        $typeJeu56->setNoOrdre(265);
        $manager->persist($typeJeu56);

        $typeJeu57 = new TypeJeu();
        $typeJeu57->setNom('Tir');
        $typeJeu57->setNoOrdre(219);
        $manager->persist($typeJeu57);

        $typeJeu58 = new TypeJeu();
        $typeJeu58->setNom('Tower Defense');
        $typeJeu58->setNoOrdre(7);
        $manager->persist($typeJeu58);

        $typeJeu59 = new TypeJeu();
        $typeJeu59->setNom('TPS');
        $typeJeu59->setNoOrdre(23);
        $manager->persist($typeJeu59);

        $typeJeu60 = new TypeJeu();
        $typeJeu60->setNom('Visual Novel');
        $typeJeu60->setNoOrdre(12);
        $manager->persist($typeJeu60);

        $typeJeu61 = new TypeJeu();
        $typeJeu61->setNom('Wargame');
        $typeJeu61->setNoOrdre(90);
        $manager->persist($typeJeu61);

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
        $this->addReference('typeJeu38', $typeJeu38);
        $this->addReference('typeJeu39', $typeJeu39);
        $this->addReference('typeJeu40', $typeJeu40);
        $this->addReference('typeJeu41', $typeJeu41);
        $this->addReference('typeJeu42', $typeJeu42);
        $this->addReference('typeJeu43', $typeJeu43);
        $this->addReference('typeJeu44', $typeJeu44);
        $this->addReference('typeJeu45', $typeJeu45);
        $this->addReference('typeJeu46', $typeJeu46);
        $this->addReference('typeJeu47', $typeJeu47);
        $this->addReference('typeJeu48', $typeJeu48);
        $this->addReference('typeJeu49', $typeJeu49);
        $this->addReference('typeJeu50', $typeJeu50);
        $this->addReference('typeJeu51', $typeJeu51);
        $this->addReference('typeJeu52', $typeJeu52);
        $this->addReference('typeJeu53', $typeJeu53);
        $this->addReference('typeJeu54', $typeJeu54);
        $this->addReference('typeJeu55', $typeJeu55);
        $this->addReference('typeJeu56', $typeJeu56);
        $this->addReference('typeJeu57', $typeJeu57);
        $this->addReference('typeJeu58', $typeJeu58);
        $this->addReference('typeJeu59', $typeJeu59);
        $this->addReference('typeJeu60', $typeJeu60);
        $this->addReference('typeJeu61', $typeJeu61);
    }

    public function getOrder()
    {
        // the order in which fixtures will be loaded
        return 4;
    }

}