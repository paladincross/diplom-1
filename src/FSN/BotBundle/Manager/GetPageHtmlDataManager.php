<?php

namespace FSN\BotBundle\Manager;

use Symfony\Component\CssSelector\CssSelector;

class GetPageHtmlDataManager
{
    protected $link = '';
    protected $document;

    protected $parserData = array(
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

    function __construct()
    {
      //  $this->link = $link;
    }

    protected function loadPageHtml()
    {
        $document = new \DOMDocument('1.0', 'utf-8');
        $document->loadHTMLFile(urlencode($this->link));
        $xpath = new \DOMXPath($document);

        return $xpath;
    }

    protected function query($informPath)
    {
        $xpath = $this->loadPageHtml();
        $neededInformation = $xpath->query(CssSelector::toXPath($informPath));

        return $neededInformation;
    }

    public function setLink($link)
    {
        $this->link = $link;
    }
} 