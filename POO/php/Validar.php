<?php
include_once './Calculadora.php';
class Validar {
    // declarar atributos
    private $calculadora;
    // Inicializar atributos
    public function __construct() {
        // Relacion de composicion
        $this->calculadora = new Calculadora();
    }
    // Get
    public function darCalculadora() {
        return $this->calculadora;
    }
    public function recibirCalculadora($pCalculadora) {
        $this->calculadora = $pCalculadora;
    }
    public function validarDatos($pBase, $pPorcentaje, $pTotal, $pCantidad) {
        if ($pBase and $pPorcentaje and $pTotal) {
            return 'No es posible procesar todos los campos';
        } elseif ($pBase and $pPorcentaje) {
            $this->calculadora->recibirValorBase($pBase);
            $this->calculadora->recibirPorcentajeImpuesto($pPorcentaje);
            $this->calculadora->calcularValorTotal();
        } elseif ($pTotal and $pPorcentaje) {
            $this->calculadora->recibirValorTotal($pTotal);
            $this->calculadora->recibirPorcentajeImpuesto($pPorcentaje);
            $this->calculadora->calcularValorBase();
        } else {
            return 'Complete los campos';
        }
    }
}
/*
$validar = new Validar();
$validar->validarDatos(1000, 19, 0, 0);
var_dump($validar->darCalculadora());
echo $validar->darCalculadora()->darCantidadImpuesto();
echo '<br/>';

$calculadora = new Calculadora();
$calculadora->recibirValorBase(1000);
$calculadora->recibirPorcentajeImpuesto(39);
$calculadora->calcularValorTotal();
echo 'VALOR TOTAL: ' . $calculadora->darValorTotal();
echo '<br/>';
echo 'Porcentaje impuesto: ' . $calculadora->darPorcentajeImpuesto() . '%';
echo '<br/>';
echo 'Valor base: ' . $calculadora->darValorBase();
echo '<br/>';
// $calculadora->calculalarCantidadImpuesto();
echo 'Cantidad impuesto: ' . $calculadora->darCantidadImpuesto();
echo '<br/>';
echo '<br/>';
echo 'Segunda instancia';
echo '<br/>';
$calculadora2 = new Calculadora();
$calculadora2->recibirValorTotal(1190);
$calculadora2->recibirPorcentajeImpuesto(20);
$calculadora2->calcularValorBase();
echo 'VALOR BASE: ' . $calculadora2->darValorBase();
echo '<br/>';
echo 'Porcentaje impuesto: ' . $calculadora2->darPorcentajeImpuesto() . '%';
echo '<br/>';
echo 'Valor total: ' . $calculadora2->darValorTotal();
echo '<br/>';
#$calculadora2->calculalarCantidadImpuesto();
echo 'Cantidad impuesto: ' . $calculadora2->darCantidadImpuesto();
*/

?>