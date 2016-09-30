<?php

//src/SuccessFacileBundle/controller/CalculController.php

namespace SuccessFacileBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Form\Form;


use SuccessFacileBundle\Entity\Usufruit;
use SuccessFacileBundle\Entity\Situation;
use SuccessFacileBundle\Entity\Situnochild;


class CalculController extends Controller
{

	public function indexAction()
	{
		$situation = new Situation;

		$formBuilder = $this->createFormBuilder($situation);
		$formBuilder 
					->add('situ', 'choice', array('choices'=>array(0=>'Célibataire', 1=>'Marié(e)', 2=>'Veuf(ve)', 3=>'Divorcé(e)', 5=>'Partenaire d\'un PACS', 6=>'En concubinage')));
		$form = $formBuilder->getForm();
		
		$request = $this->getRequest();
		if ($request->getMethod() == 'POST')
		{
			$form->bind($request);
			if ($form->isValid())
			{
				$session = $this->getRequest()->getSession();
				if ($situation->getSitu() == 0)
				{
					$session->set('recompose', 0);
					$session->set('situ', 0);
					return $this->Form_NRAction();
				}
				if ($situation->getSitu() == 2)
				{
					$session->set('recompose', 0);
					$session->set('situ', 2);
					return $this->Form_NRAction();
				}
				if ($situation->getSitu() == 3)
				{
					$session->set('recompose', 0);
					$session->set('situ', 3);
					return $this->Form_NRAction();
				}
			// MARIE/PACS/EC => FORM_ifR recompose ou non
				if ($situation->getSitu() == 1)
				{
					$session->set('situ', 1);
					return $this->Form_ifRAction();
				}
				if ($situation->getSitu() == 5)
				{
					$session->set('situ', 5);
					return $this->Form_ifRAction();
				}
				if ($situation->getSitu() == 6)
				{
					$session->set('situ', 6);
					return $this->Form_ifRAction();
				}
				
			}
		}
		return $this->render('SuccessFacileBundle:Site:situation.html.twig', array('form' => $form->createView()));
	}

/*
*
*   FORM if RECOMPOSE
*
*/

