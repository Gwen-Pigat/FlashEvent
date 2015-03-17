<?php
/**
 * Crée par Gwen !!!! ;).
 *
 *  le : 15/03/15
 *  à : 00:27
 * plutot cool non ?? :D
 */

namespace Flash\EventBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PassController extends controller
{
    public function indexaction()
    {
        return $this->render('FlashEventBundle:Password:index.html.twig');
    }
}