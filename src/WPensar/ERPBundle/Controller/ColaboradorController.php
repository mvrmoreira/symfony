<?php

namespace WPensar\ERPBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

use WPensar\ERPBundle\Entity\Colaborador;
use WPensar\ERPBundle\Form\Type\ColaboradorType;

class ColaboradorController extends Controller
{
    public function indexAction()
    {
        return $this->render('WPensarERPBundle:Colaborador:index.html.twig');
    }
	
	public function cadastrarAction(Request $request)
	{
		$colaborador = new Colaborador();		
		$form = $this->createForm(new ColaboradorType, $colaborador);
		
		if ($request->isMethod('POST'))
		{
			$form->bind($request);
			
			if ($form->isValid())
			{
				$em = $this->getDoctrine()->getManager();
				$em->persist($colaborador);
				$em->flush();			
				
				return $this->redirect($this->generateUrl('wpensar_erp_colaborador_listar'));
			}
		}
		
		return $this->render('WPensarERPBundle:Colaborador:form.html.twig', array(
			'form' => $form->createView()
		));
	}
}