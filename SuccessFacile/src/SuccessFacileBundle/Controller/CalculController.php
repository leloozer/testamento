<?php

//src/SuccessFacileBundle/controller/CalculController.php

namespace SuccessFacileBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Form\Form;


use SuccessFacileBundle\Entity\Usufruit;
use SuccessFacileBundle\Entity\Situation;


class CalculController extends Controller
{

	public function indexAction()
	{
		$situation = new Situation;

		$formBuilder = $this->createFormBuilder($situation);
		$formBuilder 
					->add('recompose', 'choice', array('choices'=>array(1=>'Famille recompose', 0=>'Famille non recompose')))
					->add('situ', 'choice', array('choices'=>array(0=>'Celibataire', 1=>'Marie(e)', 2=>'Veuf(ve)', 3=>'Divorce(e)', 4=>'Separe(e)', 5=>'Partenaire d\'un PACS', 6=>'En concubinage')));
		$form = $formBuilder->getForm();
		
		$request = $this->getRequest();
		if ($request->getMethod() == 'POST')
		{
			$form->bind($request);
			if ($form->isValid())
			{
				if ($situation->getRecompose() == FALSE && $situation->getSitu() == 0)
					return $this->C_NRAction();
				if ($situation->getRecompose() == FALSE && $situation->getSitu() == 1)
					return $this->M_NRAction();
				if ($situation->getRecompose() == FALSE && $situation->getSitu() == 2)
					return $this->V_NRAction();
				if ($situation->getRecompose() == FALSE && $situation->getSitu() == 3)
					return $this->D_NRAction();
				if ($situation->getRecompose() == FALSE && $situation->getSitu() == 4)
					return $this->S_NRAction();
				if ($situation->getRecompose() == FALSE && $situation->getSitu() == 5)
					return $this->P_NRAction();
				if ($situation->getRecompose() == FALSE && $situation->getSitu() == 6)
					return $this->Ec_NRAction();
				if ($situation->getRecompose() == TRUE && $situation->getSitu() == 0)
					return $this->C_RAction();
				if ($situation->getRecompose() == TRUE && $situation->getSitu() == 1)
					return $this->M_RAction();
				if ($situation->getRecompose() == TRUE && $situation->getSitu() == 2)
					return $this->V_RAction();
				if ($situation->getRecompose() == TRUE && $situation->getSitu() == 3)
					return $this->D_RAction();
				if ($situation->getRecompose() == TRUE && $situation->getSitu() == 4)
					return $this->S_RAction();
				if ($situation->getRecompose() == TRUE && $situation->getSitu() == 5)
					return $this->P_RAction();
				if ($situation->getRecompose() == TRUE && $situation->getSitu() == 6)
					return $this->Ec_RAction();
			}
		}
		return $this->render('SuccessFacileBundle:Site:situation.html.twig', array('form' => $form->createView()));
	}

/*
*
*   NON RECOMPOSEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEE
*
*/
	
// Method Celib non recompose
	public function C_NRAction()
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
				
				if ($age >= 0 && $enfant > 0)
					return $this->C_NRresultAction($age, $enfant, $residence, $epargne, $autre);
				if ($age >= 0 && $enfant == 0)
					return $this->C_NEresultAction($age, $enfant, $residence, $epargne, $autre);
				else
				{
					echo '<script type="text/javascript">alert("Votre formulaire n\'est pas valide.")</script>';
				}
			}
		}
		return $this->render('SuccessFacileBundle:Site:form_c_nr.html.twig', array('form1' => $form->createView()));
	}
// Method Marie non recompose
	public function M_NRAction()
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
				
				if ($age >= 0 && $enfant > 0)
					return $this->M_NRresultAction($age, $enfant, $residence, $epargne, $autre);
				if ($age >= 0 && $enfant == 0)
					return $this->M_NEresultAction($age, $enfant, $residence, $epargne, $autre);
				else
				{
					echo '<script type="text/javascript">alert("Votre formulaire n\'est pas valide.")</script>';
				}
			}
		}
		return $this->render('SuccessFacileBundle:Site:form_m_nr.html.twig', array('form1' => $form->createView()));
	}

