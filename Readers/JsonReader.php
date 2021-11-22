<?php

namespace Readers;

use FileReaderInterface;

class JsonReader implements FileReaderInterface
{
    /**
     * @param string $filePath
     * @return mixed
     */
    public function readFile($filePath)
    {
        $data = file_get_contents($filePath);
        return json_decode($data, true);
    }
}