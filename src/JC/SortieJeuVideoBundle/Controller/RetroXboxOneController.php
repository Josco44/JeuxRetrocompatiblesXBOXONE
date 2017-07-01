<?php

namespace JC\SortieJeuVideoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class RetroXboxOneController extends Controller
{
    public function indexAction()
    {
        return $this->render('JCSortieJeuVideoBundle:RetroXboxOne:index.html.twig');
    }
}
