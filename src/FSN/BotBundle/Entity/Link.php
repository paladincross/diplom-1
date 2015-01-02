<?php


namespace FSN\BotBundle\Entity;

class Link
{
    protected $link;

    public function getLink()
    {
        return $this->link;
    }

    public function setLink($link)
    {
        $this->link = $link;
    }
} 