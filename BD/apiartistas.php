<?php

include_once 'artistas.php';

class ApiArtistas{
    function getAll(){
        $artista = new Artistas();
        $artistas = array();
        $artistas["items"] = array();

        $res = $artista->obtenerArtistas();

        //En caso de haber elementos
        if($res->rowCount()){
            while($row = $res->fetch(PDO::FETCH_ASSOC)){
                $item = array(
                    'IDArtista' => $row['IDArtista'],
                    'Nombre' => $row['Nombre'],
                    'LugarNacimiento' => $row['LugarNacimiento'],
                    'Edad' => $row['Edad'],
                    'Imagem' => $row['Imagen']
                );
                // INGRESAR ELEMENTO EN UN ARREGLO EXISTENTE
                array_push($artistas['items'], $item);
            }

            echo json_encode($artistas);

        }else{ // En caso de no haber elementos
            echo json_encode(array('mensaje' => 'No hay registos'));
        }
    }
}

?>