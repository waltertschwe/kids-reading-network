<?php

namespace Knet\RegistrationBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class DefaultController extends Controller
{
    
    public function indexAction($name)
    {
        return $this->render('KnetRegistrationBundle:Default:index.html.php', array('name' => $name));
    }
}
