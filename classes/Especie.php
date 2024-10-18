<?php
class Especie{
    protected $id;
    protected $nombre;
    
/* devuelve los datos de un especie en particular */

public function get_x_id(int $id) : ?Especie {

     //llamamos a la conexion
     $conexion = (new Conexion())->getConexion();

     $query = "SELECT * FROM especie WHERE id = $id";
 
     $PDOStatement = $conexion->prepare($query);
 
     $PDOStatement->setFetchMode(PDO::FETCH_CLASS, self::class);
 
     $PDOStatement->execute();
    
     $result = $PDOStatement->fetch();
 
     if (!$result) {
         return null;
     }
 
     return $result;
}

/* Devuele el listado completo de especie */

public function lista_completa() : array {
    $resultado = [];

    //llamamos a la conexion
    $conexion = (new Conexion())->getConexion();

    $query = "SELECT * FROM especie";

    $PDOStatement = $conexion->prepare($query);

    $PDOStatement->setFetchMode(PDO::FETCH_CLASS, self::class);

    $PDOStatement->execute();

    $resultado = $PDOStatement->fetchAll();

    return $resultado;
}


/* Metodo Para Insertar una nueva especie a la BD */

public function insert($nombre){
    $conexion = (new Conexion())->getConexion();

    $query = "INSERT INTO especie(id, nombre) VALUES(NULL, :nombre )";

    $PDOStatement = $conexion->prepare($query);
    $PDOStatement->execute(
        [
        'nombre' => $nombre,
        ]
        );
}
/* editar especie */
public function edit($nombre, $id){
    $conexion = (new Conexion())->getConexion();

    $query = "UPDATE  especie SET nombre = :nombre WHERE id = :id";

    $PDOStatement = $conexion->prepare($query);
    $PDOStatement->execute(
        [
        'id' => $id,
        'nombre' => $nombre,
        
        ]
        );
}


/* Eliminar Especie */

public function delete(){
    $conexion = (new Conexion())->getConexion();
    $query ="DELETE FROM especie WHERE id = ?";

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