<?php
 
namespace JC\SortieJeuVideoBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture; 
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use JC\SortieJeuVideoBundle\Entity\Nationalite;
 
class LoadNationaliteData extends AbstractFixture implements OrderedFixtureInterface {
 
    public function load(ObjectManager $manager) 
    {

        $nationalite001 = new Nationalite();
        $nationalite001->setNom('Afghanistan');
        $manager->persist($nationalite001);

        $nationalite002 = new Nationalite();
        $nationalite002->setNom('Afrique du sud');
        $manager->persist($nationalite002);

        $nationalite003 = new Nationalite();
        $nationalite003->setNom('Albanie');
        $manager->persist($nationalite003);

        $nationalite004 = new Nationalite();
        $nationalite004->setNom('Algerie');
        $manager->persist($nationalite004);        

        $nationalite005 = new Nationalite();
        $nationalite005->setNom('Allemagne');
        $manager->persist($nationalite005);

        $nationalite006 = new Nationalite();
        $nationalite006->setNom('Andorre');
        $manager->persist($nationalite006);

        $nationalite007 = new Nationalite();
        $nationalite007->setNom('Angola');
        $manager->persist($nationalite007);

        $nationalite008 = new Nationalite();
        $nationalite008->setNom('Anguilla');
        $manager->persist($nationalite008);

        $nationalite009 = new Nationalite();
        $nationalite009->setNom('Antigua et Barbuda');
        $manager->persist($nationalite009);

        $nationalite010 = new Nationalite();
        $nationalite010->setNom('Antilles Néerlandaises');
        $manager->persist($nationalite010);

        $nationalite011 = new Nationalite();
        $nationalite011->setNom('Arabie Saoudite');
        $manager->persist($nationalite011);

        $nationalite012 = new Nationalite();
        $nationalite012->setNom('Argentine');
        $manager->persist($nationalite012);

        $nationalite013 = new Nationalite();
        $nationalite013->setNom('Armenie');
        $manager->persist($nationalite013);

        $nationalite014 = new Nationalite();
        $nationalite014->setNom('Aruba');
        $manager->persist($nationalite014);

        $nationalite015 = new Nationalite();
        $nationalite015->setNom('Australie');
        $manager->persist($nationalite015);

        $nationalite016 = new Nationalite();
        $nationalite016->setNom('Autriche');
        $manager->persist($nationalite016);

        $nationalite017 = new Nationalite();
        $nationalite017->setNom('Azerbaijan');
        $manager->persist($nationalite017);

        $nationalite018 = new Nationalite();
        $nationalite018->setNom('Bahamas');
        $manager->persist($nationalite018);

        $nationalite019 = new Nationalite();
        $nationalite019->setNom('Bahrein');
        $manager->persist($nationalite019);

        $nationalite020 = new Nationalite();
        $nationalite020->setNom('Bangladesh');
        $manager->persist($nationalite020);

        $nationalite021 = new Nationalite();
        $nationalite021->setNom('Barbade');
        $manager->persist($nationalite021);

        $nationalite022 = new Nationalite();
        $nationalite022->setNom('Belgique');
        $manager->persist($nationalite022);

        $nationalite023 = new Nationalite();
        $nationalite023->setNom('Belize');
        $manager->persist($nationalite023);

        $nationalite024 = new Nationalite();
        $nationalite024->setNom('Benin');
        $manager->persist($nationalite024);

        $nationalite025 = new Nationalite();
        $nationalite025->setNom('Bermudes');
        $manager->persist($nationalite025);

        $nationalite026 = new Nationalite();
        $nationalite026->setNom('Bhoutan');
        $manager->persist($nationalite026);

        $nationalite027 = new Nationalite();
        $nationalite027->setNom('Biélorussie');
        $manager->persist($nationalite027);

        $nationalite028 = new Nationalite();
        $nationalite028->setNom('Birmanie');
        $manager->persist($nationalite028);

        $nationalite029 = new Nationalite();
        $nationalite029->setNom('Bolivie');
        $manager->persist($nationalite029);

        $nationalite030 = new Nationalite();
        $nationalite030->setNom('Bosnie-Herzégovine');
        $manager->persist($nationalite030);

        $nationalite031 = new Nationalite();
        $nationalite031->setNom('Botswana');
        $manager->persist($nationalite031);

        $nationalite032 = new Nationalite();
        $nationalite032->setNom('Bresil');
        $manager->persist($nationalite032);

        $nationalite033 = new Nationalite();
        $nationalite033->setNom('Brunei');
        $manager->persist($nationalite033);

        $nationalite034 = new Nationalite();
        $nationalite034->setNom('Bulgarie');
        $manager->persist($nationalite034);

        $nationalite035 = new Nationalite();
        $nationalite035->setNom('Burkina Faso');
        $manager->persist($nationalite035);

        $nationalite036 = new Nationalite();
        $nationalite036->setNom('Burundi');
        $manager->persist($nationalite036);

        $nationalite037 = new Nationalite();
        $nationalite037->setNom('Cambodge');
        $manager->persist($nationalite037);

        $nationalite038 = new Nationalite();
        $nationalite038->setNom('Cameroun');
        $manager->persist($nationalite038);

        $nationalite039 = new Nationalite();
        $nationalite039->setNom('Canada');
        $manager->persist($nationalite039);

        $nationalite040 = new Nationalite();
        $nationalite040->setNom('Cap Vert');
        $manager->persist($nationalite040);

        $nationalite041 = new Nationalite();
        $nationalite041->setNom('Chili');
        $manager->persist($nationalite041);

        $nationalite042 = new Nationalite();
        $nationalite042->setNom('Chine');
        $manager->persist($nationalite042);

        $nationalite043 = new Nationalite();
        $nationalite043->setNom('Chypre');
        $manager->persist($nationalite043);

        $nationalite044 = new Nationalite();
        $nationalite044->setNom('Colombie');
        $manager->persist($nationalite044);

        $nationalite045 = new Nationalite();
        $nationalite045->setNom('Comores');
        $manager->persist($nationalite045);

        $nationalite046 = new Nationalite();
        $nationalite046->setNom('Corée du nord');
        $manager->persist($nationalite046);

        $nationalite047 = new Nationalite();
        $nationalite047->setNom('Corée du sud');
        $manager->persist($nationalite047);

        $nationalite048 = new Nationalite();
        $nationalite048->setNom('Costa Rica');
        $manager->persist($nationalite048);

        $nationalite049 = new Nationalite();
        $nationalite049->setNom("Côte d'Ivoire");
        $manager->persist($nationalite049);

        $nationalite050 = new Nationalite();
        $nationalite050->setNom('Croatie');
        $manager->persist($nationalite050);

        $nationalite051 = new Nationalite();
        $nationalite051->setNom('Cuba');
        $manager->persist($nationalite051);

        $nationalite052 = new Nationalite();
        $nationalite052->setNom('Danemark');
        $manager->persist($nationalite052);

        $nationalite053 = new Nationalite();
        $nationalite053->setNom('Djibouti');
        $manager->persist($nationalite053);

        $nationalite054 = new Nationalite();
        $nationalite054->setNom('Dominique');
        $manager->persist($nationalite054);

        $nationalite055 = new Nationalite();
        $nationalite055->setNom('Egypte');
        $manager->persist($nationalite055);

        $nationalite056 = new Nationalite();
        $nationalite056->setNom('Emirats Arabes Unis');
        $manager->persist($nationalite056);

        $nationalite057 = new Nationalite();
        $nationalite057->setNom('Equateur');
        $manager->persist($nationalite057);

        $nationalite058 = new Nationalite();
        $nationalite058->setNom('Érythrée');
        $manager->persist($nationalite058);

        $nationalite059 = new Nationalite();
        $nationalite059->setNom('Espagne');
        $manager->persist($nationalite059);

        $nationalite060 = new Nationalite();
        $nationalite060->setNom('Estonie');
        $manager->persist($nationalite060);

        $nationalite061 = new Nationalite();
        $nationalite061->setNom('Etats-Unis');
        $manager->persist($nationalite061);

        $nationalite062 = new Nationalite();
        $nationalite062->setNom('Ethiopie');
        $manager->persist($nationalite062);

        $nationalite063 = new Nationalite();
        $nationalite063->setNom('Fidji');
        $manager->persist($nationalite063);

        $nationalite064 = new Nationalite();
        $nationalite064->setNom('Finlande');
        $manager->persist($nationalite064);

        $nationalite065 = new Nationalite();
        $nationalite065->setNom('France');
        $manager->persist($nationalite065);

        $nationalite066 = new Nationalite();
        $nationalite066->setNom('Gabon');
        $manager->persist($nationalite066);

        $nationalite067 = new Nationalite();
        $nationalite067->setNom('Gambie');
        $manager->persist($nationalite067);

        $nationalite068 = new Nationalite();
        $nationalite068->setNom('Georgie');
        $manager->persist($nationalite068);

        $nationalite069 = new Nationalite();
        $nationalite069->setNom('Ghana');
        $manager->persist($nationalite069);

        $nationalite070 = new Nationalite();
        $nationalite070->setNom('Gibraltar');
        $manager->persist($nationalite070);

        $nationalite071 = new Nationalite();
        $nationalite071->setNom('Grèce');
        $manager->persist($nationalite071);

        $nationalite072 = new Nationalite();
        $nationalite072->setNom('Grenade');
        $manager->persist($nationalite072);

        $nationalite073 = new Nationalite();
        $nationalite073->setNom('Groenland');
        $manager->persist($nationalite073);

        $nationalite074 = new Nationalite();
        $nationalite074->setNom('Guadeloupe');
        $manager->persist($nationalite074);

        $nationalite075 = new Nationalite();
        $nationalite075->setNom('Guam');
        $manager->persist($nationalite075);

        $nationalite076 = new Nationalite();
        $nationalite076->setNom('Guatemala');
        $manager->persist($nationalite076);

        $nationalite077 = new Nationalite();
        $nationalite077->setNom('Guernesey');
        $manager->persist($nationalite077);

        $nationalite078 = new Nationalite();
        $nationalite078->setNom('Guinée');
        $manager->persist($nationalite078);

        $nationalite079 = new Nationalite();
        $nationalite079->setNom('Guinée-Bissau');
        $manager->persist($nationalite079);

        $nationalite080 = new Nationalite();
        $nationalite080->setNom('Guinée équatoriale');
        $manager->persist($nationalite080);

        $nationalite081 = new Nationalite();
        $nationalite081->setNom('Guyanne');
        $manager->persist($nationalite081);

        $nationalite082 = new Nationalite();
        $nationalite082->setNom('Guyana');
        $manager->persist($nationalite082);

        $nationalite083 = new Nationalite();
        $nationalite083->setNom('Haïti');
        $manager->persist($nationalite083);

        $nationalite084 = new Nationalite();
        $nationalite084->setNom('Honduras');
        $manager->persist($nationalite084);

        $nationalite085 = new Nationalite();
        $nationalite085->setNom('Hong Kong');
        $manager->persist($nationalite085);

        $nationalite086 = new Nationalite();
        $nationalite086->setNom('Hongrie');
        $manager->persist($nationalite086);

        $nationalite087 = new Nationalite();
        $nationalite087->setNom('Île de Man');
        $manager->persist($nationalite087);

        $nationalite088 = new Nationalite();
        $nationalite088->setNom('Île Christmas');
        $manager->persist($nationalite088);

        $nationalite089 = new Nationalite();
        $nationalite089->setNom('Île Norfolk');
        $manager->persist($nationalite089);

        $nationalite090 = new Nationalite();
        $nationalite090->setNom('Îles Caïmans');
        $manager->persist($nationalite090);

        $nationalite091 = new Nationalite();
        $nationalite091->setNom('Îles Cocos');
        $manager->persist($nationalite091);

        $nationalite092 = new Nationalite();
        $nationalite092->setNom('Îles Cook');
        $manager->persist($nationalite092);

        $nationalite093 = new Nationalite();
        $nationalite093->setNom('Îles Falkland');
        $manager->persist($nationalite093);

        $nationalite094 = new Nationalite();
        $nationalite094->setNom('Îles Féroé');
        $manager->persist($nationalite094);

        $nationalite095 = new Nationalite();
        $nationalite095->setNom('Îles Mariannes du Nord');
        $manager->persist($nationalite095);

        $nationalite096 = new Nationalite();
        $nationalite096->setNom('Îles Marshall');
        $manager->persist($nationalite096);

        $nationalite097 = new Nationalite();
        $nationalite097->setNom('Îles Pitcairn');
        $manager->persist($nationalite097);

        $nationalite098 = new Nationalite();
        $nationalite098->setNom('Îles Salomon');
        $manager->persist($nationalite098);

        $nationalite099 = new Nationalite();
        $nationalite099->setNom('Îles Turks-et-Caïcos');
        $manager->persist($nationalite099);

        $nationalite100 = new Nationalite();
        $nationalite100->setNom('Îles Vierges britanniques');
        $manager->persist($nationalite100);

        $nationalite101 = new Nationalite();
        $nationalite101->setNom('Inde');
        $manager->persist($nationalite101);

        $nationalite102 = new Nationalite();
        $nationalite102->setNom('Indonésie');
        $manager->persist($nationalite102);

        $nationalite103 = new Nationalite();
        $nationalite103->setNom('Iraq');
        $manager->persist($nationalite103);

        $nationalite104 = new Nationalite();
        $nationalite104->setNom('Iran');
        $manager->persist($nationalite104);

        $nationalite105 = new Nationalite();
        $nationalite105->setNom('Irlande');
        $manager->persist($nationalite105);

        $nationalite106 = new Nationalite();
        $nationalite106->setNom('Islande');
        $manager->persist($nationalite106);

        $nationalite107 = new Nationalite();
        $nationalite107->setNom('Israël');
        $manager->persist($nationalite107);

        $nationalite108 = new Nationalite();
        $nationalite108->setNom('Italie');
        $manager->persist($nationalite108);

        $nationalite109 = new Nationalite();
        $nationalite109->setNom('Jamaïque');
        $manager->persist($nationalite109);

        $nationalite110 = new Nationalite();
        $nationalite110->setNom('Japon');
        $manager->persist($nationalite110);

        $nationalite111 = new Nationalite();
        $nationalite111->setNom('Jersey');
        $manager->persist($nationalite111);

        $nationalite112 = new Nationalite();
        $nationalite112->setNom('Jordanie');
        $manager->persist($nationalite112);

        $nationalite113 = new Nationalite();
        $nationalite113->setNom('Kazakstan');
        $manager->persist($nationalite113);

        $nationalite114 = new Nationalite();
        $nationalite114->setNom('Kenya');
        $manager->persist($nationalite114);

        $nationalite115 = new Nationalite();
        $nationalite115->setNom('Kiribati');
        $manager->persist($nationalite115);

        $nationalite116 = new Nationalite();
        $nationalite116->setNom('Kosovo');
        $manager->persist($nationalite116);

        $nationalite117 = new Nationalite();
        $nationalite117->setNom('Koweit');
        $manager->persist($nationalite117);

        $nationalite118 = new Nationalite();
        $nationalite118->setNom('Kyrgyzstan');
        $manager->persist($nationalite118);

        $nationalite119 = new Nationalite();
        $nationalite119->setNom('Laos');
        $manager->persist($nationalite119);

        $nationalite120 = new Nationalite();
        $nationalite120->setNom('Lesotho');
        $manager->persist($nationalite120);

        $nationalite121 = new Nationalite();
        $nationalite121->setNom('Lettonie');
        $manager->persist($nationalite121);

        $nationalite122 = new Nationalite();
        $nationalite122->setNom('Liban');
        $manager->persist($nationalite122);

        $nationalite123 = new Nationalite();
        $nationalite123->setNom('Liberia');
        $manager->persist($nationalite123);

        $nationalite123 = new Nationalite();
        $nationalite123->setNom('Libye');
        $manager->persist($nationalite123);

        $nationalite123 = new Nationalite();
        $nationalite123->setNom('Liechtenstein');
        $manager->persist($nationalite123);

        $nationalite124 = new Nationalite();
        $nationalite124->setNom('Lituanie');
        $manager->persist($nationalite124);

        $nationalite125 = new Nationalite();
        $nationalite125->setNom('Luxembourg');
        $manager->persist($nationalite125);

        $nationalite126 = new Nationalite();
        $nationalite126->setNom('Macao');
        $manager->persist($nationalite126);

        $nationalite127 = new Nationalite();
        $nationalite127->setNom('Macedoine');
        $manager->persist($nationalite127);

        $nationalite128 = new Nationalite();
        $nationalite128->setNom('Madagascar');
        $manager->persist($nationalite128);

        $nationalite129 = new Nationalite();
        $nationalite129->setNom('Malaisie');
        $manager->persist($nationalite129);

        $nationalite130 = new Nationalite();
        $nationalite130->setNom('Malawi');
        $manager->persist($nationalite130);

        $nationalite131 = new Nationalite();
        $nationalite131->setNom('Maldives');
        $manager->persist($nationalite131);

        $nationalite132 = new Nationalite();
        $nationalite132->setNom('Mali');
        $manager->persist($nationalite132);

        $nationalite133 = new Nationalite();
        $nationalite133->setNom('Malte');
        $manager->persist($nationalite133);

        $nationalite134 = new Nationalite();
        $nationalite134->setNom('Maroc');
        $manager->persist($nationalite134);

        $nationalite135 = new Nationalite();
        $nationalite135->setNom('Martinique');
        $manager->persist($nationalite135);

        $nationalite136 = new Nationalite();
        $nationalite136->setNom('Maurice');
        $manager->persist($nationalite136);

        $nationalite137 = new Nationalite();
        $nationalite137->setNom('Mauritanie');
        $manager->persist($nationalite137);

        $nationalite138 = new Nationalite();
        $nationalite138->setNom('Mayotte');
        $manager->persist($nationalite138);

        $nationalite139 = new Nationalite();
        $nationalite139->setNom('Mexique');
        $manager->persist($nationalite139);

        $nationalite140 = new Nationalite();
        $nationalite140->setNom('Micronésie');
        $manager->persist($nationalite140);

        $nationalite141 = new Nationalite();
        $nationalite141->setNom('Moldavie');
        $manager->persist($nationalite141);

        $nationalite142 = new Nationalite();
        $nationalite142->setNom('Monaco');
        $manager->persist($nationalite142);

        $nationalite143 = new Nationalite();
        $nationalite143->setNom('Mongolie');
        $manager->persist($nationalite143);

        $nationalite144 = new Nationalite();
        $nationalite144->setNom('Montenegro');
        $manager->persist($nationalite144);

        $nationalite145 = new Nationalite();
        $nationalite145->setNom('Montserrat');
        $manager->persist($nationalite145);

        $nationalite146 = new Nationalite();
        $nationalite146->setNom('Mozambique');
        $manager->persist($nationalite146);

        $nationalite147 = new Nationalite();
        $nationalite147->setNom('Namibie');
        $manager->persist($nationalite147);

        $nationalite148 = new Nationalite();
        $nationalite148->setNom('Nauru');
        $manager->persist($nationalite148);

        $nationalite149 = new Nationalite();
        $nationalite149->setNom('Nepal');
        $manager->persist($nationalite149);

        $nationalite150 = new Nationalite();
        $nationalite150->setNom('Nicaragua');
        $manager->persist($nationalite150);

        $nationalite151 = new Nationalite();
        $nationalite151->setNom('Niger');
        $manager->persist($nationalite151);

        $nationalite152 = new Nationalite();
        $nationalite152->setNom('Nigeria');
        $manager->persist($nationalite152);

        $nationalite153 = new Nationalite();
        $nationalite153->setNom('Niue');
        $manager->persist($nationalite153);

        $nationalite154 = new Nationalite();
        $nationalite154->setNom('Norvège');
        $manager->persist($nationalite154);

        $nationalite155 = new Nationalite();
        $nationalite155->setNom('Nouvelle-Calédonie');
        $manager->persist($nationalite155);

        $nationalite156 = new Nationalite();
        $nationalite156->setNom('Nouvelle-Zélande');
        $manager->persist($nationalite156);

        $nationalite157 = new Nationalite();
        $nationalite157->setNom('Oman');
        $manager->persist($nationalite157);

        $nationalite158 = new Nationalite();
        $nationalite158->setNom('Ouganda');
        $manager->persist($nationalite158);

        $nationalite159 = new Nationalite();
        $nationalite159->setNom('Panama');
        $manager->persist($nationalite159);

        $nationalite160 = new Nationalite();
        $nationalite160->setNom('Papouasie Nouvelle Guinée');
        $manager->persist($nationalite160);

        $nationalite161 = new Nationalite();
        $nationalite161->setNom('Pakistan');
        $manager->persist($nationalite161);

        $nationalite162 = new Nationalite();
        $nationalite162->setNom('Palaos');
        $manager->persist($nationalite162);

        $nationalite163 = new Nationalite();
        $nationalite163->setNom('Paraguay');
        $manager->persist($nationalite163);

        $nationalite164 = new Nationalite();
        $nationalite164->setNom('Pays-Bas');
        $manager->persist($nationalite164);

        $nationalite165 = new Nationalite();
        $nationalite165->setNom('Perou');
        $manager->persist($nationalite165);

        $nationalite166 = new Nationalite();
        $nationalite166->setNom('Philippines');
        $manager->persist($nationalite166);

        $nationalite167 = new Nationalite();
        $nationalite167->setNom('Pologne');
        $manager->persist($nationalite167);

        $nationalite168 = new Nationalite();
        $nationalite168->setNom('Polynésie Française');
        $manager->persist($nationalite168);

        $nationalite169 = new Nationalite();
        $nationalite169->setNom('Porto-Rico');
        $manager->persist($nationalite169);

        $nationalite170 = new Nationalite();
        $nationalite170->setNom('Portugal');
        $manager->persist($nationalite170);

        $nationalite171 = new Nationalite();
        $nationalite171->setNom('Qatar');
        $manager->persist($nationalite171);

        $nationalite172 = new Nationalite();
        $nationalite172->setNom('République Centrafricaine');
        $manager->persist($nationalite172);

        $nationalite173 = new Nationalite();
        $nationalite173->setNom('République du Congo');
        $manager->persist($nationalite173);

        $nationalite174 = new Nationalite();
        $nationalite174->setNom('République Dominicaine');
        $manager->persist($nationalite174);

        $nationalite175 = new Nationalite();
        $nationalite175->setNom('République Tchèque');
        $manager->persist($nationalite175);

        $nationalite176 = new Nationalite();
        $nationalite176->setNom('Réunion');
        $manager->persist($nationalite176);

        $nationalite177 = new Nationalite();
        $nationalite177->setNom('Roumanie');
        $manager->persist($nationalite177);

        $nationalite178 = new Nationalite();
        $nationalite178->setNom('Royaume Uni');
        $manager->persist($nationalite178);

        $nationalite179 = new Nationalite();
        $nationalite179->setNom('Rwanda');
        $manager->persist($nationalite179);

        $nationalite180 = new Nationalite();
        $nationalite180->setNom('Russie');
        $manager->persist($nationalite180);

        $nationalite181 = new Nationalite();
        $nationalite181->setNom('Sahara Occidental');
        $manager->persist($nationalite181);

        $nationalite182 = new Nationalite();
        $nationalite182->setNom('Saint-Christophe-et-Niévès');
        $manager->persist($nationalite182);

        $nationalite183 = new Nationalite();
        $nationalite183->setNom('Saint-Marin');
        $manager->persist($nationalite183);

        $nationalite184 = new Nationalite();
        $nationalite184->setNom('Saint-Martin');
        $manager->persist($nationalite184);

        $nationalite185 = new Nationalite();
        $nationalite185->setNom('Saint-Pierre and Miquelon');
        $manager->persist($nationalite185);

        $nationalite186 = new Nationalite();
        $nationalite186->setNom('Saint-Vincent-et-les-Grenadines');
        $manager->persist($nationalite186);

        $nationalite187 = new Nationalite();
        $nationalite187->setNom('Sainte-Hélène');
        $manager->persist($nationalite187);

        $nationalite188 = new Nationalite();
        $nationalite188->setNom('Sainte-Lucie');
        $manager->persist($nationalite188);

        $nationalite189 = new Nationalite();
        $nationalite189->setNom('Salvador');
        $manager->persist($nationalite189);

        $nationalite190 = new Nationalite();
        $nationalite190->setNom('Samoa');
        $manager->persist($nationalite190);

        $nationalite191 = new Nationalite();
        $nationalite191->setNom('Samoa américaines');
        $manager->persist($nationalite191);

        $nationalite192 = new Nationalite();
        $nationalite192->setNom('Sao Tomé-et-Principe');
        $manager->persist($nationalite192);

        $nationalite193 = new Nationalite();
        $nationalite193->setNom('Seychelles');
        $manager->persist($nationalite193);

        $nationalite194 = new Nationalite();
        $nationalite194->setNom('Sierra Leone');
        $manager->persist($nationalite194);

        $nationalite195 = new Nationalite();
        $nationalite195->setNom('Sénégal');
        $manager->persist($nationalite195);

        $nationalite196 = new Nationalite();
        $nationalite196->setNom('Serbie');
        $manager->persist($nationalite196);

        $nationalite197 = new Nationalite();
        $nationalite197->setNom('Singapour');
        $manager->persist($nationalite197);

        $nationalite198 = new Nationalite();
        $nationalite198->setNom('Slovaquie');
        $manager->persist($nationalite198);

        $nationalite199 = new Nationalite();
        $nationalite199->setNom('Slovenie');
        $manager->persist($nationalite199);

        $nationalite200 = new Nationalite();
        $nationalite200->setNom('Somalie');
        $manager->persist($nationalite200);

        $nationalite201 = new Nationalite();
        $nationalite201->setNom('Soudan');
        $manager->persist($nationalite201);

        $nationalite202 = new Nationalite();
        $nationalite202->setNom('Sri Lanka');
        $manager->persist($nationalite202);

        $nationalite203 = new Nationalite();
        $nationalite203->setNom('Suède');
        $manager->persist($nationalite203);

        $nationalite204 = new Nationalite();
        $nationalite204->setNom('Suisse');
        $manager->persist($nationalite204);

        $nationalite205 = new Nationalite();
        $nationalite205->setNom('Surinam');
        $manager->persist($nationalite205);

        $nationalite206 = new Nationalite();
        $nationalite206->setNom('Svalbard');
        $manager->persist($nationalite206);

        $nationalite207 = new Nationalite();
        $nationalite207->setNom('Swaziland');
        $manager->persist($nationalite207);

        $nationalite208 = new Nationalite();
        $nationalite208->setNom('Syrie');
        $manager->persist($nationalite208);

        $nationalite209 = new Nationalite();
        $nationalite209->setNom('Taiwan');
        $manager->persist($nationalite209);

        $nationalite210 = new Nationalite();
        $nationalite210->setNom('Tajikistan');
        $manager->persist($nationalite210);

        $nationalite211 = new Nationalite();
        $nationalite211->setNom('Tanzanie');
        $manager->persist($nationalite211);

        $nationalite212 = new Nationalite();
        $nationalite212->setNom('Tchad');
        $manager->persist($nationalite212);

        $nationalite213 = new Nationalite();
        $nationalite213->setNom('Territoires de Gaza');
        $manager->persist($nationalite213);

        $nationalite214 = new Nationalite();
        $nationalite214->setNom('Thaïlande');
        $manager->persist($nationalite214);

        $nationalite215 = new Nationalite();
        $nationalite215->setNom('Timor oriental');
        $manager->persist($nationalite215);

        $nationalite216 = new Nationalite();
        $nationalite216->setNom('Togo');
        $manager->persist($nationalite216);

        $nationalite217 = new Nationalite();
        $nationalite217->setNom('Tonga');
        $manager->persist($nationalite217);

        $nationalite218 = new Nationalite();
        $nationalite218->setNom('Trinité-et-Tobago');
        $manager->persist($nationalite218);

        $nationalite219 = new Nationalite();
        $nationalite219->setNom('Tunisie');
        $manager->persist($nationalite219);

        $nationalite220 = new Nationalite();
        $nationalite220->setNom('Turkmenistan');
        $manager->persist($nationalite220);

        $nationalite221 = new Nationalite();
        $nationalite221->setNom('Turquie');
        $manager->persist($nationalite221);

        $nationalite222 = new Nationalite();
        $nationalite222->setNom('Tuvalu');
        $manager->persist($nationalite222);

        $nationalite223 = new Nationalite();
        $nationalite223->setNom('Ukraine');
        $manager->persist($nationalite223);

        $nationalite224 = new Nationalite();
        $nationalite224->setNom('Uruguay');
        $manager->persist($nationalite224);

        $nationalite225 = new Nationalite();
        $nationalite225->setNom('Uzbekistan');
        $manager->persist($nationalite225);

        $nationalite226 = new Nationalite();
        $nationalite226->setNom('Vanuatu');
        $manager->persist($nationalite226);

        $nationalite227 = new Nationalite();
        $nationalite227->setNom('Vatican');
        $manager->persist($nationalite227);

        $nationalite228 = new Nationalite();
        $nationalite228->setNom('Venezuela');
        $manager->persist($nationalite228);

        $nationalite229 = new Nationalite();
        $nationalite229->setNom('Vietnam');
        $manager->persist($nationalite229);

        $nationalite230 = new Nationalite();
        $nationalite230->setNom('Wallis et Futuna');
        $manager->persist($nationalite230);

        $nationalite231 = new Nationalite();
        $nationalite231->setNom('Yemen');
        $manager->persist($nationalite231);

        $nationalite232 = new Nationalite();
        $nationalite232->setNom('Zaïre');
        $manager->persist($nationalite232);

        $nationalite233 = new Nationalite();
        $nationalite233->setNom('Zambie');
        $manager->persist($nationalite233);

        $nationalite234 = new Nationalite();
        $nationalite234->setNom('Zimbabwe');
        $manager->persist($nationalite234);

        $manager->flush();

        $this->addReference('nationalite001', $nationalite001);
        $this->addReference('nationalite002', $nationalite002);
        $this->addReference('nationalite003', $nationalite003);
        $this->addReference('nationalite004', $nationalite004);
        $this->addReference('nationalite005', $nationalite005);
        $this->addReference('nationalite006', $nationalite006);
        $this->addReference('nationalite007', $nationalite007);
        $this->addReference('nationalite008', $nationalite008);
        $this->addReference('nationalite009', $nationalite009);
        $this->addReference('nationalite010', $nationalite010);
        $this->addReference('nationalite011', $nationalite011);
        $this->addReference('nationalite012', $nationalite012);
        $this->addReference('nationalite013', $nationalite013);
        $this->addReference('nationalite014', $nationalite014);
        $this->addReference('nationalite015', $nationalite015);
        $this->addReference('nationalite016', $nationalite016);
        $this->addReference('nationalite017', $nationalite017);
        $this->addReference('nationalite018', $nationalite018);
        $this->addReference('nationalite019', $nationalite019);
        $this->addReference('nationalite020', $nationalite020);
        $this->addReference('nationalite021', $nationalite021);
        $this->addReference('nationalite022', $nationalite022);
        $this->addReference('nationalite023', $nationalite023);
        $this->addReference('nationalite024', $nationalite024);
        $this->addReference('nationalite025', $nationalite025);
        $this->addReference('nationalite026', $nationalite026);
        $this->addReference('nationalite027', $nationalite027);
        $this->addReference('nationalite028', $nationalite028);
        $this->addReference('nationalite029', $nationalite029);
        $this->addReference('nationalite030', $nationalite030);
        $this->addReference('nationalite031', $nationalite031);
        $this->addReference('nationalite032', $nationalite032);
        $this->addReference('nationalite033', $nationalite033);
        $this->addReference('nationalite034', $nationalite034);
        $this->addReference('nationalite035', $nationalite035);
        $this->addReference('nationalite036', $nationalite036);
        $this->addReference('nationalite037', $nationalite037);
        $this->addReference('nationalite038', $nationalite038);
        $this->addReference('nationalite039', $nationalite039);
        $this->addReference('nationalite040', $nationalite040);
        $this->addReference('nationalite041', $nationalite041);
        $this->addReference('nationalite042', $nationalite042);
        $this->addReference('nationalite043', $nationalite043);
        $this->addReference('nationalite044', $nationalite044);
        $this->addReference('nationalite045', $nationalite045);
        $this->addReference('nationalite046', $nationalite046);
        $this->addReference('nationalite047', $nationalite047);
        $this->addReference('nationalite048', $nationalite048);
        $this->addReference('nationalite049', $nationalite049);
        $this->addReference('nationalite050', $nationalite050);
        $this->addReference('nationalite051', $nationalite051);
        $this->addReference('nationalite052', $nationalite052);
        $this->addReference('nationalite053', $nationalite053);
        $this->addReference('nationalite054', $nationalite054);
        $this->addReference('nationalite055', $nationalite055);
        $this->addReference('nationalite056', $nationalite056);
        $this->addReference('nationalite057', $nationalite057);
        $this->addReference('nationalite058', $nationalite058);
        $this->addReference('nationalite059', $nationalite059);
        $this->addReference('nationalite060', $nationalite060);
        $this->addReference('nationalite061', $nationalite061);
        $this->addReference('nationalite062', $nationalite062);
        $this->addReference('nationalite063', $nationalite063);
        $this->addReference('nationalite064', $nationalite064);
        $this->addReference('nationalite065', $nationalite065);
        $this->addReference('nationalite066', $nationalite066);
        $this->addReference('nationalite067', $nationalite067);
        $this->addReference('nationalite068', $nationalite068);
        $this->addReference('nationalite069', $nationalite069);
        $this->addReference('nationalite070', $nationalite070);
        $this->addReference('nationalite071', $nationalite071);
        $this->addReference('nationalite072', $nationalite072);
        $this->addReference('nationalite073', $nationalite073);
        $this->addReference('nationalite074', $nationalite074);
        $this->addReference('nationalite075', $nationalite075);
        $this->addReference('nationalite076', $nationalite076);
        $this->addReference('nationalite077', $nationalite077);
        $this->addReference('nationalite078', $nationalite078);
        $this->addReference('nationalite079', $nationalite079);
        $this->addReference('nationalite080', $nationalite080);
        $this->addReference('nationalite081', $nationalite081);
        $this->addReference('nationalite082', $nationalite082);
        $this->addReference('nationalite083', $nationalite083);
        $this->addReference('nationalite084', $nationalite084);
        $this->addReference('nationalite085', $nationalite085);
        $this->addReference('nationalite086', $nationalite086);
        $this->addReference('nationalite087', $nationalite087);
        $this->addReference('nationalite088', $nationalite088);
        $this->addReference('nationalite089', $nationalite089);
        $this->addReference('nationalite090', $nationalite090);
        $this->addReference('nationalite091', $nationalite091);
        $this->addReference('nationalite092', $nationalite092);
        $this->addReference('nationalite093', $nationalite093);
        $this->addReference('nationalite094', $nationalite094);
        $this->addReference('nationalite095', $nationalite095);
        $this->addReference('nationalite096', $nationalite096);
        $this->addReference('nationalite097', $nationalite097);
        $this->addReference('nationalite098', $nationalite098);
        $this->addReference('nationalite099', $nationalite099);
        $this->addReference('nationalite100', $nationalite100);
        $this->addReference('nationalite101', $nationalite101);
        $this->addReference('nationalite102', $nationalite102);
        $this->addReference('nationalite103', $nationalite103);
        $this->addReference('nationalite104', $nationalite104);
        $this->addReference('nationalite105', $nationalite105);
        $this->addReference('nationalite106', $nationalite106);
        $this->addReference('nationalite107', $nationalite107);
        $this->addReference('nationalite108', $nationalite108);
        $this->addReference('nationalite109', $nationalite109);
        $this->addReference('nationalite110', $nationalite110);
        $this->addReference('nationalite111', $nationalite111);
        $this->addReference('nationalite112', $nationalite112);
        $this->addReference('nationalite113', $nationalite113);
        $this->addReference('nationalite114', $nationalite114);
        $this->addReference('nationalite115', $nationalite115);
        $this->addReference('nationalite116', $nationalite116);
        $this->addReference('nationalite117', $nationalite117);
        $this->addReference('nationalite118', $nationalite118);
        $this->addReference('nationalite119', $nationalite119);
        $this->addReference('nationalite120', $nationalite120);
        $this->addReference('nationalite121', $nationalite121);
        $this->addReference('nationalite122', $nationalite122);
        $this->addReference('nationalite123', $nationalite123);
        $this->addReference('nationalite124', $nationalite124);
        $this->addReference('nationalite125', $nationalite125);
        $this->addReference('nationalite126', $nationalite126);
        $this->addReference('nationalite127', $nationalite127);
        $this->addReference('nationalite128', $nationalite128);
        $this->addReference('nationalite129', $nationalite129);
        $this->addReference('nationalite130', $nationalite130);
        $this->addReference('nationalite131', $nationalite131);
        $this->addReference('nationalite132', $nationalite132);
        $this->addReference('nationalite133', $nationalite133);
        $this->addReference('nationalite134', $nationalite134);
        $this->addReference('nationalite135', $nationalite135);
        $this->addReference('nationalite136', $nationalite136);
        $this->addReference('nationalite137', $nationalite137);
        $this->addReference('nationalite138', $nationalite138);
        $this->addReference('nationalite139', $nationalite139);
        $this->addReference('nationalite140', $nationalite140);
        $this->addReference('nationalite141', $nationalite141);
        $this->addReference('nationalite142', $nationalite142);
        $this->addReference('nationalite143', $nationalite143);
        $this->addReference('nationalite144', $nationalite144);
        $this->addReference('nationalite145', $nationalite145);
        $this->addReference('nationalite146', $nationalite146);
        $this->addReference('nationalite147', $nationalite147);
        $this->addReference('nationalite148', $nationalite148);
        $this->addReference('nationalite149', $nationalite149);
        $this->addReference('nationalite150', $nationalite150);
        $this->addReference('nationalite151', $nationalite151);
        $this->addReference('nationalite152', $nationalite152);
        $this->addReference('nationalite153', $nationalite153);
        $this->addReference('nationalite154', $nationalite154);
        $this->addReference('nationalite155', $nationalite155);
        $this->addReference('nationalite156', $nationalite156);
        $this->addReference('nationalite157', $nationalite157);
        $this->addReference('nationalite158', $nationalite158);
        $this->addReference('nationalite159', $nationalite159);
        $this->addReference('nationalite160', $nationalite160);
        $this->addReference('nationalite161', $nationalite161);
        $this->addReference('nationalite162', $nationalite162);
        $this->addReference('nationalite163', $nationalite163);
        $this->addReference('nationalite164', $nationalite164);
        $this->addReference('nationalite165', $nationalite165);
        $this->addReference('nationalite166', $nationalite166);
        $this->addReference('nationalite167', $nationalite167);
        $this->addReference('nationalite168', $nationalite168);
        $this->addReference('nationalite169', $nationalite169);
        $this->addReference('nationalite170', $nationalite170);
        $this->addReference('nationalite171', $nationalite171);
        $this->addReference('nationalite172', $nationalite172);
        $this->addReference('nationalite173', $nationalite173);
        $this->addReference('nationalite174', $nationalite174);
        $this->addReference('nationalite175', $nationalite175);
        $this->addReference('nationalite176', $nationalite176);
        $this->addReference('nationalite177', $nationalite177);
        $this->addReference('nationalite178', $nationalite178);
        $this->addReference('nationalite179', $nationalite179);
        $this->addReference('nationalite180', $nationalite180);
        $this->addReference('nationalite181', $nationalite181);
        $this->addReference('nationalite182', $nationalite182);
        $this->addReference('nationalite183', $nationalite183);
        $this->addReference('nationalite184', $nationalite184);
        $this->addReference('nationalite185', $nationalite185);
        $this->addReference('nationalite186', $nationalite186);
        $this->addReference('nationalite187', $nationalite187);
        $this->addReference('nationalite188', $nationalite188);
        $this->addReference('nationalite189', $nationalite189);
        $this->addReference('nationalite190', $nationalite190);
        $this->addReference('nationalite191', $nationalite191);
        $this->addReference('nationalite192', $nationalite192);
        $this->addReference('nationalite193', $nationalite193);
        $this->addReference('nationalite194', $nationalite194);
        $this->addReference('nationalite195', $nationalite195);
        $this->addReference('nationalite196', $nationalite196);
        $this->addReference('nationalite197', $nationalite197);
        $this->addReference('nationalite198', $nationalite198);
        $this->addReference('nationalite199', $nationalite199);
        $this->addReference('nationalite200', $nationalite200);
        $this->addReference('nationalite201', $nationalite201);
        $this->addReference('nationalite202', $nationalite202);
        $this->addReference('nationalite203', $nationalite203);
        $this->addReference('nationalite204', $nationalite204);
        $this->addReference('nationalite205', $nationalite205);
        $this->addReference('nationalite206', $nationalite206);
        $this->addReference('nationalite207', $nationalite207);
        $this->addReference('nationalite208', $nationalite208);
        $this->addReference('nationalite209', $nationalite209);
        $this->addReference('nationalite210', $nationalite210);
        $this->addReference('nationalite211', $nationalite211);
        $this->addReference('nationalite212', $nationalite212);
        $this->addReference('nationalite213', $nationalite213);
        $this->addReference('nationalite214', $nationalite214);
        $this->addReference('nationalite215', $nationalite215);
        $this->addReference('nationalite216', $nationalite216);
        $this->addReference('nationalite217', $nationalite217);
        $this->addReference('nationalite218', $nationalite218);
        $this->addReference('nationalite219', $nationalite219);
        $this->addReference('nationalite220', $nationalite220);
        $this->addReference('nationalite221', $nationalite221);
        $this->addReference('nationalite222', $nationalite222);
        $this->addReference('nationalite223', $nationalite223);
        $this->addReference('nationalite224', $nationalite224);
        $this->addReference('nationalite225', $nationalite225);
        $this->addReference('nationalite226', $nationalite226);
        $this->addReference('nationalite227', $nationalite227);
        $this->addReference('nationalite228', $nationalite228);
        $this->addReference('nationalite229', $nationalite229);
        $this->addReference('nationalite230', $nationalite230);
        $this->addReference('nationalite231', $nationalite231);
        $this->addReference('nationalite232', $nationalite232);
        $this->addReference('nationalite233', $nationalite233);
        $this->addReference('nationalite234', $nationalite234);
        
    }

    public function getOrder()
    {
        // the order in which fixtures will be loaded
        return 1;
    }
 
}