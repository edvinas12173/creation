<?php

interface FileReaderInterface
{
    /**
     * @param string $filePath
     * @return mixed
     */
    public function readFile($filePath);
}