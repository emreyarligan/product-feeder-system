<?php 

namespace Providers;

require dirname(__DIR__).'/Interfaces/DataFeederInterface.php';
require dirname(__DIR__).'/helpers/CreateFileHelper.php';

use Interfaces\DataFeederInterface;
use Helpers\CreateFileHelper;

class Provier implements DataFeederInterface
{
    private $jsonData;
    
    public function readData(string $path)
    {
        $this->jsonData = file_get_contents($path);
        return self::createFile();
    }

    public function createFile()
    {
        CreateFileHelper::createXMLFile(
            $this->jsonData,
            get_called_class()
        );
    }
}
