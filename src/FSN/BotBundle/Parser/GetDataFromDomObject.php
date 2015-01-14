<?php

namespace FSN\BotBundle\Parser;


use DOMNodeList;

class GetDataFromDomObject
{
    public function getDataByNodeValue(DOMNodeList $object)
    {
        $data = '';
        foreach ($object as $node)
        {
           $data = $node->nodeValue;
        }

        return $data;
    }

    public function getDataByAttribute(DOMNodeList $object, $attribute)
    {
        $data = array();
        $i = 0;
        foreach ($object as $node)
        {
            $data[$i++] = $node->getAttribute($attribute);
        }

        return $data;
    }
} 