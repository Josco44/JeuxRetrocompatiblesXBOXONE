<?php

namespace JC\SortieJeuVideoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request; 

class RetroXboxOneController extends Controller
{
    public function indexAction()
    {

    	$repository = $this->getDoctrine()->getManager()->getRepository('JCSortieJeuVideoBundle:SortieJeuVideo');

    	$listLastExitGame = $repository->findLastExitGame(12);
        $listLastTripleAGame = $repository->findTripleAGame(12);

        return $this->render('JCSortieJeuVideoBundle:RetroXboxOne:index.html.twig',array("listLastExitGames" => $listLastExitGame,
                                                                                         "listLastTripleAGames" => $listLastTripleAGame));
    }

    public function detailAction($id)
    {

    	$repository = $this->getDoctrine()->getManager()->getRepository('JCSortieJeuVideoBundle:SortieJeuVideo');

    	$sortieJeuVideo = $repository->find($id);

    	return $this->render('JCSortieJeuVideoBundle:RetroXboxOne:detail.html.twig',array("sortieJeuVideo" => $sortieJeuVideo));

    }

    public function allAction(Request $request)
    {

        $em    = $this->get('doctrine.orm.entity_manager');
        $dql   = "SELECT a FROM JCSortieJeuVideoBundle:SortieJeuVideo a";
        $query = $em->createQuery($dql);

        $paginator  = $this->get('knp_paginator');
        $pagination = $paginator->paginate($query, /* query NOT result */
                                           $request->query->getInt('page', 1), /*page number*/
                                           12); /*limit per page*/

        return $this->render('JCSortieJeuVideoBundle:RetroXboxOne:all.html.twig', array('pagination' => $pagination));        

    }

    public function countAction()
    {

        $repository = $this->getDoctrine()->getManager()->getRepository('JCSortieJeuVideoBundle:SortieJeuVideo');

        $count = $repository->findCountGame();

        return $this->render('JCSortieJeuVideoBundle:RetroXboxOne:count.html.twig', array('count' => $count));

    }

}
