<?php
    function menu(){
        echo "MENU\n";
        echo "======\n";
        echo "1. Fibonacci\n";
        echo "2. Cubo\n";
        echo "3. Fraccionarios\n";
        echo "S. Salir\n";
        echo "Escoja una opcion.....????\n";
    }

    function fibonacci($n){
        $fibonacci = [0, 1];
        for($i = 2; $i < $n; $i++){
            $fibonacci[$i] = $fibonacci[$i-1] + $fibonacci[$i-2];
        }
        return $fibonacci;
    }

    function cubo($max){
        $cubo = [];
        for($i = 1; $i <= $max; $i++){
            $cubeSum = 0;
            $str = (string)$i;
            for($j = 0; $j < strlen($str); $j++){
                $cubeSum += $str[$j]**3;
            }
            if($cubeSum == $i){
                array_push($cubo, $i);
            }
        }
        return $cubo;
    }

    function fraccionarios(){
        $numeros = [];
        for($i = 0; $i < 4; $i++){
            echo "Ingrese el numerador del fraccionario " . ($i+1) . ": ";
            $numerador = trim(fgets(STDIN));
            echo "Ingrese el denominador del fraccionario " . ($i+1) . ": ";
            $denominador = trim(fgets(STDIN));
            array_push($numeros, [intval($numerador), intval($denominador)]);
        }
        $suma = $numeros[0][0] + $numeros[1][0] * $numeros[1][1] - $numeros[2][0] / $numeros[2][1];
        echo "La suma de los fraccionarios es: " . $suma . "\n";
    }

    $option = 0;
    while($option != 'S'){
        menu();
        $option = trim(fgets(STDIN));
        switch($option){
            case '1':
                echo "Ingrese el número de elementos de Fibonacci: ";
                $n = trim(fgets(STDIN));
                if($n >= 1 && $n <= 50){
                    $fib = fibonacci($n);
                    echo "Los primeros " . $n . " números de Fibonacci son: " . implode(', ', $fib) . "\n";
                } else {
                    echo "Error: El número debe estar entre 1 y 50\n";
                }
                break;
            case '2':
                $cubo = cubo(1000000);
                echo "Los números entre 1 y 1000000 que cumplen con la condición son: " . implode(', ', $cubo) . "\n";
                break;
            case '3':
                fraccionarios();
                break;
            case 'S':
                echo "Saliendo...\n";
                break;
            default:
                echo "Error: Opción inválida\n";
                break;
        }
    }
?>