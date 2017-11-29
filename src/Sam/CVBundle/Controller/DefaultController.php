<?php

namespace Sam\CVBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('SamCVBundle:Default:index.html.twig');
    }
}
