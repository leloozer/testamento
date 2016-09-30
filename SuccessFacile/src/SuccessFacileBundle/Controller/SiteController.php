<?php

//src/SuccessFacileBundle/controller/SiteController.php

namespace SuccessFacileBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class SiteController extends Controller
{
	public function indexAction()
	{
		return $this->render('SuccessFacileBundle:Site:index.html.twig');
	}

	public function quelchoixAction()
	{
		return $this->render('SuccessFacileBundle:Site:droitdesuccess.html.twig');
	}
	public function aboutAction()
	{
		return $this->render('SuccessFacileBundle:Site:about.html.twig');
	}
	public function contactAction()
	{
		return $this->render('SuccessFacileBundle:Site:contact.html.twig');
	}
}

?>
