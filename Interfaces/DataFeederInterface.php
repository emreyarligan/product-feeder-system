<?php 

namespace Interfaces;

interface DataFeederInterface
{
    public function readData(string $path);
    public function createFile();
}