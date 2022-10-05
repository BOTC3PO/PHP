<?php

    function getJson($url)
    {
        $archivo = file_get_contents($url);
        $lista = json_decode($archivo, true);
        return $lista;
    }

    function saveJson($url, $lista)
    {
        $json = json_encode($lista);
        $stream = fopen($url, 'w');
        fwrite($stream, $json);
        fclose($stream);
    }

?>