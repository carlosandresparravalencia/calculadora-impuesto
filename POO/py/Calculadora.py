class Calculadora:
    def __init__(self):
        self.__valorBase = 0
        self.__porcentajeImpuesto = 0
        self.__valorTotal = 0
        self.__cantidadImpuesto = 0

    def darValorBase(self):
        return self.__valorBase

    def recibirValorBase(self, pValorBase):
        self.__valorBase = pValorBase

    def darPorcentajeImpuesto(self):
        return self.__porcentajeImpuesto

    def recibirPorcentajeImpuesto(self, pPorcentajeImpuesto):
        self.__porcentajeImpuesto = pPorcentajeImpuesto

    def darValorTotal(self):
        return self.__valorTotal

    def recibirValorTotal(self, pValorTotal):
        self.__valorTotal = pValorTotal

    def darCantidadImpuesto(self):
        return self.__cantidadImpuesto

    def recibirCantidadImpuesto(self, pCantidadImpuesto):
        self.__cantidadImpuesto = pCantidadImpuesto

    # Mundo del problema

    def calcularValorBase(self):
        self.__valorBase = self.__valorBase = self.__valorTotal / \
            (1 + self.__porcentajeImpuesto / 100)
        self.calcularCantidadImpuesto()

    def calcularValorTotal(self):
        self.__valorTotal = self.__valorTotal = self.__valorBase * \
            (1 + self.__porcentajeImpuesto / 100)
        self.calcularCantidadImpuesto()

    def calcularCantidadImpuesto(self):
        self.__cantidadImpuesto = self.__valorTotal - self.__valorBase
