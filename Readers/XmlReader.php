<?php

namespace Readers;

use FileReaderInterface;

class XmlReader implements FileReaderInterface
{
    /**
     * @param string $filePath
     * @return mixed
     */
    public function readFile($filePath)
    {
        $data = simplexml_load_file($filePath);
        $json = json_encode($data);
        return json_decode($json, true);
    }
}