	public function Form_ifRAction()
	{
		$situation = new Situation;

		$formBuilder = $this->createFormBuilder($situation);
		$formBuilder 
					->add('recompose', 'choice', array('choices'=>array(0=>'Famille non recomposée', 1=>'Famille recomposée')));
		$form = $formBuilder->getForm();
		
		$request = $this->getRequest();
		if ($request->getMethod() == 'POST')
		{
			$form->bind($request);
			if ($form->isValid())
			{
				$session = $this->getRequest()->getSession();
				$situ = $session->get('situ');
			
			// NON recompose	
				if ($situation->getRecompose() == FALSE)
				{
					$session->set('recompose', 0);
					return $this->Form_NRAction();
				}
			// recompose	
				if ($situation->getRecompose() == TRUE)
				{
					$session->set('recompose', 1);
					return $this->Form_RAction();
				}
			}
		}
		return $this->render('SuccessFacileBundle:Site:formrecompose.html.twig', array('form' => $form->createView()));	
	}

//FROMULAIRE AGE ENFANT NR
	public function Form_NRAction()
	{
		$usufruit = new Usufruit; 
		
		$formBuilder = $this->createFormBuilder($usufruit);
		$formBuilder
			->add('age', 'integer')
			->add('enfant', 'integer');
		$form = $formBuilder->getForm();
		
		$request = $this->getRequest();
		if ($request->getMethod() == 'POST')
		{
			$form->bind($request);
			if ($form->isValid())
			{
				$age = $usufruit->getAge();
				$enfant = $usufruit->getEnfant();
				$session = $this->getRequest()->getSession();
				$session->set('age', $age);
				$session->set('enfant', $enfant);
				$session->set('enfant_conjoint', 0);
				$session->set('enfant_perso', 0);
				if ($age >= 0 && $enfant >= 0)
					return $this->FormpatrimoineAction();
			}
		}
		return $this->render('SuccessFacileBundle:Site:form_nr.html.twig', array('form1' => $form->createView()));
	}

//FROMULAIRE AGE ENFANT R
	public function Form_RAction()
	{
		$usufruit = new Usufruit; 
		
		$formBuilder = $this->createFormBuilder($usufruit);
		$formBuilder
			->add('age', 'integer')
			->add('enfant', 'integer')
			->add('enfant_conjoint', 'integer')
			->add('enfant_perso', 'integer');
		$form = $formBuilder->getForm();
		
		$request = $this->getRequest();
		if ($request->getMethod() == 'POST')
		{
			$form->bind($request);
			if ($form->isValid())
			{
				$age = $usufruit->getAge();
				$enfant = $usufruit->getEnfant();
				$enfant_conjoint = $usufruit->getEnfantConjoint();
				$enfant_perso = $usufruit->getEnfantPerso();
				$session = $this->getRequest()->getSession();
				$session->set('age', $age);
				$session->set('enfant', $enfant);
				$session->set('enfant_conjoint', $enfant_conjoint);
				$session->set('enfant_perso', $enfant_perso);
				if ($age >= 0 && $enfant >= 0 && $enfant_conjoint >= 0 && $enfant_perso >= 0)
					return $this->FormpatrimoineAction();
			}
		}
		return $this->render('SuccessFacileBundle:Site:form_r.html.twig', array('form1' => $form->createView()));
	}

// FORM PATRIMOINE
	public function FormpatrimoineAction()
	{
		$usufruit = new Usufruit; 
		
		$formBuilder = $this->createFormBuilder($usufruit);
		$formBuilder
			->add('residence', 'integer')
			->add('opt_residence', 'choice', array('choices'=>array(0=>'Pleine propriété', 1=>'SCI', 2=>'indivision', 3=>'Nue_propriété', 4=>'Usufruit')))
			->add('epargne', 'integer')
			->add('autre', 'integer');
		$form = $formBuilder->getForm();
		
		$request = $this->getRequest();
		if ($request->getMethod() == 'POST')
		{
			$form->bind($request);
			if ($form->isValid())
			{
				$residence = $usufruit->getResidence();
				$epargne = $usufruit->getEpargne();
				$autre = $usufruit->getAutre();
				$opt_residence = $usufruit->getOptResidence();
				
				$session = $this->getRequest()->getSession();
				$session->set('residence', $residence);
				$session->set('epargne', $epargne);
				$session->set('autre', $autre);
				$session->set('opt_residence', $opt_residence);
				if ($opt_residence == 1 || $opt_residence == 2)
					return $this->FormpourcentAction();
				else
				{
					if($opt_residence == 0 || $opt_residence == 3)
						$session->set('pourcent_residence', 100);
					if($opt_residence == 4)
						$session->set('pourcent_residence', 0);
					if ($session->get('enfant') == 0 && $session->get('enfant_perso') == 0)
						return $this->FormNEAction();
					if ($session->get('recompose') == 0)
					{
						if ($session->get('situ') == 0 || $session->get('situ') == 2 || $session->get('situ') == 3 || $session->get('situ') == 5 || $session->get('situ') == 6)
							return $this->Base_NRresultAction();
						if ($session->get('situ') == 1)
							return $this->M_NRresultAction();
					}
					if ($session->get('recompose') == 1)
					{
						if ($session->get('situ') == 1)
							return $this->M_RresultAction();
						if ($session->get('situ') == 5)
							return $this->P_RresultAction();
						if ($session->get('situ') == 6)
							return $this->Ec_RresultAction();
					}
				}
			}
		}
		return $this->render('SuccessFacileBundle:Site:formpatrimoine.html.twig', array('form1' => $form->createView()));
	}

// FORM degre propriete
	public function FormpourcentAction()
	{
		$usufruit = new Usufruit; 
		
		$formBuilder = $this->createFormBuilder($usufruit);
		$formBuilder
			->add('pourcent_residence', 'integer');
		$form = $formBuilder->getForm();
		
		$request = $this->getRequest();
		if ($request->getMethod() == 'POST')
		{
			$form->bind($request);
			if ($form->isValid())
			{
				$pourcent_residence = $usufruit->getPourcentResidence();
				if ($pourcent_residence <= 100 && $pourcent_residence >= 0)
				{
					$session = $this->getRequest()->getSession();
					$session->set('pourcent_residence', $pourcent_residence);
					if ($session->get('enfant') == 0 && $session->get('enfant_perso') == 0)
						return $this->FormNEAction();
					if ($session->get('recompose') == 0)
					{
						if ($session->get('situ') == 0 || $session->get('situ') == 2 || $session->get('situ') == 3 || $session->get('situ') == 5 || $session->get('situ') == 6)
							return $this->Base_NRresultAction();
						if ($session->get('situ') == 1)
							return $this->M_NRresultAction();
					}
					if ($session->get('recompose') == 1)
					{
						if ($session->get('situ') == 1)
							return $this->M_RresultAction();
						if ($session->get('situ') == 5)
							return $this->P_RresultAction();
						if ($session->get('situ') == 6)
							return $this->Ec_RresultAction();
					}
				}
			}
		}
		return $this->render('SuccessFacileBundle:Site:formpourcent.html.twig', array('form1' => $form->createView()));
	}
/*
*
*   FORMULAIRE PERE/MERE/FRERE ET SOEUR
*
*/

	public function FormNEAction()
	{
		$nochild = new Situnochild;
		$formBuilder = $this->createFormBuilder($nochild);
		$formBuilder
			->add('maman', 'choice', array('choices'=>array(1=>'Vivante', 0=>'Décédée')))
			->add('papa', 'choice', array('choices'=>array(1=>'Vivant', 0=>'Décédé')))
			->add('siblings', 'integer');
		$form = $formBuilder->getForm();
		
		$request = $this->getRequest();
		if ($request->getMethod() == 'POST')
		{
			$form->bind($request);
			if ($form->isValid())
			{
				$mere = $nochild->getMaman();
				 $pere= $nochild->getPapa(); 
				$siblings= $nochild->getSiblings();
				$session = $this->getRequest()->getSession();
				if ($session->get('situ') == 0)
					return $this->C_NEresultAction($pere, $mere, $siblings);
				if ($session->get('situ') == 1)
					return $this->M_NEresultAction($pere, $mere, $siblings);
				if ($session->get('situ') == 2)
					return $this->V_NEresultAction($pere, $mere, $siblings);
				if ($session->get('situ') == 3)
					return $this->D_NEresultAction($pere, $mere, $siblings);
				if ($session->get('situ') == 5)
					return $this->P_NEresultAction($pere, $mere, $siblings);
				if ($session->get('situ') == 6)
					return $this->Ec_NEresultAction($pere, $mere, $siblings);
			}
		}
		return $this->render('SuccessFacileBundle:Site:formnochild.html.twig', array('form' => $form->createView()));	
	}
	


/*
*
*   FORMULAIRE GRAND PARENT
*
*/

