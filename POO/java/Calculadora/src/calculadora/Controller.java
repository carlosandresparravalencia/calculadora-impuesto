package calculadora;

import javafx.event.ActionEvent;
import javafx.scene.control.Button;
import javafx.scene.control.TextField;

public class Controller {

    private Calculadora calculadora;

    public TextField valor_base;
    public TextField porcentaje_impuesto;
    public TextField cantidad_impuesto;
    public TextField valor_total;
    public Button calcular;

    public Controller() {
        this.calculadora = new Calculadora();
    }

    public void initAttributtes() {
        valor_base.setText(String.valueOf(this.calculadora.getValorBase()));
        porcentaje_impuesto.setText(String.valueOf(this.calculadora.getPorcentajeImpuesto()));
        valor_total.setText(String.valueOf(this.calculadora.getValorTotal()));
        cantidad_impuesto.setText(String.valueOf(this.calculadora.getCantidadImpuesto()));

    }

    public Calculadora getCalculadora() {
        return calculadora;
    }

    public void setCalculadora(Calculadora calculadora) {
        this.calculadora = calculadora;
    }

    public String validarDatos(String pValorBase, String pPorcentajeImpuesto, String pValorTotal, String pCantidadImpuesto) {
        if (pValorBase == "" && pPorcentajeImpuesto == "" && pValorTotal == "" && pCantidadImpuesto == "") {
            System.out.println("No es posible procesar todos los campos");
            return "No es posible procesar todos los campos";
        } else if (pValorBase != "" && pPorcentajeImpuesto != "") {
            this.calculadora.setValorBase(Double.parseDouble(pValorBase));
            this.calculadora.setPorcentajeImpuesto(Double.parseDouble(pPorcentajeImpuesto));
            this.calculadora.calcularValorTotal();
        } else if (pValorTotal != "" && pPorcentajeImpuesto != "") {
            this.calculadora.setValorTotal(Double.parseDouble(pValorTotal));
            this.calculadora.setPorcentajeImpuesto(Double.parseDouble(pPorcentajeImpuesto));
            this.calculadora.calcularValorBase();
        } else {
            System.out.println("Complete los campos");
            return "Complete los campos";
        }
        return null;
    }

    public void btn_calcular(ActionEvent actionEvent) {
        String base         = valor_base.getText();String porcentaje   = porcentaje_impuesto.getText();
        String cantidad     = cantidad_impuesto.getText();
        String total        = valor_total.getText();
        this.validarDatos(base, porcentaje, total, cantidad);
        this.initAttributtes();
    }

}
