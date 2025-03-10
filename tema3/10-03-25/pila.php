<?php 
class Pila {
   private $elementos=array();
   private $tope=0;
   public function insertar($elemento){
      $this->elementos[$this->tope]=$elemento;
      $this->tope++;
   }
   public function eliminar(){
    $elemento=$this->elementos[$this->tope-1];
        $this->tope--;
        return $elemento;
   }
   public function mostrar(){
    for ($i=0;$i<$this->tope;$i++){
        echo $this->elementos[$i]."<br>";
    }
   }

    
}