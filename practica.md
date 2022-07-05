// example GUIA

//tipos de datos en swift
  //Bool - float - double - int - String 

//Estructuras de control 
  //

print("Selecciona una opción")
print("1.- Arreglos")
print("2.- Dicccionarios")
print("3.- Condicionales")
print("4.- Switch")
print("5.- For")
print("6.- Funciones")
print("7.- While")
var opt = Int(readLine()!)

//opciones
switch opt {
  
  //Arreglos 
  case 1:
  print("Arreglos")
  print("Ejemplo --> let users = ['angel0', 'Jason']")
  let users = ["angel0", "Jason"]
  print("El usuario 1 es ", users[0])
  print("El usuario 2 es ", users[1])
  break
  
  //Diccionarios
  case 2:
  print("Diccionarios")
  print("Ejemplo -> var diccionarios = ['ap': 'Arduino', 'al':   Arduino]")
  var diccionario: Dictionary <String, String> = ["al": "32u4", "au": "328P"]
  break

  // Condicionales
  case 3:
  print("Condicionales")
  print("var num = 1")
  print("Ejemplo -> if(num > 1){ print('el numero es mayor a 1') }")
  break
  case 4:
  print("Switch") 
  print("Ejemplo -> switch opt { case 1: print('hello world') break}")
  break
  
  //Bucle
  case 5:
  print("For")
  print("Ejemplo -> for (int i = 0; i <= 10; i++){ 1*1 = 1...etc }")
  break

  //funciones
  case 6:
  print("Funciones")
  print("Ejemplo -> func suma(n1, n2){ return n1 + n2 } suma(2,2)")
  break

  //While
  case 7:
  print("While")
  print("Bucle While")
  print("Ejemplo -> while(1>2){ print('1 ahora es mayor a 2') }")
  break
  
  default:
  print("Error en dato, ingresar otro")
}