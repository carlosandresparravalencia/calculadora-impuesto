package calculadora;

public class Calculadora {

    private double valorBase;
    private double porcentajeImpuesto;
    private double valorTotal;
    private double cantidadImpuesto;

    public Calculadora() {
        this.valorBase = 0;
        this.porcentajeImpuesto = 0;
        this.valorTotal = 0;
        this.cantidadImpuesto = 0;
    }

    public double getValorBase() {
        return valorBase;
    }

    public void setValorBase(double pValorBase) {
        this.valorBase = pValorBase;
    }

    public double getPorcentajeImpuesto() {
        return porcentajeImpuesto;
    }

    public void setPorcentajeImpuesto(double pPorcentajeImpuesto) {
        this.porcentajeImpuesto = pPorcentajeImpuesto;
    }

    public double getValorTotal() {
        return valorTotal;
    }

    public void setValorTotal(double pValorTotal) {
        this.valorTotal = pValorTotal;
    }

    public double getCantidadImpuesto() {
        return cantidadImpuesto;
    }

    public void setCantidadImpuesto(double pCantidadImpusto) {
        this.cantidadImpuesto = pCantidadImpusto;
    }

    // Mundo del Problema
    public void calcularValorBase() {
        this.valorBase = this.valorTotal / (1 + this.porcentajeImpuesto / 100);
        // llamado a la función
        this.calcularCantidadImpuesto();
    }

    public void calcularValorTotal() {
        this.valorTotal = this.valorBase * (1 + this.porcentajeImpuesto / 100);
        // llamado a la función
        this.calcularCantidadImpuesto();
    }

    public void calcularCantidadImpuesto() {
        this.cantidadImpuesto = this.valorTotal - this.valorBase;
    }
}
