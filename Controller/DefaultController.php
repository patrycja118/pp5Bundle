<?php

namespace Patrycja\pp5Bundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('Patrycjapp5Bundle:Default:index.html.twig', array('name' => $name));
    }
}
