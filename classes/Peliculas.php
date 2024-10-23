<?php
require_once 'Conexion.php';
class Peliculas {
    protected $id;
    protected $estreno;
    protected $duracion;
    protected $recaudacion;
    protected $personajes_principales;
    protected $reparto;
    protected $director;
    protected $produccion;
    protected $guion;
    protected $musica;
    protected $fotografia;
    protected $montaje;
    protected $vestuario;
    protected $sinopsis;
    protected $curiosidades;
    protected $imagen;
    protected $parrafo_uno;
    protected $parrafo_dos;
    protected $parrafo_tres;
    protected $parrafo_cuatro;
    protected $parrafo_cinco;
    protected $titulo;

    protected $createValues= ['id', 'estreno', 'duracion', 'recaudacion', 'personajes_principales', 'reparto', 'director', 'produccion', 'guion', 'musica', 'fotografia', 'montaje', 'vestuario', 'sinopsis', 'curiosidades', 'imagen', 'parrafo_uno', 'parrafo_dos', 'parrafo_tres', 'parrafo_cuatro', 'parrafo_cinco'];
      
      /* Metodo Para Insertar un nueva pelicula a la BD */

public function insert($estreno,$duracion,$recaudacion,$personajes_principales,$reparto,$director,$produccion, $guion, $musica,$fotografia,$montaje,$vestuario,$sinopsis,$curiosidades,$imagen,$parrafo_uno, $parrafo_dos, $parrafo_tres,$parrafo_cuatro,$parrafo_cinco,$titulo_id  ){
    $conexion = (new Conexion())->getConexion();

    $query = "INSERT INTO naves VALUES (NULL,:estreno,:duracion,:recaudacion,:personajes_principales,:reparto,:director,:produccion,:guion,:musica,:fotografia,:montaje,:vestuario,:sinopsis,:curiosidades,:imagen,:parrafo_uno,:parrafo_dos,:parrafo_tres,:parrafo_cuatro,:parrafo_cinco,:titulo_id )";

    $PDOStatement = $conexion->prepare($query);
    $PDOStatement->execute(
        [
        'estreno' => $estreno,
        'duracion' => $duracion,
        'recaudacion' => $recaudacion,
        'personajes_principales' => $personajes_principales,
        'reparto' => $reparto,
        'director' => $director,
        'produccion' => $produccion,
        'guion' => $guion,
        'musica' => $musica,
        'fotografia' => $fotografia,
        'montaje' => $montaje,
        'vestuario' => $vestuario,
        'sinopsis' => $sinopsis,
        'curiosidades' => $curiosidades,
        'imagen' => $imagen,
        'parrafo_uno' => $parrafo_uno,
        'parrafo_dos' => $parrafo_dos,
        'parrafo_tres' => $parrafo_tres,
        'parrafo_cuatro' => $parrafo_cuatro,
        'parrafo_cinco' => $parrafo_cinco,
        'titulo_id' => $titulo_id,

        ]
        );
}
       
