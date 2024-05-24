<?php
 
 class Basket extends Partido{
  

    private $cantInfracciones;
    private $coefPenalizacion;

    public function __construct($idpartido, $fecha,$objEquipo1,$cantGolesE1, $objEquipo2,$cantGolesE2, $cantInfracciones, $coefPenalizacion){
    parent::__construct ($idpartido, $fecha,$objEquipo1,$cantGolesE1, $objEquipo2,$cantGolesE2);
    $this->cantInfracciones = $cantInfracciones;
    $this->coefPenalizacion =0.75;
    }


    public function setCantInfracciones($newCantInfracciones){
        $this->cantInfracciones= $newCantInfracciones;
   }

   public function getCantInfracciones(){
       return $this->cantInfracciones;
   }

    public function setCoefPenalizacion($newCoefPenalizacion){
        $this->coefPenalizacion= $newCoefPenalizacion;
    }

    public function getCoefPenalizacion(){
    return $this->coefPenalizacion;
    }


     /* Por otro lado, si se trata de un partido de basquetbol  se almacena la cantidad de
      infracciones de manera tal que al coeficiente base se debe restar un coeficiente de 
      penalización, cuyo valor por defecto es: 0.75, * (por) la cantidad de infracciones. Es decir:
        coef  = coeficiente_base_partido  - (coef_penalización*cant_infracciones);
        */

    public function cobraDeInfracciones(){
        $coefTotal=0;
        $coefBase=$this->getCoefBase();
        $coefPenalizacion=$this->getCoefPenalizacion();
        $cantInfracciones=$this->getCantInfracciones();

        $coefTotal = $coefBase - ($coefPenalizacion * $cantInfracciones);

        return $coefTotal;

    }


    public function __toString()
    {
        $cadena = parent::__toString();
        $cadena.= "CANTIDAD DE INFRACCIONES: " . $this->getCantInfracciones() . "\n";
        $cadena.= "COEFICIENTE DE PENALIZACIONES: " . $this->getCoefPenalizacion() . "\n";
        return $cadena;
    }
}

?>