<?php
class Calculadora {
    // declarar atributos
    private $valorBase;
    private $porcentajeImpuesto;
    private $valorTotal;
    private $cantidadImpuesto;
    // Inicializar atributos
    public function __construct() {
        $this->valorBase = null;
        $this->porcentajeImpuesto = null;
        $this->valorTotal = null;
        $this->cantidadImpuesto = null;
    }
    // Get
    public function darValorBase() {
        return $this->valorBase;
    }
    // Set
    public function recibirValorBase($pValorBase) {
        $this->valorBase = $pValorBase;
    }
    // Get
    public function darPorcentajeImpuesto() {
        return $this->porcentajeImpuesto;
    }
    // Set
    public function recibirPorcentajeImpuesto($pPorcentajeImpuesto) {
        $this->porcentajeImpuesto = $pPorcentajeImpuesto;
    }
    // Get
    public function darValorTotal() {
        return $this->valorTotal;
    }
    // Set
    public function recibirValorTotal($pValorTotal) {
        $this->valorTotal = $pValorTotal;
    }
    // Get
    public function darCantidadImpuesto() {
        return $this->cantidadImpuesto;
    }
    // Set
    public function recibirCantidadImpuesto($pCantidadImpuesto) {
        $this->cantidadImpuesto = $pCantidadImpuesto;
    }
    // Mundo del problema
    public function calcularValorBase() {
        $this->valorBase = $this->valorTotal / (1 + $this->porcentajeImpuesto / 100);
        $this->calculalarCantidadImpuesto();
    }
    public function calcularValorTotal() {
        $this->valorTotal = $this->valorBase * (1 + $this->porcentajeImpuesto / 100);
        $this->calculalarCantidadImpuesto();
    }
    public function calculalarCantidadImpuesto() {
        $this->cantidadImpuesto = $this->valorTotal - $this->valorBase;
    }
}
?>