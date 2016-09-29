<?php

namespace SuccessFacileBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Form\Form;


use SuccessFacileBundle\Entity\Quotite;

Class QuotiteController extends Controller
{
	 public function  indexAction()
	{
		$combien = new Quotite;
		$formBuilder = $this->createFormBuilder($combien);
		$formBuilder
				->add ('patrimoine', 'integer')
				->add ('child', 'integer')
				->add ('marie', 'choice', array('choices'=>array(1=>'Vous êtes marié(e)', 0=>'Vous n\'êtes pas marié(e)')));
		
		$form = $formBuilder->getForm();

		$request = $this->getRequest();
		if ($request->getMethod() == 'POST')
		{
			$form->bind($request);
			if ($form->isValid() && $combien->getChild() >= 0 && $combien->getPatrimoine() >= 0)
			{
				$patrimoine = $combien->getPatrimoine();
				$child = $combien->getChild();
				$marie = $combien->getMarie();
				if ($marie == TRUE)
				{
					$patrimoine = $patrimoine / 2;
				}
				if ($child == 0)
				{
					$pourcentQD = 100;
				}
				if ($child == 0 && $marie == TRUE)
				{
					$pourcentQD = 75;
				}	
				if ($child == 1)
				{
					$pourcentQD = 50;
				}	
				if ($child == 2)
				{
					$pourcentQD = 33.3;
				}	
				if ($child >= 3)
				{
					$pourcentQD = 25;
				}	
				$QD = $patrimoine * $pourcentQD / 100;
				$reste = $patrimoine - $QD;
				return $this->render('SuccessFacileBundle:Quotite:result.html.twig', array('patrimoine'=>$patrimoine, 'child'=>$child, 'marie'=>$marie, 'pourcentQD'=>$pourcentQD, 'reste'=>$reste, 'QD'=>$QD));
			}
		}
		return $this->render('SuccessFacileBundle:Quotite:form.html.twig', array('form'=> $form->createView()));
	}			
}
?>
