<?php

namespace Rohea\OpenXClientBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('RoheaOpenXClientBundle:Default:index.html.twig', array('name' => $name));
    }
}
