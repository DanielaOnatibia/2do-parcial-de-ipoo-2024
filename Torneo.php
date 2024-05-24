<?php
/*  Implementar la clase Torneo que contiene la colección de partidos y 
un importe que será parte del premio. Cuando un Torneo es creado la
 colección de partidos debe ser creada como una colección vacía. */

 class Torneo{
    private $colPartidos;
    private $importePremio;

    public function __construct($colPartidos,  $importePremio ){

        $this->colPartidos = [];
        $this->importePremio =  $importePremio ;
   
    }

    
    public function getColPatidos(){
        return  $this->colPartidos;
    }

    public function setColPatidos($newColPatidos){
        $this->colPartidos= $newColPatidos;
   }

    public function getImportePremio(){
        return $this->importePremio;
        }

    public function setImportePremio($newImportePremio){
        $this->importePremio= $newImportePremio;
    }

/* Implementar el método ingresarPartido($OBJEquipo1, $OBJEquipo2, $fecha, $tipoPartido)
 en la  clase Torneo el cual recibe por parámetro 2 equipos, la fecha en la que se realizará 
 el partido y si se trata de un partido de futbol o basquetbol . El método debe crear y 
 retornar la instancia de la clase Partido que corresponda y almacenarla en la colección
  de partidos del Torneo. Se debe chequear que los 2 equipos tengan la misma categoría e 
  igual cantidad de jugadores, caso contrario no podrá ser registrado ese partido en el torneo. */

public function ingresarPartido ($OBJEquipo1, $OBJEquipo2, $fecha, $tipoPartido){
    $colPartidos= $this->getColPatidos();
    $cantJugadores1= getCantJugadores() -> $objEquipo1;
    $cantJugadores2= getCantJugadores() -> $objEquipo2;
    
    if ( $cantJugadores1 ==  $cantJugadores2 ){

         if ($OBJEquipo1 instanceof Futbol  &&  $OBJEquipo2 instanceof Futbol ){
           $colPartidos[]= $OBJEquipo1." ". $OBJEquipo2." ".$fecha." ". $tipoPartido;
        } 
        elseif ($OBJEquipo1 instanceof Basket  &&  $OBJEquipo2 instanceof Basket )  {
            $colPartidos[]= $OBJEquipo1." ". $OBJEquipo2." ".$fecha." ". $tipoPartido;
        }
    } 
    return $colPartidos;     
} 
   
public function __toString(){
    //string $cadena
    $cadena = "COLECCION DE PARTIDOS: ".$this->getColPatidos()."\n";
    $cadena = $cadena. "IMPORTE DEL PREMIO: ".$this->getImportePremio()."\n";
 
    return $cadena;
}

    }
