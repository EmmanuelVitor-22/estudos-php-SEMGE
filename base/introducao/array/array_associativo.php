<?php 

#array associativo é semelhante a um JSON

// No array associativo você pode definir as chaves (indices), geramente string,  por onde os elementos podem ser buscados

#estrutura

$dados = [
          'nome' => 'Hanna',
          'idade' => 23,
          'email'=> 'emsdsfaf@gmail.com' 
];

$dadosGerais = [$dados, 
               ['nome' => 'teste2',
                'idade' => 25,
                'email'=> 'sfdgfghrf@gmail.com' 
                ]
        ];


        $show = $dadosGerais[1]['nome'];
        echo $show;

?>