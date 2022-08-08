<?php
/* inicializando as variaveis
*/
$arrayDesordenado = [54,26,93,17,77,31,44,55,20,10,17,100,150,1];
$arrayOrdenado = [];
$arrayAux = $arrayDesordenado;
$numeroDaSequencia = 0;
/*************************************/
//print_r($arrayAux);

for ($i=0; $i < count($arrayDesordenado); $i++){
    $numeroDaSequencia = $arrayDesordenado[$i];

    for ($j=$i; $j < count($arrayDesordenado); $j++){
        if ( ($numeroDaSequencia >= $arrayDesordenado[$j]) ) {
            $numeroDaSequencia = $arrayDesordenado[$j];
            $indice = $j;
        }
    }    
    
    $maior = $arrayDesordenado[$i];
    $arrayDesordenado[$i] = $numeroDaSequencia;
    $arrayDesordenado[$indice] = $maior;
    
    //$arrayOrdenado[$i] = $numeroDaSequencia;
    //array_splice($arrayAux, $indice, 1);
    //array_splice($arrayDesordenado, $indice, 1);
    //print_r( $arrayAux);
    
}
//print_r($arrayDesordenado);
echo 'Array Ordenado 1: ';
print_r($arrayDesordenado);
echo '<br />';

/*------------------------------------------------*/
/* reinicializando as variaveis
*/
$arrayDesordenado = [54,26,93,17,77,31,44,55,20,10,17,120,150,1];
$arrayOrdenado = [];
$arrayAux = $arrayDesordenado;
$numeroDaSequencia = 0;
/*************************************/
$posicaoAux = 0;
for ($i=0; $i < count($arrayDesordenado); $i++){
    //$numeroDaSequencia = $arrayDesordenado[$i];
    $numeroDaSequencia = $arrayAux[$posicaoAux];
    for ($j=0; $j < count($arrayAux); $j++){
        if ( ($numeroDaSequencia >= $arrayAux[$j]) ) {
            $numeroDaSequencia = $arrayAux[$j];
            $indice = $j;
        }
    }
    $arrayOrdenado[$i] = $numeroDaSequencia;
    array_splice($arrayAux, $indice, 1);

    if ($posicaoAux < count($arrayAux) - 1)
        $posicaoAux++;
    else    
        $posicaoAux = 0;
}

echo '<br />';
echo 'Array Ordenado 4: ';
print_r($arrayOrdenado);