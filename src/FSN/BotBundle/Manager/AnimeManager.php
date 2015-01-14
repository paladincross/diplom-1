<?php

namespace FSN\BotBundle\Manager;


use FSN\BotBundle\Parser\GetDataFromDomObject;

class AnimeManager extends GetPageHtmlDataManager
{
  //  protected   $data = array();
    protected $getDataFromObject;

    function __construct(GetDataFromDomObject $object)
    {
        $this->getDataFromObject = $object;
    }

    public function getTitle()
    {
        return $this->query($this->parserData['title']);
    }

    //? fix and all get for 1
    public function getInformation()
    {
        return $this->query($this->parserData['information']);
    }

    public function getGenre()
    {
        return $this->query($this->parserData['genre']);
    }
    //$node->getAttribute('title') -> виведе вміст title
    public function getStudio()
    {
        return $this->query($this->parserData['studio']);
    }
    //$node->getAttribute('content') -> to get mark, $node->getAttribute('itemprop') -> for filter
    public function getMark()
    {
        return $this->query($this->parserData['mark']);
    }

    //echo
    public function getDescription()
    {
        return $this->query($this->parserData['description']);
    }

    // $node->getAttribute('src')
    public function getImage()
    {
        return $this->query($this->parserData['image']);
    }

    public function getAllData()
    {
        $data['title'] = $this->getDataFromObject->getDataByNodeValue($this->getTitle());
        $data['information'] =  $this->getDataFromObject->getDataByNodeValue($this->getInformation());
        $data['genre'] = $this->getDataFromObject->getDataByNodeValue($this->getGenre());
        $data['studio'] = $this->getDataFromObject->getDataByAttribute($this->getStudio(), 'title')[0];

        $data['mark'] = $this->getDataFromObject->getDataByAttribute($this->getMark(), 'content')[1];

        $data['description'] = $this->getDataFromObject->getDataByNodeValue($this->getDescription());

        $data['image'] = $this->getDataFromObject->getDataByAttribute($this->getImage(), 'src')[0];

        return $data;
    }

} 