	public function FormgpAction()
	{
		$GP = new Situnochild;
		$formBuilder = $this->createFormBuilder($GP);
		$formBuilder
			->add('gppaternel', 'choice', array('choices'=>array(1=>'Vivants', 0=>'Decedes')))
			->add('gpmaternel', 'choice', array('choices'=>array(1=>'Vivants', 0=>'Décédés')));
		$form = $formBuilder->getForm();
		
		$request = $this->getRequest();
		if ($request->getMethod() == 'POST')
		{
			$form->bind($request);
			if ($form->isValid())
			{
				$gpp = $GP->getGppaternel();
				 $gpm = $GP->getGpmaternel(); 
				$session = $this->getRequest()->getSession();
					return $this->ResultGPAction($gpp, $gpm);
			}
		}
		return $this->render('SuccessFacileBundle:Site:formgp.html.twig', array('form' => $form->createView()));	
	}




/*
*
*     ALLL RESULT NON RECOMPOSE ET ENFANT
*
*/
	public function Base_NRresultAction()
	{
		$session = $this->getRequest()->getSession();
		$residencetotal = $session->get('residence');
		$opt_residence = $session->get('opt_residence');
		$pourcent_residence = $session->get('pourcent_residence');
		$epargne = $session->get('epargne');
		$autre = $session->get('autre');
		$age = $session->get('age');
		$enfant = $session->get('enfant');
		
		$residencefinal = $residencetotal * $pourcent_residence / 100;
		
		$patrimoine = $residencefinal + $epargne + $autre;
		$part = $patrimoine / $enfant;
		$tax = $this->container->get('oc_platform.droitsuccess');
		$taxe = $tax->Taxecumule0($part);

		return $this->render('SuccessFacileBundle:Site:resultatbase_nr.html.twig', array('age' => $age, 'enfant'=>$enfant, 'part'=>$part, 'taxe'=>$taxe, 'residencefinal'=>$residencefinal, 'pourcent_residence'=>$pourcent_residence, 'opt_residence'=>$opt_residence, 'residencetotal'=>$residencetotal, 'epargne'=>$epargne, 
		'autre'=>$autre, 'patrimoine'=>$patrimoine));
	}

