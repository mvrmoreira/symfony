<?php

namespace WPensar\ERPBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('WPensarERPBundle:Default:index.html.twig', array('name' => $name));
    }
}
