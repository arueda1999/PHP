# Dados los catetos calcular la hipotenusa

catetoOpuesto = float(input("Digite el cateto opuesto: "))
catetoAdyacente = float(input("Digite el cateto adyacente: "))
hipotenusa = float((catetoOpuesto**2 + catetoAdyacente**2)**0.5)
print("La hipotenusa es ", hipotenusa)