// Method veuf non recompose
	public function V_NRAction()
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
				
				if ($age >= 0 && $enfant > 0)
					return $this->V_NRresultAction($age, $enfant, $residence, $epargne, $autre);
				if ($age >= 0 && $enfant == 0)
					return $this->V_NEresultAction($age, $enfant, $residence, $epargne, $autre);
				else
				{
					echo '<script type="text/javascript">alert("Votre formulaire n\'est pas valide.")</script>';
				}
			}
		}
		return $this->render('SuccessFacileBundle:Site:form_v_nr.html.twig', array('form1' => $form->createView()));
	}

// Method divorce non recompose
	public function D_NRAction()
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
				
				if ($age >= 0 && $enfant > 0)
					return $this->D_NRresultAction($age, $enfant, $residence, $epargne, $autre);
				if ($age >= 0 && $enfant == 0)
					return $this->D_NEresultAction($age, $enfant, $residence, $epargne, $autre);
				else
				{
					echo '<script type="text/javascript">alert("Votre formulaire n\'est pas valide.")</script>';
				}
			}
		}
		return $this->render('SuccessFacileBundle:Site:form_d_nr.html.twig', array('form1' => $form->createView()));
	}

// Method Separe non recompose
	public function S_NRAction()
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
				
				if ($age >= 0 && $enfant > 0)
					return $this->S_NRresultAction($age, $enfant, $residence, $epargne, $autre);
				if ($age >= 0 && $enfant == 0)
					return $this->S_NEresultAction($age, $enfant, $residence, $epargne, $autre);
				else
				{
					echo '<script type="text/javascript">alert("Votre formulaire n\'est pas valide.")</script>';
				}
			}
		}
		return $this->render('SuccessFacileBundle:Site:form_s_nr.html.twig', array('form1' => $form->createView()));
	}

// Method Pacs non recompose
	public function P_NRAction()
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
				
				if ($age >= 0 && $enfant > 0)
					return $this->P_NRresultAction($age, $enfant, $residence, $epargne, $autre);
				if ($age >= 0 && $enfant == 0)
					return $this->P_NEresultAction($age, $enfant, $residence, $epargne, $autre);
				
				else
				{
					echo '<script type="text/javascript">alert("Votre formulaire n\'est pas valide.")</script>';
				}
			}
		}
		return $this->render('SuccessFacileBundle:Site:form_p_nr.html.twig', array('form1' => $form->createView()));
	}
	
	public function Ec_NRAction()
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
				
				if ($age >= 0 && $enfant > 0)
					return $this->Ec_NRresultAction($age, $enfant, $residence, $epargne, $autre);
				if ($age >= 0 && $enfant == 0)
					return $this->Ec_NEresultAction($age, $enfant, $residence, $epargne, $autre);
				else
				{
					echo '<script type="text/javascript">alert("Votre formulaire n\'est pas valide.")</script>';
				}
			}
		}
		return $this->render('SuccessFacileBundle:Site:form_ec_nr.html.twig', array('form1' => $form->createView()));
	}

