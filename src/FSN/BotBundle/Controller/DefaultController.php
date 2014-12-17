<?php

namespace FSN\BotBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('FSNBotBundle:Default:index.html.twig', array('name' => $name));
    }
}
