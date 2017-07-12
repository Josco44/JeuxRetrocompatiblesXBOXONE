<?php

namespace JC\SortieJeuVideoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class RetroXboxOneController extends Controller
{
    public function indexAction()
    {

    	$repository = $this->getDoctrine()->getManager()->getRepository('JCSortieJeuVideoBundle:SortieJeuVideo');

    	$listLastExitGame = $repository->findLastExitGame(6);

        return $this->render('JCSortieJeuVideoBundle:RetroXboxOne:index.html.twig',array("listLastExitGames" => $listLastExitGame));
    }

    public function detailAction($id)
    {

    	$repository = $this->getDoctrine()->getManager()->getRepository('JCSortieJeuVideoBundle:SortieJeuVideo');

    	$sortieJeuVideo = $repository->find($id);

    	return $this->render('JCSortieJeuVideoBundle:RetroXboxOne:detail.html.twig',array("sortieJeuVideo" => $sortieJeuVideo));

    }

}
