<?php

namespace Halospain\WebBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HomeController extends Controller
{
    public function indexAction()
    {
        return $this->render('HalospainWebBundle:Home:index.html.twig', array());
    }
}
