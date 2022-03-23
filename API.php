<?php

$year = date('Y');

$url = 'https://brasilapi.com.br/api/feriados/v1/'.$year;

echo "<pre>";

$feriados = json_decode(file_get_contents($url)); //versão resumida


foreach ($feriados as $a) {
    echo $a->type.'<br>';   
}

