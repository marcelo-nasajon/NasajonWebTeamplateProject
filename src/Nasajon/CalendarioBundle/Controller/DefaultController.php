<?php

namespace Nasajon\CalendarioBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('NasajonCalendarioBundle:Default:index.html.twig');
    }
}
