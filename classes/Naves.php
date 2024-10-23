<?php
require_once 'Conexion.php';
class Naves {
    protected $id;
    protected $sistema_navegacion;
    protected $coste;
    protected $fabricante;
    protected $especificacion_tecnica;
    protected $tamanio;
    protected $faccion;
    protected $tipo;
    protected $velocidad;
    protected $armamento;
    protected $descripcion;
    protected $imagen_uno;
    protected $imagen_dos;
    protected $nombre_naves;

    protected $createValues= ['id', 'sistema_navegacion', 'coste', 'fabricante', 'especificacion_tecnica', 'tamanio', 'faccion', 'tipo', 'velocidad', 'armamento', 'descripcion', 'imagen_uno', 'imagen_dos'];
      
      /* Metodo Para Insertar una nueva nave a la BD */

public function insert($sistema_navegacion,$coste,$fabricante,$especificacion_tecnica,$tamanio,$faccion,$tipo, $velocidad, $armamento, $descripcion, $imagen_uno,$imagen_dos,$nombre_naves_id  ){
    $conexion = (new Conexion())->getConexion();

    $query = "INSERT INTO naves VALUES (NULL,:sistema_navegacion,:coste,:fabricante,:especificacion_tecnica,:tamanio,:faccion,:tipo,:velocidad,:armamento,:descripcion,:imagen_uno,:imagen_dos,:nombre_naves_id )";

    $PDOStatement = $conexion->prepare($query);
    $PDOStatement->execute(
        [
        'sistema_navegacion' => $sistema_navegacion,
        'coste' => $coste,
        'fabricante' => $fabricante,
        'especificacion_tecnica' => $especificacion_tecnica,
        'tamanio' => $tamanio,
        'faccion' => $faccion,
        'tipo' => $tipo,
        'velocidad' => $velocidad,
        'armamento' => $armamento,
        'descripcion' => $descripcion,
        'imagen_uno' => $imagen_uno,
        'imagen_dos' => $imagen_dos,
        'nombre_naves_id' => $nombre_naves_id,

        ]
        );
}
       
       /* editar naves */

public function edit($sistema_navegacion,$coste,$fabricante,$especificacion_tecnica,$tamanio,$faccion,$tipo,$velocidad,$armamento,$descripcion,$nombre_naves_id,$id){

    
    $conexion = (new Conexion())->getConexion();

    $query = "UPDATE naves SET
        sistema_navegacion = :sistema_navegacion,
        coste = :coste,
        fabricante = :fabricante,
        especificacion_tecnica = :especificacion_tecnica,
        tamanio = :tamanio,
        faccion = :faccion,
        tipo = :tipo,
        velocidad = :velocidad,
        armamento = :armamento,
        descripcion = :descripcion,
        nombre_naves_id = :nombre_naves_id
         WHERE id = :id ";



    $PDOStatement = $conexion->prepare($query);
    $PDOStatement->execute(
        [
        'id' => $id,    
        'sistema_navegacion' => $sistema_navegacion,
        'coste' => $coste,
        'fabricante' => $fabricante,
        'especificacion_tecnica' => $especificacion_tecnica,
        'tamanio' => $tamanio,
        'faccion' => $faccion,
        'tipo' => $tipo,
        'velocidad' => $velocidad,
        'armamento' => $armamento,
        'descripcion' => $descripcion,
        'nombre_naves_id' => $nombre_naves_id,


        ]
        );

            

}


/* Remplazar Imagen */

public function reemplazar_imagen($imagen_uno,$imagen_dos,$id){
    $conexion = (new Conexion())->getConexion();
    $query = "UPDATE naves SET imagen_uno,imagen_dos = :imagen_uno,:imagen_dos WHERE id = :id";

    $PDOStatement = $conexion->prepare($query);
    $PDOStatement->execute(
        [
        'id' => $id,
        'imagen_uno' => $imagen_uno,
        'imagen_dos' => $imagen_dos,
        
        
        ]
        );


   }

    /* Eliminar naves */

public function delete(){
    $conexion = (new Conexion())->getConexion();
    $query ="DELETE FROM naves WHERE id = ?";

    $PDOStatement = $conexion->prepare($query);
    $PDOStatement->execute([$this->id]);



}





