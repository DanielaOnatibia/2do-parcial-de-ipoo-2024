<?php
class Futbool extends Partido{
  /* Si se trata de un partido de fútbol, se deben gestionar el valor de 3
   coeficientes que serán aplicados según la categoría del partido 
   (coef_Menores,  coef_juveniles,   coef_Mayores) .  
   A continuación se presenta una tabla en la que se detalla los valores por 
   defecto de cada  coeficiente aplicado a una categoría de un partido  fútbol: 

Categoría de los equipos
Coef_Menores
Coef_juveniles
Coef_Mayores
0,13
0,19
0,27

 */

    private $coefMenores;
    private $coefJuveniles;
    private $coefMayores;

    public function __construct($idpartido, $fecha,$objEquipo1,$cantGolesE1, $objEquipo2,$cantGolesE2, $coefMenores, $coefJuveniles, $coefMayores ){
    parent::__construct ($idpartido, $fecha,$objEquipo1,$cantGolesE1, $objEquipo2,$cantGolesE2);
    $this->coefMenores = 0.13 ; 
    $this->coefJuveniles = 0.19 ;
    $this->coefMayores = 0.27 ;
    }

    public function getCoefMenores(){
        return $this->coefMenores;
    }
    public function setCoefMenores($newCoefMenores){
            $this->coefMenores= $newCoefMenores;
    }

    public function getCoefJuveniles(){
        return $this->coefJuveniles;
    }
    public function setCoefJuveniles($newCoefJuveniles){
            $this->coefJuveniles= $newCoefJuveniles;
    }

    public function getCoefMayores(){
        return $this->coefMayores;
    }
    public function setCoefMayores($newCoefMayores){
            $this->coefMayores= $newCoefMayores;
    }


    public function __toString()
    {
        $cadena = parent::__toString();
        $cadena.= "COEFICIENTE MENORES: " . $this->getCoefMenores(). "\n";
        $cadena.= "COEFICIENTE JUVENILES: " . $this->getCoefJuveniles() . "\n";
        $cadena.= "COEFICIENTE MAYORES: " . $this->getCoefMayores() . "\n";
        return $cadena;
    }

}

?>