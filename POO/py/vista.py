from tkinter import *
from Validar import Validar
validar = Validar()

ventana = Tk()
ventana.geometry("600x550")
ventana.title("Calculadora de impuesto")

valor_base = StringVar()
porcentaje_impuesto = StringVar()
valor_total = StringVar()
cantidad_impuesto = StringVar()
mensaje = StringVar()


def vista():
    base = valor_base.get()
    porcentaje = porcentaje_impuesto.get()
    total = valor_total.get()
    cantidad = cantidad_impuesto.get()

    mensaje.set(validar.validarDatos(base, porcentaje, total, cantidad))

    valor_base.set(float(validar.darCalculadora().darValorBase()))

    porcentaje_impuesto.set(
        float(validar.darCalculadora().darPorcentajeImpuesto()))

    valor_total.set(float(validar.darCalculadora().darValorTotal()))

    cantidad_impuesto.set(
        float(validar.darCalculadora().darCantidadImpuesto()))
        

imagen = PhotoImage(file="py/EncabezadoCal.PNG")
fondo = Label(ventana, image=imagen).place(x=0, y=0)

lbl_mensaje = Label(text="", textvariable=mensaje,
                    font=("Helvetica", 12)).place(x=10, y=150)

lbl_valor_base = Label(text="Valor base:", font=(
    "Helvetica", 16)).place(x=10, y=200)

txt_valor_base = Entry(ventana, font=('Helvetica', 16),
                       textvariable=valor_base).place(x=210, y=200)

lbl_porcentaje_impuesto = Label(
    text="Impuesto:", font=('Helvetica', 16)).place(x=10, y=260)

txt_porcentaje_impuesto = Entry(ventana, font=(
    'Helvetica', 16), textvariable=porcentaje_impuesto).place(x=210, y=260)

lbl_cantidad_impuesto = Label(
    text="Cantidad impuesto:", font=('Helvetica', 16)).place(x=10, y=320)

txt_cantidad_impuesto = Entry(ventana, font=(
    'Helvetica', 16), textvariable=cantidad_impuesto).place(x=210, y=320)

lbl_valor_total = Label(text="Valor con impuesto:",
                        font=('Helvetica', 16)).place(x=10, y=380)

txt_valor_total = Entry(ventana, font=('Helvetica', 16),
                        textvariable=valor_total).place(x=210, y=380)

btn_calcular = Button(ventana, text="Calcular", command=vista, font=(
    'Helvetica', 16), width=10).place(x=200, y=450)

ventana.mainloop()
