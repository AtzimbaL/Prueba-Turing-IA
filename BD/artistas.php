<?php

header('Access-Control-Allow-Origin');

include_once 'db.php';

class Artistas extends BD{
    function obtenerArtistas(){
        $query = $this->connect()->query('SELECT * FROM artista');

        return $query;
    }
}

?>