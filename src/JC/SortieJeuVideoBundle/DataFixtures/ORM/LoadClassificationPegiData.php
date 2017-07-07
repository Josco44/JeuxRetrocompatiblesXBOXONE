<?php
 
namespace JC\SortieJeuVideoBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture; 
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use JC\SortieJeuVideoBundle\Entity\ClassificationPegi;
 
class LoadClassificationPegiData extends AbstractFixture implements OrderedFixtureInterface {
 
    public function load(ObjectManager $manager) 
    {

        $classificationPegi01 = new ClassificationPegi();
        $classificationPegi01->setNom('Discrimination');
        $classificationPegi01->setImage('Discrimination.gif');
        $classificationPegi01->setUpdatedAt(new \DateTime('now'));
        $manager->persist($classificationPegi01);

        $classificationPegi02 = new ClassificationPegi();
        $classificationPegi02->setNom('Drogue');
        $classificationPegi02->setImage('Drogue.gif');
        $classificationPegi02->setUpdatedAt(new \DateTime('now'));
        $manager->persist($classificationPegi02);

        $classificationPegi03 = new ClassificationPegi();
        $classificationPegi03->setNom('En ligne');
        $classificationPegi03->setImage('EnLigne.gif');
        $classificationPegi03->setUpdatedAt(new \DateTime('now'));
        $manager->persist($classificationPegi03);

        $classificationPegi04 = new ClassificationPegi();
        $classificationPegi04->setNom('Jeu de hasard');
        $classificationPegi04->setImage('JeuDeHasard.gif');
        $classificationPegi04->setUpdatedAt(new \DateTime('now'));
        $manager->persist($classificationPegi04);

        $classificationPegi05 = new ClassificationPegi();
        $classificationPegi05->setNom('Langage grossier');
        $classificationPegi05->setImage('LangageGrossier.gif');
        $classificationPegi05->setUpdatedAt(new \DateTime('now'));
        $manager->persist($classificationPegi05);

        $classificationPegi06 = new ClassificationPegi();
        $classificationPegi06->setNom('Peur');
        $classificationPegi06->setImage('Peur.gif');
        $classificationPegi06->setUpdatedAt(new \DateTime('now'));
        $manager->persist($classificationPegi06);

        $classificationPegi07 = new ClassificationPegi();
        $classificationPegi07->setNom('Sexe');
        $classificationPegi07->setImage('Sexe.gif');
        $classificationPegi07->setUpdatedAt(new \DateTime('now'));
        $manager->persist($classificationPegi07);

        $classificationPegi08 = new ClassificationPegi();
        $classificationPegi08->setNom('Violence');
        $classificationPegi08->setImage('Violence.gif');
        $classificationPegi08->setUpdatedAt(new \DateTime('now'));
        $manager->persist($classificationPegi08);

        $manager->flush();

        $this->addReference('classificationPegi01', $classificationPegi01);
        $this->addReference('classificationPegi02', $classificationPegi02);
        $this->addReference('classificationPegi03', $classificationPegi03);
        $this->addReference('classificationPegi04', $classificationPegi04);
        $this->addReference('classificationPegi05', $classificationPegi05);
        $this->addReference('classificationPegi06', $classificationPegi06);
        $this->addReference('classificationPegi07', $classificationPegi07);
        $this->addReference('classificationPegi08', $classificationPegi08);

    }

    public function getOrder()
    {
        // the order in which fixtures will be loaded
        return 7;
    }
 
}