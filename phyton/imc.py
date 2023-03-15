# Calcular el indice de masa corporal de una persona

peso = int(input("Digite su peso en kilogramos: "))
estatura = float(input("Digite su estatura en metros: "))

imc = peso/estatura**2

if imc <= 18.5:
    input("Bajo peso")
elif imc > 18.5 and imc <= 24.9:
    input("Peso normal")
elif imc >= 25 and imc < 30:
    input("Sobre peso ")
elif imc >= 30 and imc < 35:
    input("Obesidad I")
elif imc >= 35 and imc < 39.5:
    input("Obesidad II")
else:
    input("Obesidad III o mórbida")
