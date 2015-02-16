<?php

namespace Flash\EventBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('FlashEventBundle:Default:index.html.twig', array('name' => $name));
    }
}
