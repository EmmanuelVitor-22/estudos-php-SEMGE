<?php 

# https://pt.stackoverflow.com/questions/247723/diferen%C3%A7as-quanto-ao-uso-de-this-self-static-e-parent

#PARENT 
# Faz referência a classe pai que foi herdada pela classe atual. Basicamente foi criado para que você não precise, dentro da classe filha, ficar explicitando qual é a classe pai de onde será chamado o método, acessar o atributo, constante, etc.

class A {
    function example() {
        echo "I am A::example() and provide basic functionality.<br />\n";
    }
}

class B extends A {
    function example() {
        echo "I am B::example() and provide additional functionality.<br />\n";
        parent::example();
    }
}

$b = new B;

// This will call B::example(), which will in turn call A::example().
$b->example();



?>