<?php class Operaciones {
    private $a;
    private $b;
    private $c;
    public function __construct($a, $b, $c)
    {
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
    }
    public function Sumar()
    {
        return $this->a + $this->b + $this->c;
    }
    public function Restar()
    {
        return $this->a - $this->b - $this->c;
    }
    public function Multiplicar(){
        
        return $this->a*$this->b*$this->c;
    }
    public function Dividir(){
        return $this->a/$this->b/$this->c;
    }
}