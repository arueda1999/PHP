# Crear un programa que defina si una oración o palabra es palindromo

frase = input("Digite una frase " )
print(frase)

frase1 = frase.replace(" ", "")
print(frase1)
frase2 = frase1.lower()
print(frase2)
frase3 = frase2[::-1]
print(frase3)

if frase2 == frase3:
    print("Es una palindromo")
else:  
    print("No es una palindromo")   