	public function M_NRresultAction()
	{
		$session = $this->getRequest()->getSession();
		$residencetotal = $session->get('residence');
		$opt_residence = $session->get('opt_residence');
		$pourcent_residence = $session->get('pourcent_residence');
		$epargne = $session->get('epargne');
		$autre = $session->get('autre');
		$age = $session->get('age');
		$enfant = $session->get('enfant');
		
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
		
		$tax = $this->container->get('oc_platform.droitsuccess');
		$nue_propriete = 100 - $val_usufruit;
		$residencefinal = $residencetotal * $pourcent_residence / 100;
		$patrimoine = $residencefinal + $epargne + $autre;
		$revenant = $patrimoine;
		// OPTION 1
		$conjoint_opt1 = $revenant / 100 * $val_usufruit;
		$enfant_opt1 = $revenant * $nue_propriete / 100 / $enfant;
		$taxe_opt1 = $tax->Taxecumule0($enfant_opt1);
		// OPTION 2		
		$conjoint_opt2 = $revenant / 4;
		$enfant_opt2 = $revenant * 3 / 4 / $enfant;
		$taxe_opt2 = $tax->Taxecumule0($enfant_opt2);
		// OPTION 3
		$conjoint_opt3 = $revenant * 3 / 4 * $val_usufruit / 100 + $conjoint_opt2;
		$enfant_opt3 = $revenant * 3 / 4 * $nue_propriete / 100 / $enfant;
		$taxe_opt3 = $tax->Taxecumule0($enfant_opt3);
		//OPTION 4
		if ($enfant == 1)
			$conjoint_opt4 = $revenant / 2;
		if ($enfant == 2)
			$conjoint_opt4 = $revenant / 3;
		if ($enfant >= 3)
			$conjoint_opt4 = $revenant / 4;
		$enfant_opt4 = $revenant - $conjoint_opt4;
		$enfant_opt4 = $enfant_opt4 / $enfant;
		$taxe_opt4 = $tax->Taxecumule0($enfant_opt4);

		return $this->render('SuccessFacileBundle:Site:resultatm_nr.html.twig', array('age' => $age, 'val_usufruit'=>$val_usufruit, 
		'enfant'=>$enfant, 'nue_propriete'=>$nue_propriete, 'revenant'=>$revenant, 'residencetotal'=>$residencetotal, 'opt_residence'=>$opt_residence, 'pourcent_residence'=>$pourcent_residence, 'residencefinal'=>$residencefinal, 'epargne'=>$epargne, 
		'autre'=>$autre, 'patrimoine'=>$patrimoine, 
		'conjoint_opt1'=>$conjoint_opt1, 'enfant_opt1'=>$enfant_opt1, 
		'conjoint_opt2'=>$conjoint_opt2, 'enfant_opt2'=>$enfant_opt2, 
		'conjoint_opt3'=>$conjoint_opt3, 'enfant_opt3'=>$enfant_opt3, 
		'conjoint_opt4'=>$conjoint_opt4, 'enfant_opt4'=>$enfant_opt4, 
		'taxe_opt1'=>$taxe_opt1, 'taxe_opt2'=>$taxe_opt2, 
		'taxe_opt3'=>$taxe_opt3, 'taxe_opt4'=>$taxe_opt4));
	}

	





/*
*
*     NON ENFANT
*
*/
	public function ResultGPAction($gpp, $gpm)
	{
			$session = $this->getRequest()->getSession();
			$age = $session->get('age');
			$enfant = $session->get('enfant');
			$residencetotal = $session->get('residence');
		$opt_residence = $session->get('opt_residence');
		$pourcent_residence = $session->get('pourcent_residence');
			$epargne = $session->get('epargne');
			$autre = $session->get('autre');
			$pere = $session->get('pere');
			$mere = $session->get('mere');
			$siblings = $session->get('siblings');

			$residencefinal = $residencetotal * $pourcent_residence / 100;
			$patrimoine = $residencefinal + $epargne + $autre;
			$tax = $this->container->get('oc_platform.droitsuccess');
			
				$part = $patrimoine / 2;
				$taxe = $tax->Taxecumule0($part);			
			return $this->render('SuccessFacileBundle:Site:resultatgp.html.twig', array('age' => $age, 'enfant'=>$enfant, 'residencetotal'=>$residencetotal, 'residencefinal'=>$residencefinal, 'opt_residence'=>$opt_residence, 'pourcent_residence'=>$pourcent_residence, 'epargne'=>$epargne, 
		'autre'=>$autre, 'patrimoine'=>$patrimoine, 'pere'=>$pere, 'mere'=>$mere, 'siblings'=>$siblings, 'gpp'=>$gpp, 'gpm'=>$gpm, 'part'=>$part, 'taxe'=>$taxe));
	
	}



	
	public function C_NEresultAction($pere, $mere, $siblings)
	{
		if ($siblings == 0 && ($pere == FALSE && $mere == FALSE))
		{
			$session = $this->getRequest()->getSession();
			$session->set('pere', $pere);
			$session->set('mere', $mere);
			$session->set('siblings', $siblings);
			return $this->FormgpAction();
		}
		else
		{
			$session = $this->getRequest()->getSession();
			$age = $session->get('age');
			$enfant = $session->get('enfant');
		$opt_residence = $session->get('opt_residence');
		$pourcent_residence = $session->get('pourcent_residence');
			$residencetotal = $session->get('residence');
			$epargne = $session->get('epargne');
			$autre = $session->get('autre');
			

			$residencefinal = $residencetotal * $pourcent_residence / 100;
			$patrimoine = $residencefinal + $epargne + $autre;

			$tax = $this->container->get('oc_platform.droitsuccess');
			if ($siblings == 0 && $pere == TRUE && $mere == TRUE)
			{
				$partP = $patrimoine / 2;
				$taxeP = $tax->Taxecumule0($partP);
				$partE = 0;
				$taxeE = 0;
				$pourcentE = 0;
			}
			if ($siblings == 0 && ($pere == FALSE || $mere == FALSE))
			{
				$partP = $patrimoine;
				$taxeP = $tax->TaxEcumule0($partP);
				$partE = 0;
				$taxeE = 0;
				$pourcentE = 0;
			}
			if ($siblings != 0 && ($pere == FALSE || $mere == FALSE))
			{
				$partP = $patrimoine / 4;
				$taxeP = $tax->Taxecumule0($partP);
				$pourcentE = 75 / $siblings;
			    $partE = $patrimoine * 3 / 4 / $siblings; 	
				$taxeE = $tax->Taxecumule1($partE);
			}
			if ($siblings != 0 && $pere == TRUE && $mere == TRUE)
			{
				$partP = $patrimoine / 4;
				$taxeP = $tax->Taxecumule0($partP);
				$pourcentE = 50 / $siblings;
			    $partE = $patrimoine / 2 / $siblings; 	
				$taxeE = $tax->Taxecumule1($partE);	
			}
			if ($siblings != 0 && $pere == FALSE && $mere == FALSE)
			{
				$partP = 0;
				$taxeP = 0;
				$pourcentE = 100 / $siblings;
			    $partE = $patrimoine / 2 / $siblings; 	
				$taxeE = $tax->Taxecumule1($partE);	
			}
		}

		return $this->render('SuccessFacileBundle:Site:resultatbase_ne.html.twig', array('age' => $age, 'enfant'=>$enfant, 'residencetotal'=>$residencetotal, 'opt_residence'=>$opt_residence, 'pourcent_residence'=>$pourcent_residence, 'residencefinal'=>$residencefinal, 'epargne'=>$epargne, 
		'autre'=>$autre, 'patrimoine'=>$patrimoine, 'pere'=>$pere, 'mere'=>$mere, 'siblings'=>$siblings, 'partP'=>$partP, 'taxeP'=>$taxeP, 'partE'=>$partE, 'taxeE'=>$taxeE, 'pourcentE'=>$pourcentE));
	}




