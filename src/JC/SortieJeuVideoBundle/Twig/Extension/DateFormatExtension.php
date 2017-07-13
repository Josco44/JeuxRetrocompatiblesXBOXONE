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

        $formatter = new \IntlDateFormatter('fr_FR',
        	                               \IntlDateFormatter::LONG,
                                           \IntlDateFormatter::NONE,
                                           'Europe/Paris',
                                           \IntlDateFormatter::GREGORIAN );
		return $formatter->format($date);
	}

	public function getName()
	{
		return 'dateFormat_extension';
	}
}