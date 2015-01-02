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
            ->add('link', 'text')
            ->add('save', 'submit', array('label' => 'Gooooooooo!'))
            ->getForm();
//        if ($request->getMethod() == 'POST') {
//            var_dump($_POST);
//            if($_POST['form']['link'])
//            {
//                echo $_POST['form']['link'];
//                unset($_POST);
//            }
//        }
        return $this->render('FSNBotBundle:Default:index.html.twig', array(
            'form' => $form->createView(),
        ));
    }

    public function startAction()
    {

        $link = $_POST['form']['link'];
        unset($_POST);
        return $this->render('FSNBotBundle:Default:start.html.twig', array('link' => $link));
    }


}
