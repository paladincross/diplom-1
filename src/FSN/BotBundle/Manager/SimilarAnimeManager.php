<?php

namespace FSN\BotBundle\Manager;


use FSN\BotBundle\Parser\GetDataFromDomObject;

class SimilarAnimeManager extends GetPageHtmlDataManager
{
    protected $getDataFromObject;

    function __construct(GetDataFromDomObject $object)
    {
        $this->getDataFromObject = $object;
    }

    public function getSimilarAnimeTitle()
    {
        return $this->query($this->parserData['similar']['title']);
    }

    public function getSimilarAnimeLink()
    {
        return $this->query($this->parserData['similar']['href']);
    }

    //echo
    public function getSimilarAnimeDescription()
    {
        return $this->query($this->parserData['similar']['short_description']);
    }

    // $node->getAttribute('src'); -> to get reference to anime and need add "http://shikimori.org"
    public function getSimilarAnimeImage()
    {
        return $this->query($this->parserData['similar']['image']);
    }

    public function getSimilarAnimeYear()
    {
        return $this->query($this->parserData['similar']['year']);
    }

    public function getSimilarAnimeType()
    {
        return $this->query($this->parserData['similar']['type']);
    }

    public function getAllSimilarAnimeData()
    {
        $data['title'] = $this->getDataFromObject->getDataByNodeValue($this->getSimilarAnimeTitle());
        $data['link'] =  $this->getDataFromObject->getDataByAttribute($this->getSimilarAnimeLink(), 'href');

        $data['description'] = $this->getDataFromObject->getDataByNodeValue($this->getSimilarAnimeDescription());

        $data['year'] = $this->getDataFromObject->getDataByNodeValue($this->getSimilarAnimeYear());
        $data['type'] = $this->getDataFromObject->getDataByNodeValue($this->getSimilarAnimeType());

        $data['image'] = $this->getDataFromObject->getDataByAttribute($this->getSimilarAnimeImage(), 'src');

        return $data;
    }

} 