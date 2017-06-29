<?php
 
namespace JC\SortieJeuVideoBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture; 
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use JC\SortieJeuVideoBundle\Entity\Tiers;
 
class LoadTiersData extends AbstractFixture implements OrderedFixtureInterface {
 
    public function load(ObjectManager $manager) 
    {
        $tiers01 = new Tiers();
        $tiers01->setNom('Ubisoft'); 
        $tiers01->setAdresse('28 rue Armand Carrel 93100 Montreuil'); 
        $tiers01->setSite('https://www.ubisoft.com'); 
        $tiers01->setPublished('1'); 
        $tiers01->setDateCreation(new \DateTime('1986-03-01')); 
        $tiers01->setNationalite($this->getReference('nationalite01')); 
        $tiers01->setTypeTiers($this->getReference('typeTiers02'));
        $manager->persist($tiers01);

        $tiers02 = new Tiers();
        $tiers02->setNom('Ubisoft Québec'); 
        $tiers02->setAdresse('585 Boulevard Charest E #200, Ville de Québec, QC G1K 3J2, Canada'); 
        $tiers02->setSite('https://www.ubisoft.com/fr-FR/studio/quebec.aspx'); 
        $tiers02->setPublished('1'); 
        $tiers02->setDateCreation(new \DateTime('1986-03-01')); 
        $tiers02->setNationalite($this->getReference('nationalite04')); 
        $tiers02->setTypeTiers($this->getReference('typeTiers03'));
        $manager->persist($tiers02);        


        https://www.ubisoft.com/fr-FR/studio/quebec.aspx

        $manager->flush();

        $this->addReference('tiers01', $tiers01);
        $this->addReference('tiers02', $tiers02);
    }

    public function getOrder()
    {
        // the order in which fixtures will be loaded
        return 5;
    }

}