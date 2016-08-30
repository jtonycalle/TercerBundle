<?php

namespace Tony\TercerBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('TonyTerceraBundle:Default:index.html.twig');
    }
}