	public function M_NEresultAction($pere, $mere, $siblings)
	{
		$session = $this->getRequest()->getSession();
		$age = $session->get('age');
		$enfant = $session->get('enfant');
		$residencetotal = $session->get('residence');
		$opt_residence = $session->get('opt_residence');
		$pourcent_residence = $session->get('pourcent_residence');
		$epargne = $session->get('epargne');
		$autre = $session->get('autre');
		
		$residencefinal = $residencetotal * $pourcent_residence / 100;
		$patrimoine = $residencefinal + $epargne + $autre;

		$part = $patrimoine / 2;
		$partP = 0;
		$taxeP = 0;
		$partM = $patrimoine / 2;

		$tax = $this->container->get('oc_platform.droitsuccess');
		if ($mere == TRUE && $pere == TRUE)
		{
			$partM = $patrimoine / 4;
			$partP = $patrimoine / 8;
			$taxeP = $tax->Taxecumule0($partP);
		}
		if (($mere == FALSE && $pere == TRUE) || ($mere == TRUE && $pere == FALSE))
		{
			$partM = $part * 3 / 4;
			$partP = $patrimoine / 8;
			$taxeP = $tax->Taxecumule0($partP);
		}

		return $this->render('SuccessFacileBundle:Site:resultatm_ne.html.twig', array('age' => $age, 'enfant'=>$enfant, 'residencetotal'=>$residencetotal, 'opt_residence'=>$opt_residence, 'pourcent_residence'=>$pourcent_residence, 'residencefinal'=>$residencefinal, 'epargne'=>$epargne, 
		'autre'=>$autre, 'patrimoine'=>$patrimoine, 'part'=>$part, 'partP'=>$partP, 'taxeP'=>$taxeP, 'mere'=>$mere, 'siblings'=>$siblings, 'pere'=>$pere, 'partM'=>$partM));
	}

	public function V_NEresultAction($pere, $mere, $siblings)
	{
		if ($siblings == 0 && ($pere == FALSE || $mere == FALSE))
		{
			$session = $this->getRequest()->getSession();
			$session->set('pere', $pere);
			$session->set('mere', $mere);
			$session->set('siblings', $siblings);
			return $this->FormgpAction();
		}
		else
		{
			$session = $this->getRequest()->getSession();
			$age = $session->get('age');
			$enfant = $session->get('enfant');
			$residencetotal = $session->get('residence');
		$opt_residence = $session->get('opt_residence');
		$pourcent_residence = $session->get('pourcent_residence');
			$epargne = $session->get('epargne');
			$autre = $session->get('autre');
		
			$residencefinal = $residencetotal * $pourcent_residence / 100;
			$patrimoine = $residencefinal + $epargne + $autre;
			
			$tax = $this->container->get('oc_platform.droitsuccess');
			if ($siblings == 0 && $pere == TRUE && $mere == TRUE)
			{
				$partP = $patrimoine / 2;
				$taxeP = $tax->Taxecumule0($partP);
				$partE = 0;
				$taxeE = 0;
				$pourcentE = 0;
			}
			if ($siblings == 0 && ($pere == FALSE || $mere == FALSE))
			{
				$partP = $patrimoine;
				$taxeP = $tax->Taxecumule0($partP);
				$partE = 0;
				$taxeE = 0;
				$pourcentE = 0;
			}
			if ($siblings != 0 && ($pere == FALSE || $mere == FALSE))
			{
				$partP = $patrimoine / 4;
				$taxeP = $tax->Taxecumule0($partP);
				$pourcentE = 75 / $siblings;
			    $partE = $patrimoine * 3 / 4 / $siblings; 	
				$taxeE = $tax->Taxecumule1($partE);
			}
			if ($siblings != 0 && $pere == TRUE && $mere == TRUE)
			{
				$partP = $patrimoine / 4;
				$taxeP = $tax->Taxecumule0($partP);
				$pourcentE = 50 / $siblings;
			    $partE = $patrimoine / 2 / $siblings; 	
				$taxeE = $tax->Taxecumule1($partE);	
			}
			if ($siblings != 0 && $pere == FALSE && $mere == FALSE)
			{
				$partP = 0;
				$taxeP = 0;
				$pourcentE = 100 / $siblings;
			    $partE = $patrimoine / 2 / $siblings; 	
				$taxeE = $tax->Taxecumule1($partE);	
			}
		}

		return $this->render('SuccessFacileBundle:Site:resultatbase_ne.html.twig', array('age' => $age, 'enfant'=>$enfant, 'residencetotal'=>$residencetotal, 'opt_residence'=>$opt_residence, 'pourcent_residence'=>$pourcent_residence, 'residencefinal'=>$residencefinal, 'epargne'=>$epargne, 
		'autre'=>$autre, 'patrimoine'=>$patrimoine, 'pere'=>$pere, 'mere'=>$mere, 'siblings'=>$siblings, 'partP'=>$partP, 'taxeP'=>$taxeP, 'partE'=>$partE, 'taxeE'=>$taxeE, 'pourcentE'=>$pourcentE));
	}
	
