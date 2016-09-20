<?php

namespace SuccessFacileBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Form\Form;


use SuccessFacileBundle\Entity\Combien;

Class CombienController extends Controller
{
	 public function  indexAction()
	{
		$combien = new Combien;
		$formBuilder = $this->createFormBuilder($combien);
		$formBuilder
				->add ('somme', 'integer')
				->add('handicap', 'choice', array('choices'=>array(0 => 'Je ne suis pas handicape', 1=>'Je suis handicape')))
				->add('lien', 'choice', array('choices'=>array(0 => 'epoux(se)', 8=>'partenaire de PACS', 1=>'pere/mere ou autre ascendant', 2=>'fille/fils', 3=>'petit-enfant ou arriere petit enfant', 4=> 'frere/soeur', 5=>'neveu ou niece', 6=>'parent jusqu au 4eme degre inclus', 7=>'Autre')));
		
		$form = $formBuilder->getForm();

		$request = $this->getRequest();
		if ($request->getMethod() == 'POST')
		{
			$form->bind($request);
			if ($form->isValid())
			{
				$somme = $combien->getSomme();
				$part = $combien->getSomme();
				$lien = $combien->getLien();
				$handicap = $combien->getHandicap();
				$tax = $this->container->get('oc_platform.droitsuccess');
				if($combien->getHandicap() == TRUE)
					$part = $part - 159325;
				if($combien->getLien() == 0)
				{
					$taxe = 0;
					$result = $somme - $taxe;
				}	
				if($combien->getLien() == 1)
				{
					$taxe = $tax->Taxecumule0($part);
					$result = $somme - $taxe;
				}	
				if($combien->getLien() == 2)
				{
					$taxe = $tax->Taxecumule0($part);
					$result = $somme - $taxe;
				}	
				if($combien->getLien() == 3)
				{
					$taxe = $tax->Taxecumule2($part);
					$result = $somme - $taxe;
				}	
				if($combien->getLien() == 4)
				{
					$taxe = $tax->Taxecumule1($part);
					$result = $somme - $taxe;
				}	
				if($combien->getLien() == 5)
				{
					$taxe = $tax->Taxecumule4($part);
					$result = $somme - $taxe;
				}	
				if($combien->getLien() == 6)
				{
					$taxe = $tax->Taxecumule2($part);
					$result = $somme - $taxe;
				}	
				if($combien->getLien() == 7 || $combien->getLien() == 8)
				{
					$taxe = $tax->Taxecumule3($part);
					$result = $somme - $taxe;
				}
				return $this->render('SuccessFacileBundle:Combien:result.html.twig', array('taxe'=>$taxe, 'somme'=>$somme, 'lien'=>$lien, 'handicap'=>$handicap, 'result'=>$result));
			
			}
		}
		return $this->render('SuccessFacileBundle:Combien:form.html.twig', array('form'=> $form->createView()));
	}			
}
?>
