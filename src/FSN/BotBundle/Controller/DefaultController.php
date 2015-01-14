<?php

namespace FSN\BotBundle\Controller;

use FSN\BotBundle\Entity\Link;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Config\Definition\Exception\Exception;

error_reporting((error_reporting() ^ E_WARNING) ^ E_NOTICE);
header('Content-Type: text/html; charset=utf-8');
session_start();
class DefaultController extends Controller
{
    public function indexAction()
    {
        $_POST['form']['link'] = null;
        $_SESSION['old_link'] = null;
        $link = new Link();
        $form = $this->createFormBuilder($link)
            ->add('link', 'url')
            //->add('save', 'submit', array('label' => 'Gooooooooo!'))
            ->getForm();
        return $this->render('FSNBotBundle:Default:index.html.twig', array(
            'form' => $form->createView(),
        ));
    }



    public function startAction()
    {
        $url = $_POST['form']['link'];
        if($_SESSION['oldLink'] != $url){

      //  $url_similar = $_POST['form']['link'].'/similar';

        $pageHtmlData = $this->get('fsn.anime_manager');

        $pageHtmlData->setLink($url);

        $_SESSION['data'] = $pageHtmlData->getAllData();
        var_dump($_SESSION);
        $_SESSION['oldLink'] = $url;
        }
        else {
           var_dump($_SESSION['data']);

        }
        if(empty($_SESSION['oldLink'])) $_SESSION['oldLink'] = $url;
        die();
        return $this->render('FSNBotBundle:Default:start.html.twig', array('link' => $a));
    }

}
