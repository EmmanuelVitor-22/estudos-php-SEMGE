
<?php 

echo "TRABALHANDO COM FUNÇÕES ANONIMAS";
// Funções anônimas, também conhecidas como closures, permitem a criação de funções que não tem o nome especificado. Elas são mais úteis como o valor de parâmetros callable, mas podem ter vários outros usos.

$numeros = [12,10, 15, 20, 22, 56,70,91,95, 100];
 print_r($numeros);
 echo PHP_EOL;
 echo "Usando uma função anonima atribuindo-a para umna variavel multiplo = 3;
 \n\n";
 
 // Funções anônimas possui escopo local, ou seja, não altera o valor de variáveis que
 // são declaradas fora da função

 $fitrarNumeros = function($item){
    $multiplo = 3;
    return ($item % $multiplo) ==0;
 };
$result = array_filter($numeros, $fitrarNumeros);
print_r($result);

//Closures também podem herdar variáveis do escopo pai. Essas variáveis precisam ser referenciadas utilizando a instrução "use".
echo PHP_EOL;
echo "Usando variavel global em uma função anonima \nAtravés do metodo \"use\"\n e 
atribuindo a uma variavel mult = 5; \n\n";
$mult = 5;
$fitrarNumeros2 = function($item) use($mult){

    return ($item % $mult) ==0;
 };
$result2 = array_filter($numeros, $fitrarNumeros2);
print_r($result2);

echo PHP_EOL;
echo "Usando variavel global em uma função anonima \nAtravés do metodo \"use\" e usando diretamente como callback multi = 10; \n\n";

$multi = 10;

$result10 = array_filter($numeros, function($item) use($multi){
    return ($item % $multi) ==0;
 });
print_r($result10);

echo PHP_EOL;
echo "Usando variavel global em uma função anonima \nAtravés do metodo \"use\" e usando diretamente como callback m = 20; \n\n";

$result10 = array_filter($numeros, function($item){
    $m = 20;
    return ($item % $m) ==0;
 });
print_r($result10);
?>
