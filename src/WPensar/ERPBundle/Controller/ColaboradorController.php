<?php

namespace WPensar\ERPBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ColaboradorController extends Controller
{
    public function indexAction()
    {
        return $this->render('WPensarERPBundle:Colaborador:index.html.twig');
    }
}