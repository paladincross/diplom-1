<?php

namespace FSN\BotBundle\Controller;

use FSN\BotBundle\Entity\Link;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\CssSelector\CssSelector;

error_reporting(error_reporting() ^ E_WARNING);
header('Content-Type: text/html; charset=utf-8');
class DefaultController extends Controller
{
    public function indexAction()
    {
        $link = new Link();
        $form = $this->createFormBuilder($link)
            ->add('link', 'url')
            ->add('save', 'submit', array('label' => 'Gooooooooo!'))
            ->getForm();
        return $this->render('FSNBotBundle:Default:index.html.twig', array(
            'form' => $form->createView(),
        ));
    }



    public function startAction()
    {
        $url = $_POST['form']['link'];
        $url_similar = $_POST['form']['link'].'/similar';
        $document = new \DOMDocument('1.0', 'utf-8');
        $document->loadHTMLFile(urlencode($url_similar));
        $xpath = new \DOMXPath($document);

        $parserData = array(
            'title' => 'html > body.static > div.page > section > header.head > h1',
            // need add filter for ? in information
            'information' => 'html > body.static > div.page > section > div.entry-content-slider > div.view-content > div.slide > section.info > aside.left-column > div.menu-block > div.subblock-content > div.b-entry-info > p',
            'genre' => 'html > body.static > div.page > section > div.entry-content-slider > div.view-content > div.slide > section.info > aside.left-column > div.menu-block > div.subblock-genres',
            //$node->getAttribute('title') -> виведе вміст title
            'studio' => 'html > body.static > div.page > section > div.entry-content-slider > div.view-content > div.slide > section.info > aside.left-column > div.menu-block > div.subblock-content  > a',
            //$node->getAttribute('content') -> to get mark, $node->getAttribute('itemprop') -> for filter
            'mark' => 'html > body.static > div.page > section > div.entry-content-slider > div.view-content > div.slide > section.info > aside.left-column > div.menu-block > div.scores > meta',
            //echo
            'description' => 'html > body.static > div.page > section > div.entry-content-slider > div.view-content > div.slide > section.info > div.right-column > div.item-content > div.description > div.russian',
            // $node->getAttribute('src')
            'image' => 'html > body.static > div.page > section > div.entry-content-slider > div.view-content > div.slide > section.info > div.right-column > div.item-content > div.content-right > img',
            'similar' => array(
                'title' => 'html > body.static > div.page > section > div.entry-content-slider > div.view-content > div.slide > section.similar > div.related-anime > article.related-block  > div.name > a',
                // $node->getAttribute('href'); -> to get reference to anime and need add "http://shikimori.org"
                'href' => 'html > body.static > div.page > section > div.entry-content-slider > div.view-content > div.slide > section.similar > div.related-anime > article.related-block  > a.image-container',
                'short_description' => 'html > body.static > div.page > section > div.entry-content-slider > div.view-content > div.slide > section.similar > div.related-anime > article.related-block  > div.description > p',
                // $node->getAttribute('src'); -> to get reference to anime and need add "http://shikimori.org"
                'image' => 'html > body.static > div.page > section > div.entry-content-slider > div.view-content > div.slide > section.similar > div.related-anime > article.related-block  > a.image-container img',
                'year' => 'html > body.static > div.page > section > div.entry-content-slider > div.view-content > div.slide > section.similar > div.related-anime > article.related-block  > div.year',
                'type' => 'html > body.static > div.page > section > div.entry-content-slider > div.view-content > div.slide > section.similar > div.related-anime > article.related-block  > div.type'
            )
        );
        $a = "";
        $path = "html > body.static > div.page > section > div.entry-content-slider > div.view-content > div.slide > section.similar > div.related-anime > article.related-block  > div.type";
        //kinopoisk:
        //fs: html > body > div.l-body-inner > div.l-body-inner-inner > div.l-content-wrap > div.l-content > l-content-center > div > div.l-tab-item-content > div.l-center > div.b-tab-item__title > div.b-tab-item__title-inner > span
        // shikimory: html > body.static > div.page > section > header.head > h1
        foreach ($xpath->query(CssSelector::toXPath($path)) as $node)
        {
           // var_dump($node->getAttribute('src'));
           // var_dump($node->getAttribute('itemprop'));
           // echo"<br>";
           echo $node->nodeValue."<br><br>";
          // var_dump($node->nodeValue);
         //   $a = $node->nodeValue;
            //printf("%s (%s)\n", $node->nodeValue, $node->getAttribute('h1'));
        }
        die();
        return $this->render('FSNBotBundle:Default:start.html.twig', array('link' => $a));
    }

}