       /* editar peliculas */

public function edit($estreno,$duracion,$recaudacion,$personajes_principales,$reparto,$director,$produccion,$guion,$musica,$fotografia,$montaje,$vestuario,$sinopsis,$curiosidades,$parrafo_uno,$parrafo_dos,$parrafo_tres,$parrafo_cuatro,$parrafo_cinco,$titulo_id,$id){

    
    $conexion = (new Conexion())->getConexion();

    $query = "UPDATE peliculas SET
        estreno = :estreno,
        duracion = :duracion,
        recaudacion = :recaudacion,
        personajes_principales = :personajes_principales,
        reparto = :reparto,
        director = :director,
        produccion = :produccion,
        guion = :guion,
        musica = :musica,
        fotografia = :fotografia,
        montaje = :montaje,
        vestuario = :vestuario,
        sinopsis = :sinopsis,
        curiosidades = :curiosidades,
        parrafo_uno = :parrafo_uno,
        parrafo_dos = :parrafo_dos,
        parrafo_tres = :parrafo_tres,
        parrafo_cuatro = :parrafo_cuatro,
        parrafo_cinco = :parrafo_cinco,
        titulo_id = :titulo_id
         WHERE id = :id ";



    $PDOStatement = $conexion->prepare($query);
    $PDOStatement->execute(
        [
        'id' => $id,    
        'estreno' => $estreno,
        'duracion' => $duracion,
        'recaudacion' => $recaudacion,
        'personajes_principales' => $personajes_principales,
        'reparto' => $reparto,
        'director' => $director,
        'produccion' => $produccion,
        'guion' => $guion,
        'musica' => $musica,
        'fotografia' => $fotografia,
        'montaje' => $montaje,
        'vestuario' => $vestuario,
        'sinopsis' => $sinopsis,
        'curiosidades' => $curiosidades,
        'parrafo_uno' => $parrafo_uno,
        'parrafo_dos' => $parrafo_dos,
        'parrafo_tres' => $parrafo_tres,
        'parrafo_cuatro' => $parrafo_cuatro,
        'parrafo_cinco' => $parrafo_cinco,
        'titulo_id' => $titulo_id,


        ]
        );

            

}


/* Remplazar Imagen */

public function reemplazar_imagen($imagen,$id){
    $conexion = (new Conexion())->getConexion();
    $query = "UPDATE peliculas SET imagen = :imagen WHERE id = :id";

    $PDOStatement = $conexion->prepare($query);
    $PDOStatement->execute(
        [
        'id' => $id,
        'imagen' => $imagen,
        
        
        ]
        );


   }

    /* Eliminar peliculas */

public function delete(){
    $conexion = (new Conexion())->getConexion();
    $query ="DELETE FROM peliculas WHERE id = ?";

    $PDOStatement = $conexion->prepare($query);
    $PDOStatement->execute([$this->id]);



}





      /* Devuelve es una instancia del objeto peliculas, con todas sus propiedades */
      public function createPeliculas($peliculasData) : Peliculas {

        $peliculas = new self();
  /* primero, por cada valor en nuestro array de valores, buscamos el valor correspondiente y se lo asignamos a la propiedad */

        foreach ($this->createValues as $value) {
            $peliculas->{$value} = $peliculasData[$value];
        }
      
     /* titulo */

     $peliculas->titulo = (new titulo())->get_x_id($peliculasData['titulo_id']);

     return $peliculas;


}
    //Metodo
    //Devuele catalogo Completo

    public function catalogo_completo() : array {
        $catalogo = [];

        //llamamos a la conexion
        $conexion = (new Conexion())->getConexion();

        $query = "SELECT * FROM peliculas";

        $PDOStatement = $conexion->prepare($query);

        $PDOStatement->setFetchMode(PDO::FETCH_ASSOC);

        $PDOStatement->execute();

        while($result = $PDOStatement->fetch()){
            $catalogo[] = $this->createPeliculas($result);
        }

        return $catalogo;
    }

        //Devuelve el catalogo de peliculas de un titulo en particular

        public function catalogo_x_titulo(int $titulo_id) : array {
            $catalogo = [];
    
            //llamamos a la conexion
            $conexion = (new Conexion())->getConexion();
    
            $query = "SELECT * FROM peliculas WHERE titulo_id= ?";
    
            $PDOStatement = $conexion->prepare($query);
    
            $PDOStatement->setFetchMode(PDO::FETCH_ASSOC);
    
            $PDOStatement->execute(
                [$titulo_id]
            );
    
            while($result = $PDOStatement->fetch()){
                $catalogo[] = $this->createPeliculas($result);
            }
    
    
            return $catalogo;
        



}

//Devuelve los datos de una pelicula en particular

public function peliculas_x_id(int $idPeliculas) : ?Peliculas {
    

    //llamamos a la conexion
    $conexion = (new Conexion())->getConexion();

    $query = "SELECT * FROM peliculas WHERE id = :idPeliculas";

    $PDOStatement = $conexion->prepare($query);

    $PDOStatement->setFetchMode(PDO::FETCH_ASSOC);

    $PDOStatement->execute(
        [
            'idPeliculas' => $idPeliculas
        ]
    );

    $result = $this->createPeliculas($PDOStatement->fetch());

    if (!$result) {
        return null;
    }

    return $result;


}



/* Traer los nombres de cada clase sin usar JOIN (con los metodos) */