	public function D_NEresultAction($pere, $mere, $siblings)
	{
		if ($siblings == 0 && ($pere == FALSE || $mere == FALSE))
		{
			$session = $this->getRequest()->getSession();
			$session->set('pere', $pere);
			$session->set('mere', $mere);
			$session->set('siblings', $siblings);
			return $this->FormgpAction();
		}
		else
		{
			$session = $this->getRequest()->getSession();
			$age = $session->get('age');
			$enfant = $session->get('enfant');
			$residencetotal = $session->get('residence');
		$opt_residence = $session->get('opt_residence');
		$pourcent_residence = $session->get('pourcent_residence');
			$epargne = $session->get('epargne');
			$autre = $session->get('autre');
		
			$residencefinal = $residencetotal * $pourcent_residence / 100;
			$patrimoine = $residencefinal + $epargne + $autre;
			
			$tax = $this->container->get('oc_platform.droitsuccess');
			if ($siblings == 0 && $pere == TRUE && $mere == TRUE)
			{
				$partP = $patrimoine / 2;
				$taxeP = $tax->Taxecumule0($partP);
				$partE = 0;
				$taxeE = 0;
				$pourcentE = 0;
			}
			if ($siblings == 0 && ($pere == FALSE || $mere == FALSE))
			{
				$partP = $patrimoine;
				$taxeP = $tax->Taxecumule0($partP);
				$partE = 0;
				$taxeE = 0;
				$pourcentE = 0;
			}
			if ($siblings != 0 && ($pere == FALSE || $mere == FALSE))
			{
				$partP = $patrimoine / 4;
				$taxeP = $tax->Taxecumule0($partP);
				$pourcentE = 75 / $siblings;
			    $partE = $patrimoine * 3 / 4 / $siblings; 	
				$taxeE = $tax->Taxecumule1($partE);
			}
			if ($siblings != 0 && $pere == TRUE && $mere == TRUE)
			{
				$partP = $patrimoine / 4;
				$taxeP = $tax->Taxecumule0($partP);
				$pourcentE = 50 / $siblings;
			    $partE = $patrimoine / 2 / $siblings; 	
				$taxeE = $tax->Taxecumule1($partE);	
			}
			if ($siblings != 0 && $pere == FALSE && $mere == FALSE)
			{
				$partP = 0;
				$taxeP = 0;
				$pourcentE = 100 / $siblings;
			    $partE = $patrimoine / 2 / $siblings; 	
				$taxeE = $tax->Taxecumule1($partE);	
			}
		}

		return $this->render('SuccessFacileBundle:Site:resultatbase_ne.html.twig', array('age' => $age, 'enfant'=>$enfant, 'residencetotal'=>$residencetotal, 'opt_residence'=>$opt_residence, 'pourcent_residence'=>$pourcent_residence, 'residencefinal'=>$residencefinal, 'epargne'=>$epargne, 
		'autre'=>$autre, 'patrimoine'=>$patrimoine, 'pere'=>$pere, 'mere'=>$mere, 'siblings'=>$siblings, 'partP'=>$partP, 'taxeP'=>$taxeP, 'partE'=>$partE, 'taxeE'=>$taxeE, 'pourcentE'=>$pourcentE));
	}
	public function Ec_NEresultAction($pere, $mere, $siblings)
	{
		if ($siblings == 0 && ($pere == FALSE || $mere == FALSE))
		{
			$session = $this->getRequest()->getSession();
			$session->set('pere', $pere);
			$session->set('mere', $mere);
			$session->set('siblings', $siblings);
			return $this->FormgpAction();
		}
		else
		{
			$session = $this->getRequest()->getSession();
			$age = $session->get('age');
			$enfant = $session->get('enfant');
			$residencetotal = $session->get('residence');
		$opt_residence = $session->get('opt_residence');
		$pourcent_residence = $session->get('pourcent_residence');
			$epargne = $session->get('epargne');
			$autre = $session->get('autre');
			
			$residencefinal = $residencetotal * $pourcent_residence / 100;
			$patrimoine = $residencefinal + $epargne + $autre;
			$tax = $this->container->get('oc_platform.droitsuccess');
			if ($siblings == 0 && $pere == TRUE && $mere == TRUE)
			{
				$partP = $patrimoine / 2;
				$taxeP = $tax->Taxecumule0($partP);
				$partE = 0;
				$taxeE = 0;
				$pourcentE = 0;
			}
			if ($siblings == 0 && ($pere == FALSE || $mere == FALSE))
			{
				$partP = $patrimoine;
				$taxeP = $tax->Taxecumule0($partP);
				$partE = 0;
				$taxeE = 0;
				$pourcentE = 0;
			}
			if ($siblings != 0 && ($pere == FALSE || $mere == FALSE))
			{
				$partP = $patrimoine / 4;
				$taxeP = $tax->Taxecumule0($partP);
				$pourcentE = 75 / $siblings;
			    $partE = $patrimoine * 3 / 4 / $siblings; 	
				$taxeE = $tax->Taxecumule1($partE);
			}
			if ($siblings != 0 && $pere == TRUE && $mere == TRUE)
			{
				$partP = $patrimoine / 4;
				$taxeP = $tax->Taxecumule0($partP);
				$pourcentE = 50 / $siblings;
			    $partE = $patrimoine / 2 / $siblings; 	
				$taxeE = $tax->Taxecumule1($partE);	
			}
			if ($siblings != 0 && $pere == FALSE && $mere == FALSE)
			{
				$partP = 0;
				$taxeP = 0;
				$pourcentE = 100 / $siblings;
			    $partE = $patrimoine / 2 / $siblings; 	
				$taxeE = $tax->Taxecumule1($partE);	
			}
		}
		return $this->render('SuccessFacileBundle:Site:resultatbase_ne.html.twig', array('age' => $age, 'enfant'=>$enfant, 'residencetotal'=>$residencetotal, 'opt_residence'=>$opt_residence, 'pourcent_residence'=>$pourcent_residence, 'residencefinal'=>$residencefinal, 'epargne'=>$epargne, 
		'autre'=>$autre, 'patrimoine'=>$patrimoine, 'pere'=>$pere, 'mere'=>$mere, 'siblings'=>$siblings, 'partP'=>$partP, 'taxeP'=>$taxeP, 'partE'=>$partE, 'taxeE'=>$taxeE, 'pourcentE'=>$pourcentE));

	}

