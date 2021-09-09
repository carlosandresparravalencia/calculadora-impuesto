from Calculadora import Calculadora


class Validar:
    # Inicializar atributos
    def __init__(self):
        self.__calculadora = Calculadora()
    # Get

    def darCalculadora(self):
        return self.__calculadora
    # Set

    def recibirCalculadora(self, pCalculadora):
        self.__calculadora = pCalculadora

    def validarDatos(self, pBase, pPorcentaje, pTotal, pCantidad):
        if pBase and pPorcentaje and pTotal:
            return 'No es posible procesar todos los campos'
        elif pBase and pPorcentaje:
            self.__calculadora.recibirValorBase(float(pBase))
            self.__calculadora.recibirPorcentajeImpuesto(float(pPorcentaje))
            self.__calculadora.calcularValorTotal()
        elif pTotal and pPorcentaje:
            self.__calculadora.recibirValorTotal(float(pTotal))
            self.__calculadora.recibirPorcentajeImpuesto(float(pPorcentaje))
            self.__calculadora.calcularValorBase()
        else:
            return 'Complete los campos'
