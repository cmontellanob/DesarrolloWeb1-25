<?php
class Clase {
    public $item;
    public $color;
    public $color_fondo;
    public $imagen;

    public function __construct($item, $color, $color_fondo, $imagen) {
        $this->item = $item;
        $this->color = $color;
        $this->color_fondo = $color_fondo;
        $this->imagen = $imagen;
    }

    public function cuadrado() {
        
        $html='<div id="cuadrado">
               <img src="images/'.$this->imagen.'"  width="200px">
              </div>
              <div id="leyenda">
              '.$this->item.'
              </div>';
        
        return $html;
    }

    public function diagonal() {
        $letras = str_split(strtoupper($this->item));
        $tabla = "<table style='margin:auto; border-collapse: collapse;'>";

        foreach ($letras as $letra) {
            $tabla .= "<tr><td style='padding:10px; color:$this->color; background:$this->color_fondo;'>$letra</td></tr>";
        }

        $tabla .= "</table>";
        return $tabla;
    }
}
?>