	public function P_NEresultAction($pere, $mere, $siblings)
	{
		if ($siblings == 0 && ($pere == FALSE || $mere == FALSE))
		{
			$session = $this->getRequest()->getSession();
			$session->set('pere', $pere);
			$session->set('mere', $mere);
			$session->set('siblings', $siblings);
			return $this->FormgpAction();
		}
		else
		{
			$session = $this->getRequest()->getSession();
			$age = $session->get('age');
			$enfant = $session->get('enfant');
			$residencetotal = $session->get('residence');
		$opt_residence = $session->get('opt_residence');
		$pourcent_residence = $session->get('pourcent_residence');
			$epargne = $session->get('epargne');
			$autre = $session->get('autre');
			
			$residencefinal = $residencetotal * $pourcent_residence / 100;
			$patrimoine = $residencefinal + $epargne + $autre;
			
			$tax = $this->container->get('oc_platform.droitsuccess');
			if ($siblings == 0 && $pere == TRUE && $mere == TRUE)
			{
				$partP = $patrimoine / 2;
				$taxeP = $tax->Taxecumule0($partP);
				$partE = 0;
				$taxeE = 0;
				$pourcentE = 0;
			}
			if ($siblings == 0 && ($pere == FALSE || $mere == FALSE))
			{
				$partP = $patrimoine;
				$taxeP = $tax->Taxecumule0($partP);
				$partE = 0;
				$taxeE = 0;
				$pourcentE = 0;
			}
			if ($siblings != 0 && ($pere == FALSE || $mere == FALSE))
			{
				$partP = $patrimoine / 4;
				$taxeP = $tax->Taxecumule0($partP);
				$pourcentE = 75 / $siblings;
			    $partE = $patrimoine * 3 / 4 / $siblings; 	
				$taxeE = $tax->Taxecumule1($partE);
			}
			if ($siblings != 0 && $pere == TRUE && $mere == TRUE)
			{
				$partP = $patrimoine / 4;
				$taxeP = $tax->Taxecumule0($partP);
				$pourcentE = 50 / $siblings;
			    $partE = $patrimoine / 2 / $siblings; 	
				$taxeE = $tax->Taxecumule1($partE);	
			}
			if ($siblings != 0 && $pere == FALSE && $mere == FALSE)
			{
				$partP = 0;
				$taxeP = 0;
				$pourcentE = 100 / $siblings;
			    $partE = $patrimoine / 2 / $siblings; 	
				$taxeE = $tax->Taxecumule1($partE);	
			}
		}
		return $this->render('SuccessFacileBundle:Site:resultatbase_ne.html.twig', array('age' => $age, 'enfant'=>$enfant, 'residencetotal'=>$residencetotal, 'opt_residence'=>$opt_residence, 'pourcent_residence'=>$pourcent_residence, 'residencefinal'=>$residencefinal, 'epargne'=>$epargne, 
		'autre'=>$autre, 'patrimoine'=>$patrimoine, 'pere'=>$pere, 'mere'=>$mere, 'siblings'=>$siblings, 'partP'=>$partP, 'taxeP'=>$taxeP, 'partE'=>$partE, 'taxeE'=>$taxeE, 'pourcentE'=>$pourcentE));
	}

/*
*
*   RECOMPOSEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEE
*
*/

	
// ALL result famille recompose
	public function M_RresultAction()
	{
		$session = $this->getRequest()->getSession();
		$residencetotal = $session->get('residence');
		$opt_residence = $session->get('opt_residence');
		$pourcent_residence = $session->get('pourcent_residence');
		$enfant_conjoint = $session->get('enfant_conjoint');
		$enfant_perso = $session->get('enfant_perso');
		$epargne = $session->get('epargne');
		$autre = $session->get('autre');
		$age = $session->get('age');
		$enfant = $session->get('enfant');


		$residencefinal = $residencetotal * $pourcent_residence / 100;
		$patrimoine = $residencefinal + $epargne + $autre;
		
		$enfant_all = $enfant + $enfant_conjoint + $enfant_perso;
		$enfant_part = $enfant_all - $enfant_conjoint;
		$revenant = $patrimoine / 2;

		// OPTION 2		
		$conjoint_opt2 = $revenant / 4;
		$enfant_opt2 = $revenant * 3 / 4 / $enfant_part;
		$tax = $this->container->get('oc_platform.droitsuccess');
		$taxe = $tax->Taxecumule0($enfant_opt2);
		return $this->render('SuccessFacileBundle:Site:resultatm_r.html.twig', array('age' => $age, 'enfant_all'=>$enfant_all, 'enfant_part'=>$enfant_part, 'enfant'=>$enfant, 'enfant_conjoint'=>$enfant_conjoint, 'enfant_perso'=>$enfant_perso, 'revenant'=>$revenant, 'conjoint_opt2'=>$conjoint_opt2, 'enfant_opt2'=>$enfant_opt2, 'residencetotal'=>$residencetotal, 'opt_residence'=>$opt_residence, 'pourcent_residence'=>$pourcent_residence, 'residencefinal'=>$residencefinal, 'epargne'=>$epargne, 
		'autre'=>$autre, 'patrimoine'=>$patrimoine, 'taxe'=>$taxe));
	}



