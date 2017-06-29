<?php

namespace JC\SortieJeuVideoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('JCSortieJeuVideoBundle:Default:index.html.twig');
    }
}
