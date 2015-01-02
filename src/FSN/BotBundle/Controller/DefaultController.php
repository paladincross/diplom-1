<?php

namespace FSN\BotBundle\Controller;

use FSN\BotBundle\Entity\Link;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    public function indexAction(Request $request)
    {
        $link = new Link();

        $form = $this->createFormBuilder($link)
            ->add('link', 'url')
            ->add('save', 'submit', array('label' => 'Gooooooooo!'))
            ->getForm();

//        $form->handleRequest($request);
//
//        if ($form->isValid()) {
//            echo 11111;
//            die();
//            // perform some action, such as saving the task to the database
//
//           // return $this->redirect($this->generateUrl('task_success'));
//        }
        return $this->render('FSNBotBundle:Default:index.html.twig', array(
            'form' => $form->createView(),
        ));
    }
}
