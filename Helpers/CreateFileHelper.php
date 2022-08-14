<?php

namespace Helpers;

use SimpleXMLElement;

class CreateFileHelper {

    public $provier;

    public static function createXMLFile(string $jsonString, string $provider)
    {
        $provider = self::getProviderName($provider);
        $xmlPath = dirname(__DIR__).'/Feeds/'.$provider.'/XML';

        if (!is_dir($xmlPath)) mkdir($xmlPath,0777,true);

        $xmlContent = self::covertToXML(json_decode($jsonString,true),$provider);

        $fileName = $provider.'-'.date('d-m-Y-H-i-s').'.xml';

        $file = fopen("$xmlPath/$fileName", 'w');

        fwrite($file,$xmlContent);
        fclose($file);

        echo 'XML file is created... The file is here:'.PHP_EOL.$xmlPath.'/'.$fileName.PHP_EOL;
    }

    private static function covertToXML(array $array, string $provider) : string
    {
        $xml = new SimpleXMLElement("<$provider/>");


        foreach ($array as $childArray) {
            $product = $xml->addChild('product');
            foreach ($childArray as $key => $value) {
                $product->addChild($key,$value);
            }
        }

        return $xml->asXML();
    }

    private static function getProviderName($provider)
    {
        $provider = explode('\\', $provider);
        return end($provider); 
    }
}