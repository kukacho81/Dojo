<?php

namespace ZenSoft\dojoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('ZenSoftdojoBundle:Default:index.html.twig');
    }
}
