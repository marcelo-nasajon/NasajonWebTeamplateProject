<?php

namespace Nasajon\CalendarioBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;


use Symfony\Component\Security\Core\SecurityContextInterface;

class DefaultController extends Controller
{
    public function indexAction()
    {
//     	var_dump($_SESSION);
//     	var_dump($this->getRequest()->getSession()->get(SecurityContextInterface::LAST_USERNAME));
//     	var_dump($this->getRequest()->getSession());
    	
    	return $this->render('NasajonCalendarioBundle:Default:index.html.twig', array('user'=>$this->getUser()));
    }

}
