<?php

namespace Readers;

use FileReaderInterface;

class CsvReader implements FileReaderInterface
{
    /**
     * @param string $filePath
     * @return mixed
     */
    public function readFile($filePath)
    {
        $array = [];
        if (($handle = fopen($filePath, "r")) !== false) {
            if (($data = fgetcsv($handle, 1000, ",")) !== false) {
                $keys = $data;
            }
            while (($data = fgetcsv($handle, 1000, ",")) !== false) {
                $array[] = array_combine($keys, $data);
            }
            fclose($handle);
        }
        return $array;
    }
}