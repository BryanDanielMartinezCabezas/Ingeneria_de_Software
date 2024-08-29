<?php
class OperacionesCadena {
    public $cadena;

    public function __construct($cadena) {
        $this->cadena = $cadena;
    }

    public function invertir() {
        return strrev($this->cadena);
    }

    public function mayuscula() {
        return strtoupper($this->cadena);
    }

    public function minuscula() {
        return strtolower($this->cadena);
    }
}
?>

