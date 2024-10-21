<?php

class Sables {
    protected $id;
    protected $descripcion_uno;
    protected $descripcion_dos;
    protected $descripcion_tres;
    protected $descripcion_cuatro;
    protected $descripcion_cinco;
    protected $empuniadura;
    protected $cristal;
    protected $hoja;
    protected $imagen_uno;
    protected $imagen_dos;
    protected $imagen_tres;
    protected $nombre_sables;

    protected $createValues= ['id', 'descripcion_uno', 'descripcion_dos', 'descripcion_tres', 'descripcion_cuatro', 'descripcion_cinco', 'empuniadura', 'cristal', 'hoja', 'imagen_uno', 'imagen_dos', 'imagen_tres'];
      
      /* Metodo Para Insertar un nuevo sable a la BD */

public function insert($descripcion_uno,$descripcion_dos,$descripcion_tres,$descripcion_cuatro,$descripcion_cinco,$empuniadura,$cristal, $hoja, $imagen_uno,$imagen_dos,$imagen_tres,$nombre_sables_id  ){
    $conexion = (new Conexion())->getConexion();

    $query = "INSERT INTO naves VALUES (NULL,:descripcion_uno,:descripcion_dos,:descripcion_tres,:descripcion_cuatro,:descripcion_cinco,:empuniadura,:cristal,:hoja,:imagen_uno,:imagen_dos,:imagen_tres,:nombre_sables_id )";

    $PDOStatement = $conexion->prepare($query);
    $PDOStatement->execute(
        [
        'descripcion_uno' => $descripcion_uno,
        'descripcion_dos' => $descripcion_dos,
        'descripcion_tres' => $descripcion_tres,
        'descripcion_cuatro' => $descripcion_cuatro,
        'descripcion_cinco' => $descripcion_cinco,
        'empuniadura' => $empuniadura,
        'cristal' => $cristal,
        'hoja' => $hoja,
        'imagen_uno' => $imagen_uno,
        'imagen_dos' => $imagen_dos,
        'imagen_tres' => $imagen_tres,
        'nombre_naves_id' => $nombre_sables_id,

        ]
        );
}
       
       /* editar sables */

public function edit($descripcion_uno,$descripcion_dos,$descripcion_tres,$descripcion_cuatro,$descripcion_cinco,$empuniadura,$cristal,$hoja,$nombre_sables_id,$id){

    
    $conexion = (new Conexion())->getConexion();

    $query = "UPDATE sables SET
        descripcion_uno = :descripcion_uno,
        descripcion_dos = :descripcion_dos,
        descripcion_tres = :descripcion_tres,
        descripcion_cuatro = :descripcion_cuatro,
        descripcion_cinco = :descripcion_cinco,
        empuniadura = :empuniadura,
        cristal = :cristal,
        hoja = :hoja,
        nombre_sables_id = :nombre_sables_id
         WHERE id = :id ";



    $PDOStatement = $conexion->prepare($query);
    $PDOStatement->execute(
        [
        'id' => $id,    
        'descripcion_uno' => $descripcion_uno,
        'descripcion_dos' => $descripcion_dos,
        'descripcion_tres' => $descripcion_tres,
        'descripcion_cuatro' => $descripcion_cuatro,
        'descripcion_cinco' => $descripcion_cinco,
        'empuniadura' => $empuniadura,
        'cristal' => $cristal,
        'hoja' => $hoja,
        'nombre_naves_id' => $nombre_sables_id,


        ]
        );

            

}


/* Remplazar Imagen */

public function reemplazar_imagen($imagen_uno,$imagen_dos,$imagen_tres,$id){
    $conexion = (new Conexion())->getConexion();
    $query = "UPDATE sables SET imagen_uno,imagen_dos,imagen_tres = :imagen_uno,:imagen_dos,:imagen_tres WHERE id = :id";

    $PDOStatement = $conexion->prepare($query);
    $PDOStatement->execute(
        [
        'id' => $id,
        'imagen_uno' => $imagen_uno,
        'imagen_dos' => $imagen_dos,
        'imagen_tres' => $imagen_tres,
        
        
        ]
        );


   }

    /* Eliminar sables */

public function delete(){
    $conexion = (new Conexion())->getConexion();
    $query ="DELETE FROM sables WHERE id = ?";

    $PDOStatement = $conexion->prepare($query);
    $PDOStatement->execute([$this->id]);



}





      /* Devuelve es una instancia del objeto sables, con todas sus propiedades */
      public function createSables($sablesData) : Sables {

        $sables = new self();
  /* primero, por cada valor en nuestro array de valores, buscamos el valor correspondiente y se lo asignamos a la propiedad */

        foreach ($this->createValues as $value) {
            $sables->{$value} = $sablesData[$value];
        }
      
     /* nombre_sables */

     $sables->nombre_sables = (new nombre_sables())->get_x_id($sablesData['nombre_sables_id']);

     return $sables;


}
    //Metodo
    //Devuele catalogo Completo

    public function catalogo_completo() : array {
        $catalogo = [];

        //llamamos a la conexion
        $conexion = (new Conexion())->getConexion();

        $query = "SELECT * FROM sables";

        $PDOStatement = $conexion->prepare($query);

        $PDOStatement->setFetchMode(PDO::FETCH_ASSOC);

        $PDOStatement->execute();

        while($result = $PDOStatement->fetch()){
            $catalogo[] = $this->createSables($result);
        }

        return $catalogo;
    }