      /* Devuelve es una instancia del objeto naves, con todas sus propiedades */
      public function createNaves($navesData) : Naves {

        $naves = new self();
  /* primero, por cada valor en nuestro array de valores, buscamos el valor correspondiente y se lo asignamos a la propiedad */

        foreach ($this->createValues as $value) {
            $naves->{$value} = $navesData[$value];
        }
      
     /* nombre_naves */

     $naves->nombre_naves = (new nombre_naves())->get_x_id($navesData['nombre_naves_id']);

     return $naves;


}
    //Metodo
    //Devuele catalogo Completo

    public function catalogo_completo() : array {
        $catalogo = [];

        //llamamos a la conexion
        $conexion = (new Conexion())->getConexion();

        $query = "SELECT * FROM naves";

        $PDOStatement = $conexion->prepare($query);

        $PDOStatement->setFetchMode(PDO::FETCH_ASSOC);

        $PDOStatement->execute();

        while($result = $PDOStatement->fetch()){
            $catalogo[] = $this->createNaves($result);
        }

        return $catalogo;
    }

        //Devuelve el catalogo de naves de una nombre_naves en particular

        public function catalogo_x_nombre_naves(int $nombre_naves_id) : array {
            $catalogo = [];
    
            //llamamos a la conexion
            $conexion = (new Conexion())->getConexion();
    
            $query = "SELECT * FROM naves WHERE nombre_naves_id= ?";
    
            $PDOStatement = $conexion->prepare($query);
    
            $PDOStatement->setFetchMode(PDO::FETCH_ASSOC);
    
            $PDOStatement->execute(
                [$nombre_naves_id]
            );
    
            while($result = $PDOStatement->fetch()){
                $catalogo[] = $this->createNaves($result);
            }
    
    
            return $catalogo;
        



}

//Devuelve los datos de un nave en particular

public function naves_x_id(int $idNaves) : ?Naves {
    

    //llamamos a la conexion
    $conexion = (new Conexion())->getConexion();

    $query = "SELECT * FROM naves WHERE id = :idNaves";

    $PDOStatement = $conexion->prepare($query);

    $PDOStatement->setFetchMode(PDO::FETCH_ASSOC);

    $PDOStatement->execute(
        [
            'idNaves' => $idNaves
        ]
    );

    $result = $this->createNaves($PDOStatement->fetch());

    if (!$result) {
        return null;
    }

    return $result;


}



/* Traer los nombres de cada clase sin usar JOIN (con los metodos) */

    public function nombre_completo() {
        return $this->getNombreNaves()->getNombre();
    }

// Método buscar Naves 
public function buscarNaves($keywords) {  
    // Llamamos a la conexión  
    $conexion = (new Conexion())->getConexion();  
    
    // Creamos una variable con comodines para buscar coincidencias  
    $keywords = '%' . $keywords . '%';  

    // Llamamos a la query usando JOIN  
    $query = "  
    SELECT naves.*   
    FROM naves   
    JOIN nombre_naves ON naves.id = nombre_naves.id  
    WHERE nombre_naves.nombre LIKE :keywords";  

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
     * Get the value of nombre_naves
     */
    public function getNombreNaves() {
        return $this->nombre_naves;
    }

    /**
     * Get the value of id
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Get the value of sistema_navegacion
     */
    public function getSistemaNavegacion() {
        return $this->sistema_navegacion;
    }

    /**
     * Get the value of coste
     */
    public function getCoste() {
        return $this->coste;
    }

    /**
     * Get the value of fabricante
     */
    public function getFabricante() {
        return $this->fabricante;
    }

    /**
     * Get the value of especificacion_tecnica
     */
    public function getEspecificacionTecnica() {
        return $this->especificacion_tecnica;
    }

    /**
     * Get the value of tamanio
     */
    public function getTamanio() {
        return $this->tamanio;
    }

    /**
     * Get the value of faccion
     */
    public function getFaccion() {
        return $this->faccion;
    }

    /**
     * Get the value of tipo
     */
    public function getTipo() {
        return $this->tipo;
    }

    /**
     * Get the value of velocidad
     */
    public function getVelocidad() {
        return $this->velocidad;
    }

    /**
     * Get the value of armamento
     */
    public function getArmamento() {
        return $this->armamento;
    }

    /**
     * Get the value of descripcion
     */
    public function getDescripcion() {
        return $this->descripcion;
    }

    /**
     * Set the value of descripcion
     */
    public function setDescripcion($descripcion): self {
        $this->descripcion = $descripcion;
        return $this;
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
}




?>