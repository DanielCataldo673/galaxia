<?php

class Personajes
{
    protected $id;
    protected $nombre;
    protected $descripcion;
    protected $afiliacion;
    protected $planeta_natal;
    protected $habilidades;
    protected $arma;
    protected $actor;
    protected $imagen_uno;
    protected $imagen_dos;
    protected $especie;

    protected $createValues = [
        'id',
        'nombre',
        'descripcion',
        'afiliacion',
        'planeta_natal',
        'habilidades',
        'arma',
        'actor',
        'imagen_uno',
        'imagen_dos'
    ];

    /* Metodo Para Insertar un nuevo personajes a la BD */

    public function insert($nombre, $descripcion, $afiliacion, $planeta_natal, $habilidades, $arma, $actor, $imagen_uno, $imagen_dos, $especie_id)
    {
        $conexion = (new Conexion())->getConexion();

        $query = "INSERT INTO personajes VALUES (NULL,:nombre,:descripcion,:afiliacion,:planeta_natal,:habilidades,:arma,:actor,:imagen_uno,:imagen_dos,:especie_id )";

        $PDOStatement = $conexion->prepare($query);
        $PDOStatement->execute(
            [
                'nombre' => $nombre,
                'descripcion' => $descripcion,
                'afiliacion' => $afiliacion,
                'planeta_natal' => $planeta_natal,
                'habilidades' => $habilidades,
                'arma' => $arma,
                'actor' => $actor,
                'imagen_uno' => $imagen_uno,
                'imagen_dos' => $imagen_dos,
                'especie_id' => $especie_id,

            ]
        );
    }

    /* editar personajes */

    public function edit($nombre, $descripcion, $afiliacion, $planeta_natal, $habilidades, $arma, $actor, $especie_id, $id)
    {


        $conexion = (new Conexion())->getConexion();

        $query = "UPDATE personajes SET
        nombre = :nombre,
        descripcion = :descripcion,
        afiliacion = :afiliacion,
        planeta_natal = :planeta_natal,
        habilidades = :habilidades,
        arma = :arma,
        actor = :actor,
        especie_id = :especie_id
         WHERE id = :id ";



        $PDOStatement = $conexion->prepare($query);
        $PDOStatement->execute(
            [
                'id' => $id,
                'nombre' => $nombre,
                'descripcion' => $descripcion,
                'afiliacion' => $afiliacion,
                'planeta_natal' => $planeta_natal,
                'habilidades' => $habilidades,
                'arma' => $arma,
                'actor' => $actor,
                'especie_id' => $especie_id,


            ]
        );
    }


    /* Remplazar Imagen */

    public function reemplazar_imagen($imagen_uno, $imagen_dos, $id)
    {
        $conexion = (new Conexion())->getConexion();
        $query = "UPDATE personajes SET imagen_uno,imagen_dos = :imagen_uno,:imagen_dos WHERE id = :id";

        $PDOStatement = $conexion->prepare($query);
        $PDOStatement->execute(
            [
                'id' => $id,
                'imagen_uno' => $imagen_uno,
                'imagen_dos' => $imagen_dos,


            ]
        );
    }

    /* Eliminar personajes */

    public function delete()
    {
        $conexion = (new Conexion())->getConexion();
        $query = "DELETE FROM personajes WHERE id = ?";

        $PDOStatement = $conexion->prepare($query);
        $PDOStatement->execute([$this->id]);
    }





    /* Devuelve es una instancia del objeto personajes, con todas sus propiedades */
    public function createPersonajes($personajesData): Personajes
    {

        $personajes = new self();
        /* primero, por cada valor en nuestro array de valores, buscamos el valor correspondiente y se lo asignamos a la propiedad */

        foreach ($this->createValues as $value) {
            $personajes->{$value} = $personajesData[$value];
        }

        /* Especie */

        $personajes->especie = (new Especie())->get_x_id($personajesData['especie_id']);

        return $personajes;
    }
    //Metodo
    //Devuele catalogo Completo

    public function catalogo_completo(): array
    {
        $catalogo = [];

        //llamamos a la conexion
        $conexion = (new Conexion())->getConexion();

        $query = "SELECT * FROM personajes";

        $PDOStatement = $conexion->prepare($query);

        $PDOStatement->setFetchMode(PDO::FETCH_ASSOC);

        $PDOStatement->execute();

        while ($result = $PDOStatement->fetch()) {
            $catalogo[] = $this->createPersonajes($result);
        }

        return $catalogo;
    }

    //Devuelve el catalogo de personajes de una especie en particular

    public function catalogo_x_especie(int $especie_id): array
    {
        $catalogo = [];

        //llamamos a la conexion
        $conexion = (new Conexion())->getConexion();

        $query = "SELECT * FROM personajes WHERE especie_id= ?";

        $PDOStatement = $conexion->prepare($query);

        $PDOStatement->setFetchMode(PDO::FETCH_ASSOC);

        $PDOStatement->execute(
            [$especie_id]
        );

        while ($result = $PDOStatement->fetch()) {
            $catalogo[] = $this->createPersonajes($result);
        }


        return $catalogo;
    }

