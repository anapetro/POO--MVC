<?php
#ClASE:
#Una clase es un modelo que se utiliza pra crear objetos que comparten un mismo comportamient, estado e identidad

class Automovil{
    #propiedades:    
    #son las caractyeristicas que puede tener un objeto.

    public $marca;
    public $modelo;

    #METODO:  
    # es el algoritmo asociado a un objeto que indica la capaciada de lo que este pude hacer. 
    #la unica diferencia entre metodo y funcion es que llamamos metodo a las funciones de una clase
    #mientras que llamamos funciones a los algoritmos de la programacion estructurada 
    
    public function mostrar(){
        echo "<p>hola! soy un $this->marca,model $this->modelo</p>";
    }
}

#OBJETO: 
#una entidad provista de metodos o mensajes a los cuales responde propiedades con valeres concretos 

$a =new Automovil();
$a-> marca ="toyota";
$a-> modelo ="4Runner";
$a-> mostrar();


$b =new Automovil();
$b-> marca ="Jeep";
$b-> modelo ="Renegade";
$b-> mostrar();

$b =new Automovil();
$b-> marca ="Ford";
$b-> modelo ="Fiesta";
$b-> mostrar();


#principios de la poo que se cumplen este ejemplo 
#Abstracciohn: nuevos tipos de datos 
#Encapsulacion: organiza el codigo en grupos logicos 
#Ocultamiento: oculta detalles de implementacion y exponer solon los detalles necesarios 

?>