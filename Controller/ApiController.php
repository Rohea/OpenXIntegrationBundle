<?php

namespace Rohea\OpenXIntegrationBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ApiController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('RoheaOpenXClientBundle:Default:index.html.twig', array('name' => $name));
    }
}