    //Devuelve los datos de un personaje en particular

    public function personajes_x_id(int $idPersonajes): ?Personajes
    {


        //llamamos a la conexion
        $conexion = (new Conexion())->getConexion();

        $query = "SELECT * FROM personajes WHERE id = :idPersonajes";

        $PDOStatement = $conexion->prepare($query);

        $PDOStatement->setFetchMode(PDO::FETCH_ASSOC);

        $PDOStatement->execute(
            [
                'idPersonaje' => $idPersonajes
            ]
        );

        $result = $this->createPersonajes($PDOStatement->fetch());

        if (!$result) {
            return null;
        }

        return $result;
    }



    /* Traer los nombres de cada clase sin usar JOIN (con los metodos) */

    public function nombre_completo()
    {
        return $this->getEspecie()->getNombre();
    }

    //Metodo buscar Personajes

    public function buscarPersonajes($keywords)
    {
        //llamamos a la conexion
        $conexion = (new Conexion())->getConexion();
        //Creamos una variable con comodines para buscar coincidencias
        $keywords = '%' . $keywords . '%';

        //llamamos a las query
        $query = "SELECT * FROM personajes where nombre LIKE :keywords ";

        //preparamos la consulta
        $PDOStatement = $conexion->prepare($query);

        //preparamos la busqueda con BINDPARAM
        $PDOStatement->bindParam(':keywords', $keywords, PDO::PARAM_STR);

        //executamos
        $PDOStatement->execute();


        $resultados = $PDOStatement->fetchAll(PDO::FETCH_CLASS, self::class);

        return $resultados;
    }



    // Método buscar Todo 
    public function buscarTodo($keywords)
    {
        // Llamamos a la conexión  
        $conexion = (new Conexion())->getConexion();

        // Creamos una variable con comodines para buscar coincidencias  
        $keywords = '%' . $keywords . '%';

        // Llamamos a la query usando JOIN  
        $query = "  
    SELECT 'nave' AS tipo, naves.*, nombre_naves.nombre AS nombre_tipo FROM naves JOIN nombre_naves ON naves.id = nombre_naves.id WHERE nombre_naves.nombre LIKE :keywords UNION ALL SELECT 'pelicula' AS tipo, peliculas.*, titulo.nombre AS nombre_tipo FROM peliculas JOIN titulo ON peliculas.id = titulo.id WHERE titulo.nombre LIKE :keywords UNION ALL SELECT 'personaje' AS tipo, personajes.*, personajes.nombre AS nombre_tipo FROM personajes WHERE personajes.nombre LIKE :keywords UNION ALL SELECT 'sable' AS tipo, sables.*, nombre_sables.nombre AS nombre_tipo FROM sables JOIN nombre_sables ON sables._id = nombre_sables.id WHERE nombre_sables.nombre LIKE :keywords  ";

        // Preparamos la consulta  
        $PDOStatement = $conexion->prepare($query);

        // Preparamos la búsqueda con BINDPARAM  
        $PDOStatement->bindParam(':keywords', $keywords, PDO::PARAM_STR);

        try {
            $PDOStatement->execute();
        } catch (PDOException $e) {  // Manejo de excepciones 
            return [];  // O gestionar otro tipo de error
        }

        // Ejecutamos  
        $PDOStatement->execute();

        // Obtenemos los resultados  
        $resultados = $PDOStatement->fetchAll(PDO::FETCH_CLASS, self::class);

        return $resultados;
    }



    /* GETTER */

    public function getEspecie(): Especie
    {
        return $this->especie;
    }


    /**
     * Get the value of id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Get the value of nombre
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Get the value of descripcion
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Get the value of afiliacion
     */
    public function getAfiliacion()
    {
        return $this->afiliacion;
    }

    /**
     * Get the value of planeta_natal
     */
    public function getPlanetaNatal()
    {
        return $this->planeta_natal;
    }

    /**
     * Get the value of habilidades
     */
    public function getHabilidades()
    {
        return $this->habilidades;
    }

    /**
     * Get the value of arma
     */
    public function getArma()
    {
        return $this->arma;
    }

    /**
     * Get the value of actor
     */
    public function getActor()
    {
        return $this->actor;
    }

    /**
     * Get the value of imagen_uno
     */
    public function getImagenUno()
    {
        return $this->imagen_uno;
    }

    /**
     * Get the value of imagen_dos
     */
    public function getImagenDos()
    {
        return $this->imagen_dos;
    }

    /**
     * Set the value of descripcion
     */
    public function setDescripcion($descripcion): self
    {
        $this->descripcion = $descripcion;
        return $this;
    }
}