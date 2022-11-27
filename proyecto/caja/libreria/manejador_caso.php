<?php


class manejador_caso
{

    static function guardarCaso($caso)
    {
        if (isset($caso->id) && $caso->id > 0) {
            $sql = "UPDATE caso SET cedula = ?, nombre = ?, fecha = ?, articulo = ?, valor = ?, lugar = ?, lat = ?, lng = ?
            WHERE id = ?;";

            $stmt = mysqli_prepare(conexion::instanciaDB(), $sql);
            mysqli_stmt_bind_param($stmt, "ssssssssi", $caso->cedula, $caso->nombre, $caso->fecha, $caso->articulo, $caso-> valor, $caso->lugar, $caso-> lat, $caso->lng, $caso->id);
            mysqli_stmt_close($stmt);
            return $caso->id;
        
        } else {
            $sql = "INSERT INTO caso (cedula, nombre, fecha, articulo, valor, lugar, lat, lng) VALUES 
            (?,?,?,?,?,?,?,?)";

            $stmt = mysqli_prepare(conexion::instanciaDB(), $sql);
            mysqli_stmt_bind_param($stmt, "ssssssss", $caso->cedula, $caso->nombre, $caso->fecha, $caso->articulo, $caso->valor, $caso->lugar, $caso->lat, $caso->lng);

            mysqli_stmt_execute($stmt);
            mysqli_stmt_close($stmt);

            $id = mysqli_insert_id(conexion::instanciaDB());
            return $id;
        }
    }
    static function listarCasos()
    {
        $sql = "SELECT * FROM caso";
        $resultado = mysqli_query(conexion::instanciaDB(), $sql);
        $caso = [];
        while ($row = mysqli_fetch_object($resultado)) {
            $caso[] = $row;
        }
        return $caso;
    }
    static function casosporId($id){
        $Id = (int) $id;
        $sql = "SELECT * FROM caso WHERE id = {$id}";
        $resultado = mysqli_query(conexion::instanciaDB(),$sql);
        $final = null;
        if(mysqli_num_rows($resultado) > 0) {
            $final = mysqli_fetch_object($resultado);

        }
        return $final;
    }

    static function dataMapa(){
        $sql = "SELECT * FROM caso";
        $rs = mysqli_query(conexion::instanciaDB(), $sql);
        $data = [];
        while($row = mysqli_fetch_object($rs)){
            $data[] = $row;
        }
        return $data;
    }
}