/*
*
*     ALLL RESULT NON RECOMPOSE ET ENFANT
*
*/
	public function C_NRresultAction($age, $enfant, $residence, $epargne, $autre)
	{
		$patrimoine = $residence + $epargne + $autre;
		$part = $patrimoine / $enfant;

		return $this->render('SuccessFacileBundle:Site:resultatc_nr.html.twig', array('age' => $age, 'enfant'=>$enfant, 'part'=>$part, 'residence'=>$residence, 'epargne'=>$epargne, 
		'autre'=>$autre, 'patrimoine'=>$patrimoine));
	}

	public function M_NRresultAction($age, $enfant, $residence, $epargne, $autre)
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

		return $this->render('SuccessFacileBundle:Site:resultatm_nr.html.twig', array('age' => $age, 'val_usufruit'=>$val_usufruit, 
		'enfant'=>$enfant, 'nue_propriete'=>$nue_propriete, 'revenant'=>$revenant, 'residence'=>$residence, 'epargne'=>$epargne, 
		'autre'=>$autre, 'patrimoine'=>$patrimoine, 
		'conjoint_opt1'=>$conjoint_opt1, 'enfant_opt1'=>$enfant_opt1, 
		'conjoint_opt2'=>$conjoint_opt2, 'enfant_opt2'=>$enfant_opt2, 
		'conjoint_opt3'=>$conjoint_opt3, 'enfant_opt3'=>$enfant_opt3, 
		'conjoint_opt4'=>$conjoint_opt4, 'enfant_opt4'=>$enfant_opt4));
	}
	
	public function V_NRresultAction($age, $enfant, $residence, $epargne, $autre)
	{
		$patrimoine = $residence + $epargne + $autre;
		$part = $patrimoine / $enfant;

		return $this->render('SuccessFacileBundle:Site:resultatv_nr.html.twig', array('age' => $age, 'enfant'=>$enfant, 'part'=>$part, 'residence'=>$residence, 'epargne'=>$epargne, 
		'autre'=>$autre, 'patrimoine'=>$patrimoine));
	}
	public function D_NRresultAction($age, $enfant, $residence, $epargne, $autre)
	{
		$patrimoine = $residence + $epargne + $autre;
		$part = $patrimoine / $enfant;

		return $this->render('SuccessFacileBundle:Site:resultatd_nr.html.twig', array('age' => $age, 'enfant'=>$enfant, 'part'=>$part, 'residence'=>$residence, 'epargne'=>$epargne, 
		'autre'=>$autre, 'patrimoine'=>$patrimoine));
	}
	public function S_NRresultAction($age, $enfant, $residence, $epargne, $autre)
	{
		$patrimoine = $residence + $epargne + $autre;
		$part = $patrimoine / $enfant;

		return $this->render('SuccessFacileBundle:Site:resultats_nr.html.twig', array('age' => $age, 'enfant'=>$enfant, 'part'=>$part, 'residence'=>$residence, 'epargne'=>$epargne, 
		'autre'=>$autre, 'patrimoine'=>$patrimoine));
	}
	public function Ec_NRresultAction($age, $enfant, $residence, $epargne, $autre)
	{
		$patrimoine = $residence + $epargne + $autre;
		$part = $patrimoine / $enfant;

		return $this->render('SuccessFacileBundle:Site:resultatec_nr.html.twig', array('age' => $age, 'enfant'=>$enfant, 'part'=>$part, 'residence'=>$residence, 'epargne'=>$epargne, 
		'autre'=>$autre, 'patrimoine'=>$patrimoine));
	}
	public function P_NRresultAction($age, $enfant, $residence, $epargne, $autre)
	{
		$patrimoine = $residence + $epargne + $autre;
		$part = $patrimoine / $enfant;

		return $this->render('SuccessFacileBundle:Site:resultatp_nr.html.twig', array('age' => $age, 'enfant'=>$enfant, 'part'=>$part, 'residence'=>$residence, 'epargne'=>$epargne, 
		'autre'=>$autre, 'patrimoine'=>$patrimoine));
	}

