<?php
class Partido{
    private $idpartido;
    private $fecha;
    private $objEquipo1;
    private $cantGolesE1;
    private $objEquipo2;
    private $cantGolesE2;
    private $coefBase;

    //CONSTRUCTOR
    public function __construct($idpartido, $fecha,$objEquipo1,$cantGolesE1,$objEquipo2,$cantGolesE2){
            $this->idpartido = $idpartido;
            $this->fecha = $fecha;
            $this->objEquipo1 =$objEquipo1;
            $this->cantGolesE1 = $cantGolesE1;
            $this->objEquipo2 = $objEquipo2;
            $this->cantGolesE2 = $cantGolesE2;
            $this->coefBase = 0.5;


    }

    //OBSERVADORES
    public function setidpartido($idpartido){
         $this->idpartido= $idpartido;
    }

    public function getIdpartido(){
        return $this->idpartido;
    }

    public function setFecha($fecha){
        $this->fecha= $fecha;
    }

    public function getFecha(){
        return $this->fecha;
    }


 public function setCantGolesE1($cantGolesE1){
        $this->cantGolesE1= $cantGolesE1;
    }

    public function getCantGolesE1(){
        return $this->cantGolesE1;
    }
 public function setCantGolesE2($cantGolesE2){
        $this->cantGolesE2= $cantGolesE2;
    }

    public function getCantGolesE2(){
        return $this->cantGolesE2;
    }



 public function setObjEquipo1($objEquipo1){
        $this->objEquipo1= $objEquipo1;
    }
    public function getObjEquipo1(){
        return $this->objEquipo1;
    }


 public function setObjEquipo2($objEquipo2){
        $this->objEquipo2= $objEquipo2;
    }
    public function getObjEquipo2(){
        return $this->objEquipo2;
    }




     public function setCoefBase($coefBase){
         $this->coefBase = $coefBase;
    }
      public function getCoefBase(){
        return $this->coefBase;
    }

    /* Implementar en la clase Partido el método darEquipoGanador() que 
    retorna el equipo ganador de un partido (equipo con mayor cantidad de goles del partido),
    en caso de empate debe retornar a los dos equipos. */

    public function darEquipoGanador(){
        $ganador= " ";
        $cantGolesE1=getCantGolesE1();
        $cantGolesE2=getCantGolesE2();

        if ( $cantGolesE1 > $cantGolesE2){
            $ganador=getObjEquipo1();
        } 
        elseif ( $cantGolesE2 > $cantGolesE1){
            $ganador=getObjEquipo2();
        } 
        elseif ($cantGolesE1 ==  $cantGolesE2){
            $ganador=getObjEquipo1()." ".getObjEquipo2();
        }

        return $ganador;

    }

    /*Implementar el método coeficientePartido() en la clase Partido el cual 
      partido
    private $idpartido;
    private $fecha;
    private $objEquipo1;
    private $cantGolesE1;
    private $objEquipo2;
    private $cantGolesE2;
    private $coefBase;

    basket public function cobraDeInfracciones()
retorna el valor

     obtenido por el coeficiente base, multiplicado por la cantidad de goles y la cantidad 
     de jugadores. Redefinir dicho método según corresponda.
      coef =  0,5 * cantGoles * cantJugadores  donde cantGoles : 
      es la cantidad de goles;   cantJugadores : es la cantidad de jugadores.
   
      
   
 public function coeficientePartido(){
    $coeficiente=0;
     $coefBase=$this->getCoefBase();

     $cantidadGoles1= $this->getCantGolesE1();
     $cantidadGoles2= $this->getCantGolesE2(); 

     $canJugadores1= getCantJugadores() -> getObjEquipo1();
     $canJugadores2= getCantJugadores() -> getObjEquipo2();

     $objEquipo1=$this->getObjEquipo1();
     $objEquipo2=$this->getObjEquipo2();

    $coefMenores=$this->getCoefMenores();
    $coefJuveniles=$this->getCoefJuveniles();
    $coefMayores=$this->getCoefMayores();
    
     if ($objEquipo1 instanceof Futbol  &&  $objEquipo2 instanceof Futbol ){
         if (getObjCategoria()-> $objEquipo1== getCategoriaMenores){
            $coeficiente= 


         }
     }
}

NO LO PUDE TERMINAL 

*/

     public function __toString(){
        //string $cadena
        $cadena = "idpartido: ".$this->getIdpartido()."\n";
        $cadena = $cadena. "Fecha: ".$this->getFecha()."\n";
        $cadena = $cadena."\n"."--------------------------------------------------------"."\n";
        $cadena = $cadena. "<Equipo 1> "."\n".$this->getObjEquipo1()."\n";
        $cadena = $cadena. "Cantidad Goles E1: ".$this->getCantGolesE1()."\n";
          $cadena = $cadena. "\n"."--------------------------------------------------------"."\n";
         $cadena = $cadena. "\n"."--------------------------------------------------------"."\n";
        $cadena = $cadena. "<Equipo 2> "."\n".$this->getObjEquipo2()."\n";
        $cadena = $cadena. "Cantidad Goles E2: ".$this->getCantGolesE2()."\n";
         $cadena = $cadena. "\n"."--------------------------------------------------------"."\n";
         
         $cadena = $cadena. "Ganador: ". $ganador=darEquipoGanador() ."\n";
        
         return $cadena;
    }
}


?>