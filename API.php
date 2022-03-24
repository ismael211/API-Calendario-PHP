<?php

$year = date('Y');
//URL da API
$url = 'https://brasilapi.com.br/api/feriados/v1/'.$year;

$datahj = date('Y/m/d');
//$datahj = date('2022-12-25');
echo date('Y-m-d', strtotime($datahj)); //Formatando a data atual

echo "<pre>";

$feriados = json_decode(file_get_contents($url)); //versão resumida

$cont = 0;
foreach ($feriados as $a) {
    if($datahj == $a->date){
        $cont++;
    }
    //echo $a->date.'<br>';   
}
if ($cont > 0){
    echo "\nHoje é um feriado!";

}else{
    echo "\nHoje não é um feriado!";
}

