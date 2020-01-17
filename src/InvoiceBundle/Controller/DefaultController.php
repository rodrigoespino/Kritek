<?php

namespace InvoiceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction()
    {
     //   return $this->render('@invoice/Default/index.html.twig');

        //     return $this->render("@OCPlatform:Default:index.html.twig");
        return $this->render('@Invoice/Default/index.html.twig');
    }
}