/*
*
*     ALLL RESULT NON ENFANT
*
*/
	public function C_NEresultAction($age, $enfant, $residence, $epargne, $autre)
	{
		$patrimoine = $residence + $epargne + $autre;

		return $this->render('SuccessFacileBundle:Site:resultatc_ne.html.twig', array('age' => $age, 'enfant'=>$enfant, 'residence'=>$residence, 'epargne'=>$epargne, 
		'autre'=>$autre, 'patrimoine'=>$patrimoine));
	}
	public function M_NEresultAction($age, $enfant, $residence, $epargne, $autre)
	{
		$patrimoine = $residence + $epargne + $autre;
		$part = $patrimoine / 2;

		return $this->render('SuccessFacileBundle:Site:resultatm_ne.html.twig', array('age' => $age, 'enfant'=>$enfant, 'residence'=>$residence, 'epargne'=>$epargne, 
		'autre'=>$autre, 'patrimoine'=>$patrimoine, 'part'=>$part));
	}

	public function V_NEresultAction($age, $enfant, $residence, $epargne, $autre)
	{
		$patrimoine = $residence + $epargne + $autre;

		return $this->render('SuccessFacileBundle:Site:resultatv_ne.html.twig', array('age' => $age, 'enfant'=>$enfant, 'residence'=>$residence, 'epargne'=>$epargne, 
		'autre'=>$autre, 'patrimoine'=>$patrimoine));
	}
	public function D_NEresultAction($age, $enfant, $residence, $epargne, $autre)
	{
		$patrimoine = $residence + $epargne + $autre;

		return $this->render('SuccessFacileBundle:Site:resultatd_ne.html.twig', array('age' => $age, 'enfant'=>$enfant, 'residence'=>$residence, 'epargne'=>$epargne, 
		'autre'=>$autre, 'patrimoine'=>$patrimoine));
	}
	public function S_NEresultAction($age, $enfant, $residence, $epargne, $autre)
	{
		$patrimoine = $residence + $epargne + $autre;

		return $this->render('SuccessFacileBundle:Site:resultats_ne.html.twig', array('age' => $age, 'enfant'=>$enfant, 'residence'=>$residence, 'epargne'=>$epargne, 
		'autre'=>$autre, 'patrimoine'=>$patrimoine));
	}
	public function Ec_NEresultAction($age, $enfant, $residence, $epargne, $autre)
	{
		$patrimoine = $residence + $epargne + $autre;

		return $this->render('SuccessFacileBundle:Site:resultatec_ne.html.twig', array('age' => $age, 'enfant'=>$enfant, 'residence'=>$residence, 'epargne'=>$epargne, 
		'autre'=>$autre, 'patrimoine'=>$patrimoine));
	}

	public function P_NEresultAction($age, $enfant, $residence, $epargne, $autre)
	{
		$patrimoine = $residence + $epargne + $autre;

		return $this->render('SuccessFacileBundle:Site:resultatp_ne.html.twig', array('age' => $age, 'enfant'=>$enfant, 'residence'=>$residence, 'epargne'=>$epargne, 
		'autre'=>$autre, 'patrimoine'=>$patrimoine));
	}

