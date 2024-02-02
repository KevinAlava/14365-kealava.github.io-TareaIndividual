<?php
function factorial($n){
    $resultado = 1;
    for($i = 1; $i <= $n; $i++){
        $resultado *= $i;
    }
    return $resultado;
}

function esPrimo($num){
    if($num <= 1) return false;
    if($num == 2) return true;
    if($num % 2 == 0) return false;
    for($i = 3; $i * $i <= $num; $i += 2){
        if($num % $i == 0) return false;
    }
    return true;
}

function serieMatematica($n){
    $suma = 0;
    for($i = 1; $i <= $n; $i++){
        $suma += pow($i, 2) / expm1(ln($i + 1));
    }
    return $suma;
}

while(1){
    // DESPLIEGA UN MENU EN PANTALLA
    echo "MENU\n";
    echo "=============\n";
    echo "1. FACTORIAL\n";
    echo "2. PRIMO\n";
    echo "3. SERIE MATEMATICA\n";
    echo "S. SALIR\n";
    $op = fgets(STDIN);

    if($op == 'S' || $op == 's'){
        break;
    }

    echo "Ingrese un numero: ";
    $numero = fgets(STDIN);

    switch($op){
        case '1':
            echo "Factorial de $numero: " . factorial($numero) . "\n";
            break;

        case '2':
            if(esPrimo($numero)){
                echo "Es primo\n";
            } else {
                echo "No es primo\n";
            }
            break;

        case '3':
            echo "Resultado de la serie matematica: " . serieMatematica($numero) . "\n";
            break;

        default:
            echo "Error: Opcion invalida\n";
            break;
    }
}

?>