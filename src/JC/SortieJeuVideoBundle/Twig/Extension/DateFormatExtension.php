<?php
namespace JC\SortieJeuVideoBundle\Twig\Extension;

class DateFormatExtension extends \Twig_Extension
{
	public function getFilters()
	{
		return array(new \Twig_SimpleFilter('dateFormat',array($this,'dateFormat')));
	}

	function dateFormat($date)
	{
		$jour = array("Dimanche","Lundi","Mardi","Mercredi","Jeudi","Vendredi","Samedi");
		$mois = array("Janvier","Février","Mars","Avril","Mai","Juin","Juillet","Août","Septembre","Octobre","Novembre","Décembre");
		var_dump($date);
		var_dump();
		// $dateFr = $jour[$date("w")]." ".$mois[$date("n")]." ".$date("Y");
		// return $dateFr;
		return "";
	}

	public function getName()
	{
		return 'dateFormat_extension';
	}
}