	public function Ec_RresultAction()
	{
		$session = $this->getRequest()->getSession();
		$residencetotal = $session->get('residence');
		$opt_residence = $session->get('opt_residence');
		$pourcent_residence = $session->get('pourcent_residence');
		$enfant_conjoint = $session->get('enfant_conjoint');
		$enfant_perso = $session->get('enfant_perso');
		$epargne = $session->get('epargne');
		$autre = $session->get('autre');
		$age = $session->get('age');
		$enfant = $session->get('enfant');

		$residencefinal = $residencetotal * $pourcent_residence / 100;
		$patrimoine = $residencefinal + $epargne + $autre;
		
		$enfant_all = $enfant + $enfant_conjoint + $enfant_perso;
		$enfant_part = $enfant_all - $enfant_conjoint;
		$part = $patrimoine / $enfant_part;

		$tax = $this->container->get('oc_platform.droitsuccess');
		$taxe = $tax->Taxecumule0($part);
		return $this->render('SuccessFacileBundle:Site:resultatec_r.html.twig', array('age' => $age, 'enfant_all'=>$enfant_all, 'enfant_part'=>$enfant_part, 'enfant'=>$enfant, 'enfant_conjoint'=>$enfant_conjoint, 'enfant_perso'=>$enfant_perso, 'residencetotal'=>$residencetotal, 'opt_residence'=>$opt_residence, 'pourcent_residence'=>$pourcent_residence, 'residencefinal'=>$residencefinal, 'epargne'=>$epargne, 
		'autre'=>$autre, 'patrimoine'=>$patrimoine, 'part'=>$part, 'taxe'=>$taxe));
	}



	public function P_RresultAction()
	{
		$session = $this->getRequest()->getSession();
		$residencetotal = $session->get('residence');
		$opt_residence = $session->get('opt_residence');
		$pourcent_residence = $session->get('pourcent_residence');
		$enfant_conjoint = $session->get('enfant_conjoint');
		$enfant_perso = $session->get('enfant_perso');
		$epargne = $session->get('epargne');
		$autre = $session->get('autre');
		$age = $session->get('age');
		$enfant = $session->get('enfant');

		$residencefinal = $residencetotal * $pourcent_residence / 100;
		$patrimoine = $residencefinal + $epargne + $autre;
		
		$enfant_all = $enfant + $enfant_conjoint + $enfant_perso;
		$enfant_part = $enfant_all - $enfant_conjoint;
		$part = $patrimoine / $enfant_part;

		$tax = $this->container->get('oc_platform.droitsuccess');
		$taxe = $tax->Taxecumule0($part);
		return $this->render('SuccessFacileBundle:Site:resultatp_r.html.twig', array('age' => $age, 'enfant_all'=>$enfant_all, 'enfant_part'=>$enfant_part, 'enfant'=>$enfant, 'enfant_conjoint'=>$enfant_conjoint, 'enfant_perso'=>$enfant_perso, 'residencetotal'=>$residencetotal, 'opt_residence'=>$opt_residence, 'pourcent_residence'=>$pourcent_residence, 'residencefinal'=>$residencefinal, 'epargne'=>$epargne, 
		'autre'=>$autre, 'patrimoine'=>$patrimoine, 'part'=>$part, 'taxe'=>$taxe));
	}
}
?>