/*
*
*   RECOMPOSEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEE
*
*/

	public function C_RAction()
	{
		$usufruit = new Usufruit; 
		
		$formBuilder = $this->createFormBuilder($usufruit);
		$formBuilder
			->add('age', 'integer')
			->add('enfant', 'integer')
			->add('enfant_conjoint', 'integer')
			->add('enfant_perso', 'integer')
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
				$enfant_conjoint = $usufruit->getEnfantConjoint();
				$enfant_perso = $usufruit->getEnfantPerso();
				$residence = $usufruit->getResidence();
				$epargne = $usufruit->getEpargne();
				$autre = $usufruit->getAutre();
				
				if ($age >= 0 && $enfant >= 0 && $enfant_conjoint >= 0 && $enfant_perso >= 0 && ($enfant > 0 || $enfant_conjoint > 0 || $enfant_perso > 0))
					return $this->C_RresultAction($age, $enfant, $enfant_conjoint, $enfant_perso, $residence, $epargne, $autre);
				else
				{
					echo '<script type="text/javascript">alert("Votre formulaire n\'est pas valide.")</script>';
				}
			}
		}
		return $this->render('SuccessFacileBundle:Site:form_c_r.html.twig', array('form1' => $form->createView()));
	}
	
	public function M_RAction()
	{
		$usufruit = new Usufruit; 
		
		$formBuilder = $this->createFormBuilder($usufruit);
		$formBuilder
			->add('age', 'integer')
			->add('enfant', 'integer')
			->add('enfant_conjoint', 'integer')
			->add('enfant_perso', 'integer')
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
				$enfant_conjoint = $usufruit->getEnfantConjoint();
				$enfant_perso = $usufruit->getEnfantPerso();
				$residence = $usufruit->getResidence();
				$epargne = $usufruit->getEpargne();
				$autre = $usufruit->getAutre();
				
				if ($age >= 0 && $enfant >= 0 && $enfant_conjoint >= 0 && $enfant_perso >= 0 && ($enfant > 0 || $enfant_conjoint > 0 || $enfant_perso > 0))
					return $this->M_RresultAction($age, $enfant, $enfant_conjoint, $enfant_perso, $residence, $epargne, $autre);
				else
				{
					echo '<script type="text/javascript">alert("Votre formulaire n\'est pas valide.")</script>';
				}
			}
		}
		return $this->render('SuccessFacileBundle:Site:form_m_r.html.twig', array('form1' => $form->createView()));
	}

	public function V_RAction()
	{
		$usufruit = new Usufruit; 
		
		$formBuilder = $this->createFormBuilder($usufruit);
		$formBuilder
			->add('age', 'integer')
			->add('enfant', 'integer')
			->add('enfant_conjoint', 'integer')
			->add('enfant_perso', 'integer')
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
				$enfant_conjoint = $usufruit->getEnfantConjoint();
				$enfant_perso = $usufruit->getEnfantPerso();
				$residence = $usufruit->getResidence();
				$epargne = $usufruit->getEpargne();
				$autre = $usufruit->getAutre();
				
				if ($age >= 0 && $enfant >= 0 && $enfant_conjoint >= 0 && $enfant_perso >= 0 && ($enfant > 0 || $enfant_conjoint > 0 || $enfant_perso > 0))
					return $this->V_RresultAction($age, $enfant, $enfant_conjoint, $enfant_perso, $residence, $epargne, $autre);
				else
				{
					echo '<script type="text/javascript">alert("Votre formulaire n\'est pas valide.")</script>';
				}
			}
		}
		return $this->render('SuccessFacileBundle:Site:form_v_r.html.twig', array('form1' => $form->createView()));
	}

	public function S_RAction()
	{
		$usufruit = new Usufruit; 
		
		$formBuilder = $this->createFormBuilder($usufruit);
		$formBuilder
			->add('age', 'integer')
			->add('enfant', 'integer')
			->add('enfant_conjoint', 'integer')
			->add('enfant_perso', 'integer')
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
				$enfant_conjoint = $usufruit->getEnfantConjoint();
				$enfant_perso = $usufruit->getEnfantPerso();
				$residence = $usufruit->getResidence();
				$epargne = $usufruit->getEpargne();
				$autre = $usufruit->getAutre();
				
				if ($age >= 0 && $enfant >= 0 && $enfant_conjoint >= 0 && $enfant_perso >= 0 && ($enfant > 0 || $enfant_conjoint > 0 || $enfant_perso > 0))
					return $this->S_RresultAction($age, $enfant, $enfant_conjoint, $enfant_perso, $residence, $epargne, $autre);
				else
				{
					echo '<script type="text/javascript">alert("Votre formulaire n\'est pas valide.")</script>';
				}
			}
		}
		return $this->render('SuccessFacileBundle:Site:form_s_r.html.twig', array('form1' => $form->createView()));
	}

	public function D_RAction()
	{
		$usufruit = new Usufruit; 
		
		$formBuilder = $this->createFormBuilder($usufruit);
		$formBuilder
			->add('age', 'integer')
			->add('enfant', 'integer')
			->add('enfant_conjoint', 'integer')
			->add('enfant_perso', 'integer')
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
				$enfant_conjoint = $usufruit->getEnfantConjoint();
				$enfant_perso = $usufruit->getEnfantPerso();
				$residence = $usufruit->getResidence();
				$epargne = $usufruit->getEpargne();
				$autre = $usufruit->getAutre();
				
				if ($age >= 0 && $enfant >= 0 && $enfant_conjoint >= 0 && $enfant_perso >= 0 && ($enfant > 0 || $enfant_conjoint > 0 || $enfant_perso > 0))
					return $this->D_RresultAction($age, $enfant, $enfant_conjoint, $enfant_perso, $residence, $epargne, $autre);
				else
				{
					echo '<script type="text/javascript">alert("Votre formulaire n\'est pas valide.")</script>';
				}
			}
		}
		return $this->render('SuccessFacileBundle:Site:form_d_r.html.twig', array('form1' => $form->createView()));
	}

	public function P_RAction()
	{
		$usufruit = new Usufruit; 
		
		$formBuilder = $this->createFormBuilder($usufruit);
		$formBuilder
			->add('age', 'integer')
			->add('enfant', 'integer')
			->add('enfant_conjoint', 'integer')
			->add('enfant_perso', 'integer')
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
				$enfant_conjoint = $usufruit->getEnfantConjoint();
				$enfant_perso = $usufruit->getEnfantPerso();
				$residence = $usufruit->getResidence();
				$epargne = $usufruit->getEpargne();
				$autre = $usufruit->getAutre();
				
				if ($age >= 0 && $enfant >= 0 && $enfant_conjoint >= 0 && $enfant_perso >= 0 && ($enfant > 0 || $enfant_conjoint > 0 || $enfant_perso > 0))
					return $this->P_RresultAction($age, $enfant, $enfant_conjoint, $enfant_perso, $residence, $epargne, $autre);
				else
				{
					echo '<script type="text/javascript">alert("Votre formulaire n\'est pas valide.")</script>';
				}
			}
		}
		return $this->render('SuccessFacileBundle:Site:form_p_r.html.twig', array('form1' => $form->createView()));
	}
	public function Ec_RAction()
	{
		$usufruit = new Usufruit; 
		
		$formBuilder = $this->createFormBuilder($usufruit);
		$formBuilder
			->add('age', 'integer')
			->add('enfant', 'integer')
			->add('enfant_conjoint', 'integer')
			->add('enfant_perso', 'integer')
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
				$enfant_conjoint = $usufruit->getEnfantConjoint();
				$enfant_perso = $usufruit->getEnfantPerso();
				$residence = $usufruit->getResidence();
				$epargne = $usufruit->getEpargne();
				$autre = $usufruit->getAutre();
				
				if ($age >= 0 && $enfant >= 0 && $enfant_conjoint >= 0 && $enfant_perso >= 0 && ($enfant > 0 || $enfant_conjoint > 0 || $enfant_perso > 0))
					return $this->Ec_RresultAction($age, $enfant, $enfant_conjoint, $enfant_perso, $residence, $epargne, $autre);
				else
				{
					echo '<script type="text/javascript">alert("Votre formulaire n\'est pas valide.")</script>';
				}
			}
		}
		return $this->render('SuccessFacileBundle:Site:form_ec_r.html.twig', array('form1' => $form->createView()));
	}
	
