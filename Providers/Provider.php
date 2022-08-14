<?php 

namespace Providers;

require dirname(__DIR__).'/Interfaces/DataFeederInterface.php';

use Interfaces\DataFeederInterface;

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
        // create file with $this->jsonData...
    }
}
