<?php
require "vendor/autoload.php";

echo "\nCalculateHomeWorkSum : " . calculateHomeWorkSum(3, 2.2, '1');
echo "\nNfq\Akademija\Not_Typed\calculateHomeWorkSum : " . Nfq\Akademija\Not_Typed\calculateHomeWorkSum(3, 2.2, '1');
echo "\nNfq\Akademija\Soft\calculateHomeWorkSum : " . Nfq\Akademija\Soft\calculateHomeWorkSum(3, 2.2, '1');
echo "\nNfq\Akademija\Soft\calculateHomeWorkSum : ";
try{
    Nfq\Akademija\Strict\FunctionCaller();
}catch (TypeError $e){
    echo "Blogas argumento tipas perduodamas i funkcija". $e->getMessage();
}