    public function nombre_completo() {
        return $this->getTitulo()->getNombre();
    }

// Método buscar Peliculas 
public function buscarPeliculas($keywords) {  
    // Llamamos a la conexión  
    $conexion = (new Conexion())->getConexion();  
    
    // Creamos una variable con comodines para buscar coincidencias  
    $keywords = '%' . $keywords . '%';  

    // Llamamos a la query usando JOIN  
    $query = "  
    SELECT peliculas.*   
    FROM peliculas   
    JOIN titulo ON peliculas.id = titulo.id  
    WHERE titulo.nombre LIKE :keywords";  

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
     * Get the value of titulo
     */
    public function getTitulo() {
        return $this->titulo;
    }

    /**
     * Get the value of estreno
     */
    public function getEstreno() {
        return $this->estreno;
    }

    /**
     * Get the value of duracion
     */
    public function getDuracion() {
        return $this->duracion;
    }

    /**
     * Get the value of recaudacion
     */
    public function getRecaudacion() {
        return $this->recaudacion;
    }

    /**
     * Get the value of id
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Get the value of personajes_principales
     */
    public function getPersonajesPrincipales() {
        return $this->personajes_principales;
    }

    /**
     * Get the value of reparto
     */
    public function getReparto() {
        return $this->reparto;
    }

    /**
     * Get the value of director
     */
    public function getDirector() {
        return $this->director;
    }

    /**
     * Get the value of produccion
     */
    public function getProduccion() {
        return $this->produccion;
    }

    /**
     * Get the value of guion
     */
    public function getGuion() {
        return $this->guion;
    }

    /**
     * Get the value of musica
     */
    public function getMusica() {
        return $this->musica;
    }

    /**
     * Get the value of fotografia
     */
    public function getFotografia() {
        return $this->fotografia;
    }

    /**
     * Get the value of montaje
     */
    public function getMontaje() {
        return $this->montaje;
    }

    /**
     * Get the value of vestuario
     */
    public function getVestuario() {
        return $this->vestuario;
    }

    /**
     * Get the value of sinopsis
     */
    public function getSinopsis() {
        return $this->sinopsis;
    }

    /**
     * Set the value of sinopsis
     */
    public function setSinopsis($sinopsis): self {
        $this->sinopsis = $sinopsis;
        return $this;
    }

    /**
     * Get the value of curiosidades
     */
    public function getCuriosidades() {
        return $this->curiosidades;
    }

    /**
     * Set the value of curiosidades
     */
    public function setCuriosidades($curiosidades): self {
        $this->curiosidades = $curiosidades;
        return $this;
    }

    /**
     * Get the value of imagen
     */
    public function getImagen() {
        return $this->imagen;
    }

    /**
     * Get the value of parrafo_uno
     */
    public function getParrafoUno() {
        return $this->parrafo_uno;
    }

    /**
     * Set the value of parrafo_uno
     */
    public function setParrafoUno($parrafo_uno): self {
        $this->parrafo_uno = $parrafo_uno;
        return $this;
    }

    /**
     * Get the value of parrafo_dos
     */
    public function getParrafoDos() {
        return $this->parrafo_dos;
    }

    /**
     * Set the value of parrafo_dos
     */
    public function setParrafoDos($parrafo_dos): self {
        $this->parrafo_dos = $parrafo_dos;
        return $this;
    }

    /**
     * Get the value of parrafo_tres
     */
    public function getParrafoTres() {
        return $this->parrafo_tres;
    }

    /**
     * Set the value of parrafo_tres
     */
    public function setParrafoTres($parrafo_tres): self {
        $this->parrafo_tres = $parrafo_tres;
        return $this;
    }

    /**
     * Get the value of parrafo_cuatro
     */
    public function getParrafoCuatro() {
        return $this->parrafo_cuatro;
    }

    /**
     * Set the value of parrafo_cuatro
     */
    public function setParrafoCuatro($parrafo_cuatro): self {
        $this->parrafo_cuatro = $parrafo_cuatro;
        return $this;
    }

    /**
     * Get the value of parrafo_cinco
     */
    public function getParrafoCinco() {
        return $this->parrafo_cinco;
    }

    /**
     * Set the value of parrafo_cinco
     */
    public function setParrafoCinco($parrafo_cinco): self {
        $this->parrafo_cinco = $parrafo_cinco;
        return $this;
    }
}




?>