// ALL result famille recompose
	public function C_RresultAction($age, $enfant, $enfant_conjoint, $enfant_perso, $residence, $epargne, $autre)
	{
		$patrimoine = $residence + $epargne + $autre;
		$enfant_all = $enfant + $enfant_conjoint + $enfant_perso;
		$enfant_part = $enfant_all - $enfant_conjoint;
		$part = $patrimoine / $enfant_part;

		return $this->render('SuccessFacileBundle:Site:resultatc_r.html.twig', array('age' => $age, 'enfant_all'=>$enfant_all, 'enfant_part'=>$enfant_part, 'enfant'=>$enfant, 'enfant_conjoint'=>$enfant_conjoint, 'enfant_perso'=>$enfant_perso, 'residence'=>$residence, 'epargne'=>$epargne, 
		'autre'=>$autre, 'patrimoine'=>$patrimoine, 'part'=>$part));
	}
	public function M_RresultAction($age, $enfant, $enfant_conjoint, $enfant_perso, $residence, $epargne, $autre)
	{
		$patrimoine = $residence + $epargne + $autre;
		$enfant_all = $enfant + $enfant_conjoint + $enfant_perso;
		$enfant_part = $enfant_all - $enfant_conjoint;
		$revenant = $patrimoine / 2;

		// OPTION 2		
		$conjoint_opt2 = $revenant / 4;
		$enfant_opt2 = $revenant * 3 / 4 / $enfant_part;
		return $this->render('SuccessFacileBundle:Site:resultatm_r.html.twig', array('age' => $age, 'enfant_all'=>$enfant_all, 'enfant_part'=>$enfant_part, 'enfant'=>$enfant, 'enfant_conjoint'=>$enfant_conjoint, 'enfant_perso'=>$enfant_perso, 'revenant'=>$revenant, 'conjoint_opt2'=>$conjoint_opt2, 'enfant_opt2'=>$enfant_opt2, 'residence'=>$residence, 'epargne'=>$epargne, 
		'autre'=>$autre, 'patrimoine'=>$patrimoine));
	}
	public function V_RresultAction($age, $enfant, $enfant_conjoint, $enfant_perso, $residence, $epargne, $autre)
	{
		$patrimoine = $residence + $epargne + $autre;
		$enfant_all = $enfant + $enfant_conjoint + $enfant_perso;
		$enfant_part = $enfant_all - $enfant_conjoint;
		$part = $patrimoine / $enfant_part;

		return $this->render('SuccessFacileBundle:Site:resultatv_r.html.twig', array('age' => $age, 'enfant_all'=>$enfant_all, 'enfant_part'=>$enfant_part, 'enfant'=>$enfant, 'enfant_conjoint'=>$enfant_conjoint, 'enfant_perso'=>$enfant_perso, 'residence'=>$residence, 'epargne'=>$epargne, 
		'autre'=>$autre, 'patrimoine'=>$patrimoine, 'part'=>$part));
	}
	public function S_RresultAction($age, $enfant, $enfant_conjoint, $enfant_perso, $residence, $epargne, $autre)
	{
		$patrimoine = $residence + $epargne + $autre;
		$enfant_all = $enfant + $enfant_conjoint + $enfant_perso;
		$enfant_part = $enfant_all - $enfant_conjoint;
		$part = $patrimoine / $enfant_part;

		return $this->render('SuccessFacileBundle:Site:resultats_r.html.twig', array('age' => $age, 'enfant_all'=>$enfant_all, 'enfant_part'=>$enfant_part, 'enfant'=>$enfant, 'enfant_conjoint'=>$enfant_conjoint, 'enfant_perso'=>$enfant_perso, 'residence'=>$residence, 'epargne'=>$epargne, 
		'autre'=>$autre, 'patrimoine'=>$patrimoine, 'part'=>$part));
	}
	public function D_RresultAction($age, $enfant, $enfant_conjoint, $enfant_perso, $residence, $epargne, $autre)
	{
		$patrimoine = $residence + $epargne + $autre;
		$enfant_all = $enfant + $enfant_conjoint + $enfant_perso;
		$enfant_part = $enfant_all - $enfant_conjoint;
		$part = $patrimoine / $enfant_part;

		return $this->render('SuccessFacileBundle:Site:resultatd_r.html.twig', array('age' => $age, 'enfant_all'=>$enfant_all, 'enfant_part'=>$enfant_part, 'enfant'=>$enfant, 'enfant_conjoint'=>$enfant_conjoint, 'enfant_perso'=>$enfant_perso, 'residence'=>$residence, 'epargne'=>$epargne, 
		'autre'=>$autre, 'patrimoine'=>$patrimoine, 'part'=>$part));
	}
	public function Ec_RresultAction($age, $enfant, $enfant_conjoint, $enfant_perso, $residence, $epargne, $autre)
	{
		$patrimoine = $residence + $epargne + $autre;
		$enfant_all = $enfant + $enfant_conjoint + $enfant_perso;
		$enfant_part = $enfant_all - $enfant_conjoint;
		$part = $patrimoine / $enfant_part;

		return $this->render('SuccessFacileBundle:Site:resultatec_r.html.twig', array('age' => $age, 'enfant_all'=>$enfant_all, 'enfant_part'=>$enfant_part, 'enfant'=>$enfant, 'enfant_conjoint'=>$enfant_conjoint, 'enfant_perso'=>$enfant_perso, 'residence'=>$residence, 'epargne'=>$epargne, 
		'autre'=>$autre, 'patrimoine'=>$patrimoine, 'part'=>$part));
	}
	public function P_RresultAction($age, $enfant, $enfant_conjoint, $enfant_perso, $residence, $epargne, $autre)
	{
		$patrimoine = $residence + $epargne + $autre;
		$enfant_all = $enfant + $enfant_conjoint + $enfant_perso;
		$enfant_part = $enfant_all - $enfant_conjoint;
		$part = $patrimoine / $enfant_part;

		return $this->render('SuccessFacileBundle:Site:resultatp_r.html.twig', array('age' => $age, 'enfant_all'=>$enfant_all, 'enfant_part'=>$enfant_part, 'enfant'=>$enfant, 'enfant_conjoint'=>$enfant_conjoint, 'enfant_perso'=>$enfant_perso, 'residence'=>$residence, 'epargne'=>$epargne, 
		'autre'=>$autre, 'patrimoine'=>$patrimoine, 'part'=>$part));
	}
}
?>
