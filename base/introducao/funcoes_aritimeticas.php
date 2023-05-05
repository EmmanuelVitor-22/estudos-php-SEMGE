<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php 
    echo "<h2> Estudo sobre valor absoluto </h2>";
    echo "<br>";
    echo "<p><strong>Valor absoluto:</strong> </p>";
    #Valor absoluto ou modulo de um valor (valor sem o sinal de negativo)
    $numero = abs(-2);
    $numero2 = abs(2);
    echo "<p> O valor absoluto de -2 é: $numero </p>";
    echo "<p> O valor absoluto de 2 é: $numero2 </p>";

    echo "<br>";
    echo "<p>
            <strong>
            Converter bases numé ricas:
            </strong>
        </p>";
    #Converter algum numero em qualquer base para outra, possui 3 parametros de entrada:
    # numero, a base numerica desse numero, a base que você quer transformar ($num,  $from_base,  $to_base))
    $decimalToBinario=base_convert(12, 10, 2);
    $binarioToDecimal = base_convert(11001111111000, 2, 10);
    $decimalToOctal = base_convert(2345, 10, 8);

    echo "<p> o numero  12 em decimal para binario é: $decimalToBinario </p>" ;
    echo "<p> o numero 11001111111000 em decimal para binario é: $binarioToDecimal </p>";
    echo "<p> o numero 2345 em decimal para binario é: $decimalToOctal </p>";

    echo "<br>";
    echo "<p> Funções de arredondamentos, onde:
            <br><br> 
            <strong>ceil()</strong> -->  é um arredondamento para cima, 
            <br><br> 
            <strong>floor()</strong> -->  é um arredondamento para baixo, 
            <br><br> 
            <strong>round()</strong> -->  é um arredondamento aritimético
         </p>";
    echo "<br>";
    $ceil =  ceil(2.5);
    $floor = floor(2.5);
    $round = round(2.49);
    $round2 = round(2.5);
    $round3 = round(2.52);

    echo "<strong>ceil: </strong> $ceil <br>";
    echo "<strong>floor: </strong> $floor <br>";
    echo "<strong>round de 2.49: </strong> $round <br>";
    echo "<strong>round de 2.5: </strong> $round2 <br>";
    echo "<strong>round de 2.52: </strong> $round2 <br>";

    echo "<br>";
    echo "<p>
            <strong>
            Calcula a hipotenusa:
            </strong>
        </p>";
    echo "<p> 
            <strong>hypot </strong> --> Calcula o tamanho da hipotenusa de um ângulo reto do triângulo 
         </p>
         <p>
            <strong>x</strong> Tamanho do primeiro lado <br>
            <strong>y</strong> Tamanho do segundo lado
         </p>";

         $hypot = hypot(4,3);
         echo "<strong>hipotenusa de 3,4 é = </strong> $hypot";

         echo "<p> 
            <strong>intdiv </strong> --> Calcula o valor da divisão inteira 
         </p>";

         echo "<br>";
         echo "<p>
         <strong>
         IntDiv
         </strong>
     </p>";
         $intDiv = intdiv(5,2);
         echo "<strong>A divisão inteira do intdiv 5 e 2 = </strong> $intDiv";


         echo "<br>";
         echo "<p>
                 <strong>
                 Funções min(0 e max():
                 </strong>
             </p>";
         echo "
                <p>
                    <strong>min()</strong> --> Localiza o maior valor · count() - Conta o número de elementos de uma variável, ou propriedades de um objeto.<br>
                    <strong>max()</strong> --> Retorna o maior valor do array. Se no mínimo dois parâmetros são fornecidos, max() retornará o maior 
                </p>";
                $min =  min(2,5);
                $min2 = min(2, 10, 14, 0, 5, 7, 3, -3);
                $max = max(3, 7);
                $max2 =  max(2, 10, 14, 0, 5, 7, 3, -3);

                echo "<strong>min: </strong> $min <br>";
                echo "<strong>min: </strong> $min2 <br>";
                echo "<strong>max: </strong> $max <br>";
                echo "<strong>max: </strong> $max2 <br>";

        echo "<br>";
        echo "<p>
                <strong>
                PI:
                </strong>
            </p>";
                $pi =  pi();
                $pi2 = pi()*2;
                $piPorConstante = M_PI;
                echo "<strong>Pi: </strong> $pi <br>";
                echo "<strong>Pi 2: </strong> $pi2<br>";
                echo "<strong>Pi atraves de constante: </strong> $piPorConstante<br>";

                echo "<br>";
                echo "<p>
                        <strong>
                        Funções  de seno, cosseno e tangente:
                        </strong>
                    </p>";
                    
                echo "
                        <p>
                            <strong>sin()</strong> <br>
                            <strong>cos()</strong> <br>
                            <strong>tang()</strong> 
                        </p>";
                        $sin =  sin(30);
                        $cos =  cos(30);
                        $tang = tan(30);
                        
                        echo "<strong>Seno de 30: </strong> $sin <br>";
                        echo "<strong>cosseno de 30: </strong> $cos <br>";
                        echo "<strong>tangente de 30: </strong> $tang <br>";  

        echo "<br>";
        echo "<p>
                <strong>
              POW - Potenciação
                </strong>
            </p>";
            echo "
            <p>
                <strong>*</strong> --> Diferença~de usar função de potenciação (pow()) para usar o sinal ( ** ) é <u>somente</u> na ordem de precedencia nos calculos
            </p>";
                $pow =  pow(2);           
                echo "<strong>Potencia de 2: </strong> $pow<br>";

        echo "<br>";
        echo "<p>
                <strong>
                Funções  de seno, cosseno e tangente:
                </strong>
            </p>";
            
        echo "
                <p>
                    <strong>sin()</strong> <br>
                    <strong>cos()</strong> <br>
                    <strong>tang()</strong> 
                </p>";
                $sin =  sin(30);
                $cos =  cos(30);
                $tang = tang(30);
                
                echo "<strong>Seno de 30: </strong> $sin <br>";
                echo "<strong>cosseno de 30: </strong> $sos <br>";
                echo "<strong>tangente de 30: </strong> $tang <br>";     
     
    ?>
</body>

</html>