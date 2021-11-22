<?php
    require_once('functions.php');

    require_once('Autoloader.php');
    Autoloader::register();

    /*
     * Funkciju importavimas.
     */
    use Readers\CsvReader;
    use Readers\XmlReader;
    use Readers\JsonReader;

    /*
     * Nurodome faila kuri norime naudoti.
     */
    $filePath = 'files/1.csv';

    /*
     * Nustatome failo tipa (csv, xml, json).
     */
    $ext = pathinfo($filePath, PATHINFO_EXTENSION);

    /*
     * Pagal failo tipa kvieciame bloka, kuriame yra jam priklausanti funkcija, o kitu atveju pranesame apie netinkama failo tipa.
     */
    switch($ext) {
        case "csv":
            $csvReader = new CsvReader();
            $csvData = $csvReader->readfile($filePath);
            dump($csvData);
            break;
        case "xml":
            $xmlReader = new XmlReader();
            $xmlData = $xmlReader->readFile($filePath);
            dump($xmlData);
            break;
        case "json":
            $jsonReader = new JsonReader();
            $jsonData = $jsonReader->readFile($filePath);
            dump($jsonData);
            break;
        default:
            echo 'Invalid file type.';
            break;
    }








