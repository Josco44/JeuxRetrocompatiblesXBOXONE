<?php
 
namespace JC\SortieJeuVideoBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture; 
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use JC\SortieJeuVideoBundle\Entity\Tiers;
 
class LoadTiersData extends AbstractFixture implements OrderedFixtureInterface {
 
    public function load(ObjectManager $manager) 
    {
        /*
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
        $tiers02->setAdresse('585 boulevard Charest E #200, Ville de Québec, QC G1K 3J2, Canada'); 
        $tiers02->setSite('https://www.ubisoft.com/fr-FR/studio/quebec.aspx'); 
        $tiers02->setPublished('1'); 
        $tiers02->setDateCreation(new \DateTime('1986-03-01')); 
        $tiers02->setNationalite($this->getReference('nationalite04')); 
        $tiers02->setTypeTiers($this->getReference('typeTiers03'));
        $manager->persist($tiers02);

        $tiers03 = new Tiers();
        $tiers03->setNom('Jeuxvideo.com'); 
        $tiers03->setAdresse('2, rue Paul Vaillant Couturier 92532 LEVALLOIS-PERRET CEDEX'); 
        $tiers03->setSite('http://www.jeuxvideo.com/'); 
        $tiers03->setPublished('1'); 
        $tiers03->setDateCreation(new \DateTime('1997-03-01')); 
        $tiers03->setNationalite($this->getReference('nationalite01')); 
        $tiers03->setTypeTiers($this->getReference('typeTiers04'));
        $manager->persist($tiers03);                

        $tiers04 = new Tiers();
        $tiers04->setNom('Gamekult'); 
        $tiers04->setAdresse('122, rue Edouard Vaillant - 92300 LEVALLOIS PERRET'); 
        $tiers04->setSite('https://www.gamekult.com/'); 
        $tiers04->setPublished('1'); 
        $tiers04->setDateCreation(new \DateTime('2000-12-01')); 
        $tiers04->setNationalite($this->getReference('nationalite01')); 
        $tiers04->setTypeTiers($this->getReference('typeTiers04'));
        $manager->persist($tiers04);                

        $tiers05 = new Tiers();
        $tiers05->setNom('Gameblog'); 
        $tiers05->setAdresse('8, rue de Chantilly 75009 Paris'); 
        $tiers05->setSite('http://www.gameblog.fr/'); 
        $tiers05->setPublished('1'); 
        $tiers05->setDateCreation(new \DateTime('2007-02-20')); 
        $tiers05->setNationalite($this->getReference('nationalite01')); 
        $tiers05->setTypeTiers($this->getReference('typeTiers04'));
        $manager->persist($tiers05);                

        $manager->flush();

        $this->addReference('tiers01', $tiers01);
        $this->addReference('tiers02', $tiers02);
        $this->addReference('tiers03', $tiers03);
        $this->addReference('tiers04', $tiers04);
        $this->addReference('tiers05', $tiers05);
        */
    }

    public function getOrder()
    {
        // the order in which fixtures will be loaded
        return 9;
    }

}