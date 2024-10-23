<?php
require_once 'Conexion.php';
class Nombre_Sables{
    protected $id;
    protected $nombre;
    
/* devuelve los datos de un nombre_sables en particular */

public function get_x_id(int $id) : ?Nombre_Sables {

     //llamamos a la conexion
     $conexion = (new Conexion())->getConexion();

     $query = "SELECT * FROM nombre_sables WHERE id = $id";
 
     $PDOStatement = $conexion->prepare($query);
 
     $PDOStatement->setFetchMode(PDO::FETCH_CLASS, self::class);
 
     $PDOStatement->execute();
    
     $result = $PDOStatement->fetch();
 
     if (!$result) {
         return null;
     }
 
     return $result;
}

/* Devuele el listado completo de nombre_sables */

public function lista_completa() : array {
    $resultado = [];

    //llamamos a la conexion
    $conexion = (new Conexion())->getConexion();

    $query = "SELECT * FROM nombre_sables";

    $PDOStatement = $conexion->prepare($query);

    $PDOStatement->setFetchMode(PDO::FETCH_CLASS, self::class);

    $PDOStatement->execute();

    $resultado = $PDOStatement->fetchAll();

    return $resultado;
}


/* Metodo Para Insertar una nueva nombre_sables a la BD */

public function insert($nombre){
    $conexion = (new Conexion())->getConexion();

    $query = "INSERT INTO nombre_sables(id, nombre) VALUES(NULL, :nombre )";

    $PDOStatement = $conexion->prepare($query);
    $PDOStatement->execute(
        [
        'nombre' => $nombre,
        ]
        );
}
/* editar nombre_sables */
public function edit($nombre, $id){
    $conexion = (new Conexion())->getConexion();

    $query = "UPDATE  nombre_sables SET nombre = :nombre WHERE id = :id";

    $PDOStatement = $conexion->prepare($query);
    $PDOStatement->execute(
        [
        'id' => $id,
        'nombre' => $nombre,
        
        ]
        );
}


/* Eliminar nombre_sables */

public function delete(){
    $conexion = (new Conexion())->getConexion();
    $query ="DELETE FROM nombre_sables WHERE id = ?";

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