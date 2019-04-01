<?php

#Global namespace;
namespace {
    function calculateHomeWorkSum(int ...$numbers): int{
        $suma = 0;
        foreach($numbers as $key => $numb_array){
        $suma += $numb_array;
        }
        return $suma;
    }
}

#po Nfq\Akademija\Not_Typed namespace;
namespace Nfq\Akademija\Not_Typed{
    function calculateHomeWorkSum(int ...$numbers): int{
        $suma = 0;
        foreach($numbers as $key => $numb_array){
        $suma += $numb_array;
        }
        return $suma;
    }
}

#po Nfq\Akademija\Soft namespace;
namespace Nfq\Akademija\Soft{
    function calculateHomeWorkSum(int ...$numbers): int{
        $suma = 0;
        foreach($numbers as $key => $numb_array){
        $suma += $numb_array;
        }
        return $suma;
    }
}
