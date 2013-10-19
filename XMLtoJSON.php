<?php
require"XMLJSONAbstract.php";
class XMLToJSON extends XMLtoJSONAbstract
{
    private $xml;
    function  _construct($xml_message)
    {
      $this->xml=$this->loadXML($xml_message);
    }
    public function toJSON()
    {
         $xml=$this->xml;
        $json=json_encode($xml);
        return $json;
    }
}