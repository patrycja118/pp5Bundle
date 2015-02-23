<?php

namespace Patrycja\pp5Bundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PageController extends Controller
{
	public function indexAction()
	{
		return $this->render('Patrycjapp5Bundle:Page:index.html.twig');
	}
}