<?php declare(strict_types=1);

namespace Nfq\Akademija\Strict {
    function calculateHomeWorkSum(...$numbers): int{
        $suma = 0;
        foreach($numbers as $key => $numb_array){
        $suma += $numb_array;
        }
        return $suma;
    }
    function FunctionCaller(){
        echo 'Nfq\Akademija\Strict\calculateHomeWorkSum : ' . calculateHomeWorkSum(3, 2.2, '1') . PHP_EOL;
    }

}