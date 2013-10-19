<?php
require "XMLtoJsoninterface.php";
abstract class XMLtoJSONAbstract implements IXMLToJson
{
   public function loadXML($string)
   {
    $xml=simplexml_load_string($string);
        if($xml==false)
        {
            return "Not correct XML";
        }
       else
           return $xml;
   }
     abstract public function toJSON();
}