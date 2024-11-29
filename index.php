<?php
trait Calculator{

    public function sum($a, $b) {
        return $a + $b;
      }
      
      public function sub($a, $b) {
        return $a - $b;
      }
      
      public function mul($a, $b) {
        return $a * $b;
      }
      
      public function div($a, $b) {
        return $a / $b;
      }
      
      public function sqr($a){
        return sqrt($numero);
      }

}

class Rettangolo{

    use Calculator;

    public $base;
    public $altezza;

    public function __construct($b, $h){
        $this->base = $b;
        $this->altezza = $h;
    }

    public function area(){
        echo $this->mul($this->base, $this->altezza) . "\n";
    }

    public function perimetro(){

        echo $this->mul(($this->base), 2) + $this->mul(($this->altezza), 2) . "\n";
    }

    public function diagonale(){
        echo sqrt(pow($this->base, 2) + pow($this->altezza, 2));
    }



}

// Il tuo compito sara' quello di creare 3 metodi che andranno a calcolare:
// Area → b * h
// Perimetro → 2 * b + 2 * h
// Diagonale → √ hˆ2 + bˆ2 (Tutto sotto radice)

$rettangolo1 = new Rettangolo(8, 9);

$rettangolo1->area();
$rettangolo1->perimetro();
$rettangolo1->diagonale();





?>