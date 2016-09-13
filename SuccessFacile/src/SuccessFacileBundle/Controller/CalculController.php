<?php

//src/SuccessFacileBundle/controller/CalculController.php

namespace SuccessFacileBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Form\Form;


use SuccessFacileBundle\Entity\Usufruit;

class CalculController extends Controller
{
	public function indexAction()
	{
		$usufruit = new Usufruit; 
	
		$formBuilder = $this->createFormBuilder($usufruit);
		$formBuilder
			->add('age', 'integer')
			->add('enfant', 'integer')
			->add('residence', 'integer')
			->add('epargne', 'integer')
			->add('autre', 'integer');
		$form = $formBuilder->getForm();
		
		$request = $this->getRequest();
		if ($request->getMethod() == 'POST')
		{
			$form->bind($request);
			if ($form->isValid())
			{
				$age = $usufruit->getAge();
				$enfant = $usufruit->getEnfant();
				$residence = $usufruit->getResidence();
				$epargne = $usufruit->getEpargne();
				$autre = $usufruit->getAutre();
				
				if ($age < 200 && $age >= 0 && $enfant > 0)
				{
					return $this->CalculAction($age, $enfant, $residence, $epargne, $autre);
				}
				else
				{
					echo '<script type="text/javascript">alert("Votre formulaire n\'est pas valide.")</script>';
				}
			}
		}
		return $this->render('SuccessFacileBundle:Site:service.html.twig', array('form' => $form->createView()));
	}

	public function CalculAction($age, $enfant, $residence, $epargne, $autre)
	{
		$val_usufruit = 90;
		if ( $age >= 21 && $age < 31)
			$val_usufruit = 80;
		if ( $age >= 31 && $age < 41)
			$val_usufruit = 70;
		if ( $age >= 41 && $age < 51)
			$val_usufruit = 60;
		if ( $age >= 51 && $age < 61)
			$val_usufruit = 50;
		if ( $age >= 61 && $age < 71)
			$val_usufruit = 40;
		if ( $age >= 71 && $age < 81)
			$val_usufruit = 30;
		if ( $age >= 81 && $age < 91)
			$val_usufruit = 20;
		if ( $age >= 91)
			$val_usufruit = 10;
		
		$nue_propriete = 100 - $val_usufruit;
		$patrimoine = $residence + $epargne + $autre;
		$revenant = $patrimoine / 2;
		// OPTION 1
		$conjoint_opt1 = $revenant / 100 * $val_usufruit;
		$enfant_opt1 = $revenant * $nue_propriete / 100 / $enfant;
		// OPTION 2		
		$conjoint_opt2 = $revenant / 4;
		$enfant_opt2 = $revenant * 3 / 4 / $enfant;
		// OPTION 3
		$conjoint_opt3 = $revenant * 3 / 4 * $val_usufruit / 100 + $conjoint_opt2;
		$enfant_opt3 = $revenant * 3 / 4 * $nue_propriete / 100 / $enfant;
		//OPTION 4
		if ($enfant == 1)
			$conjoint_opt4 = $revenant / 2;
		if ($enfant == 2)
			$conjoint_opt4 = $revenant / 3;
		if ($enfant >= 3)
			$conjoint_opt4 = $revenant / 4;
		$enfant_opt4 = $revenant - $conjoint_opt4;
		$enfant_opt4 = $enfant_opt4 / $enfant;

		return $this->render('SuccessFacileBundle:Site:resultat.html.twig', array('age' => $age, 'val_usufruit'=>$val_usufruit, 
		'enfant'=>$enfant, 'nue_propriete'=>$nue_propriete, 'revenant'=>$revenant, 'residence'=>$residence, 'epargne'=>$epargne, 
		'autre'=>$autre, 'patrimoine'=>$patrimoine, 
		'conjoint_opt1'=>$conjoint_opt1, 'enfant_opt1'=>$enfant_opt1, 
		'conjoint_opt2'=>$conjoint_opt2, 'enfant_opt2'=>$enfant_opt2, 
		'conjoint_opt3'=>$conjoint_opt3, 'enfant_opt3'=>$enfant_opt3, 
		'conjoint_opt4'=>$conjoint_opt4, 'enfant_opt4'=>$enfant_opt4));
	}
}

?>