        //Devuelve el catalogo de sables de una nombre_sables en particular

        public function catalogo_x_nombre_sables(int $nombre_sables_id) : array {
            $catalogo = [];
    
            //llamamos a la conexion
            $conexion = (new Conexion())->getConexion();
    
            $query = "SELECT * FROM sables WHERE nombre_sables_id= ?";
    
            $PDOStatement = $conexion->prepare($query);
    
            $PDOStatement->setFetchMode(PDO::FETCH_ASSOC);
    
            $PDOStatement->execute(
                [$nombre_sables_id]
            );
    
            while($result = $PDOStatement->fetch()){
                $catalogo[] = $this->createSables($result);
            }
    
    
            return $catalogo;
        



}

//Devuelve los datos de un sable en particular

public function sables_x_id(int $idSables) : ?Sables {
    

    //llamamos a la conexion
    $conexion = (new Conexion())->getConexion();

    $query = "SELECT * FROM sables WHERE id = :idSables";

    $PDOStatement = $conexion->prepare($query);

    $PDOStatement->setFetchMode(PDO::FETCH_ASSOC);

    $PDOStatement->execute(
        [
            'idSables' => $idSables
        ]
    );

    $result = $this->createSables($PDOStatement->fetch());

    if (!$result) {
        return null;
    }

    return $result;


}



/* Traer los nombres de cada clase sin usar JOIN (con los metodos) */

    public function nombre_completo() {
        return $this->getNombreSables()->getNombre();
    }


    // Método buscar Sables  
public function buscarSables($keywords) {  
    // Llamamos a la conexión  
    $conexion = (new Conexion())->getConexion();  
    
    // Creamos una variable con comodines para buscar coincidencias  
    $keywords = '%' . $keywords . '%';  

    // Llamamos a la query usando JOIN  
    $query = "  
    SELECT sables.*   
    FROM sables   
    JOIN nombre_sables ON sables._id = nombre_sables.id  
    WHERE nombre_sables.nombre LIKE :keywords";  

    // Preparamos la consulta  
    $PDOStatement = $conexion->prepare($query);  

    // Preparamos la búsqueda con BINDPARAM  
    $PDOStatement->bindParam(':keywords', $keywords, PDO::PARAM_STR);  

    // Ejecutamos  
    $PDOStatement->execute();  

    // Obtenemos los resultados  
    $resultados = $PDOStatement->fetchAll(PDO::FETCH_CLASS, self::class);  

    return $resultados;  
}


    

    

    /**
     * Get the value of nombre_sables
     */
    public function getNombreSables() {
        return $this->nombre_sables;
    }

    /**
     * Get the value of id
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Get the value of descripcion_uno
     */
    public function getDescripcionUno() {
        return $this->descripcion_uno;
    }

    /**
     * Set the value of descripcion_uno
     */
    public function setDescripcionUno($descripcion_uno): self {
        $this->descripcion_uno = $descripcion_uno;
        return $this;
    }

    /**
     * Get the value of descripcion_dos
     */
    public function getDescripcionDos() {
        return $this->descripcion_dos;
    }

    /**
     * Set the value of descripcion_dos
     */
    public function setDescripcionDos($descripcion_dos): self {
        $this->descripcion_dos = $descripcion_dos;
        return $this;
    }

    /**
     * Get the value of descripcion_tres
     */
    public function getDescripcionTres() {
        return $this->descripcion_tres;
    }

    /**
     * Set the value of descripcion_tres
     */
    public function setDescripcionTres($descripcion_tres): self {
        $this->descripcion_tres = $descripcion_tres;
        return $this;
    }

    /**
     * Get the value of descripcion_cuatro
     */
    public function getDescripcionCuatro() {
        return $this->descripcion_cuatro;
    }

    /**
     * Set the value of descripcion_cuatro
     */
    public function setDescripcionCuatro($descripcion_cuatro): self {
        $this->descripcion_cuatro = $descripcion_cuatro;
        return $this;
    }

    /**
     * Get the value of descripcion_cinco
     */
    public function getDescripcionCinco() {
        return $this->descripcion_cinco;
    }

    /**
     * Set the value of descripcion_cinco
     */
    public function setDescripcionCinco($descripcion_cinco): self {
        $this->descripcion_cinco = $descripcion_cinco;
        return $this;
    }

    /**
     * Get the value of empuniadura
     */
    public function getEmpuniadura() {
        return $this->empuniadura;
    }

    /**
     * Get the value of cristal
     */
    public function getCristal() {
        return $this->cristal;
    }

    /**
     * Get the value of hoja
     */
    public function getHoja() {
        return $this->hoja;
    }

    /**
     * Get the value of imagen_uno
     */
    public function getImagenUno() {
        return $this->imagen_uno;
    }

    /**
     * Get the value of imagen_dos
     */
    public function getImagenDos() {
        return $this->imagen_dos;
    }

    /**
     * Get the value of imagen_tres
     */
    public function getImagenTres() {
        return $this->imagen_tres;
    }
}




?>