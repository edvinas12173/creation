<?php
    function dd($var) {
        dump($var);
        exit;
    }
    function dump($var) {
        echo '<pre>';
        var_dump($var);
        echo '</pre>';
    }