<?php
class Nombre_Naves{
    protected $id;
    protected $nombre;
    
/* devuelve los datos de un Nombre_Naves en particular */

public function get_x_id(int $id) : ?Nombre_Naves {

     //llamamos a la conexion
     $conexion = (new Conexion())->getConexion();

     $query = "SELECT * FROM nombre_naves WHERE id = $id";
 
     $PDOStatement = $conexion->prepare($query);
 
     $PDOStatement->setFetchMode(PDO::FETCH_CLASS, self::class);
 
     $PDOStatement->execute();
    
     $result = $PDOStatement->fetch();
 
     if (!$result) {
         return null;
     }
 
     return $result;
}

/* Devuele el listado completo de Nombre_Naves */

public function lista_completa() : array {
    $resultado = [];

    //llamamos a la conexion
    $conexion = (new Conexion())->getConexion();

    $query = "SELECT * FROM nombre_naves";

    $PDOStatement = $conexion->prepare($query);

    $PDOStatement->setFetchMode(PDO::FETCH_CLASS, self::class);

    $PDOStatement->execute();

    $resultado = $PDOStatement->fetchAll();

    return $resultado;
}


/* Metodo Para Insertar una nueva Nombre_Naves a la BD */

public function insert($nombre){
    $conexion = (new Conexion())->getConexion();

    $query = "INSERT INTO nombre_naves(id, nombre) VALUES(NULL, :nombre )";

    $PDOStatement = $conexion->prepare($query);
    $PDOStatement->execute(
        [
        'nombre' => $nombre,
        ]
        );
}
/* editar Nombre_Naves */
public function edit($nombre, $id){
    $conexion = (new Conexion())->getConexion();

    $query = "UPDATE  nombre_naves SET nombre = :nombre WHERE id = :id";

    $PDOStatement = $conexion->prepare($query);
    $PDOStatement->execute(
        [
        'id' => $id,
        'nombre' => $nombre,
        
        ]
        );
}


/* Eliminar Nombre_Naves */

public function delete(){
    $conexion = (new Conexion())->getConexion();
    $query ="DELETE FROM nombre_naves WHERE id = ?";

    $PDOStatement = $conexion->prepare($query);
    $PDOStatement->execute([$this->id]);

}


 



   

    /**
     * Get the value of id
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Get the value of nombre
     */
    public function getNombre() {
        return $this->nombre;
    }
} 

?>