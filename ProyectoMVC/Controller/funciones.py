# matrices en python




matriz = [[3, 5, 8, 9, 10], [12, 20,25,30,15], [1, 7, 18, 17, 19], [31, 35, 40, 48, 60],[62, 69, 70, 22, 30] ]

# sumar la diagonal principal
suma = 0
j=0
for i in range(5):
   
    if i == j :
        suma = suma + matriz[i][j]
    j+=1

print("La suma de la diagonal es: ", suma)

# suma de las filas y suma de las columnas

sumaFilas = [0, 0, 0, 0, 0]
sumaColumnas = [0, 0, 0, 0, 0]

for i in range(5):
    for j in range(5):
        sumaFilas[i]= sumaFilas[i]+ matriz[i][j]
        #print(f"La suma de las columnas es {sumaColumnas}")
        sumaColumnas[j]= sumaColumnas[j]+ matriz[i][j]
        #print(f"La suma de las filas es {sumaFilas}")
        

print(f"La suma de las filas es {sumaFilas}")


print(f"La suma de las columnas es {sumaColumnas}")




