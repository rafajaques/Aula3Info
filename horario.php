<?php
# horario.php
require('twig_carregar.php');

use Carbon\Carbon;

$data = Carbon::now('America/Sao_Paulo')
    ->locale('pt_BR')
    ->isoFormat('LLLL');

$amanha = Carbon::now('America/Sao_Paulo')
    ->addDay() // Soma um dia
    ->locale('pt_BR')
    ->isoFormat('LLLL');

echo $twig->render(
    'horario.html',
    [
        'hoje' => $data,
        'amanha' => $amanha,
    ]
);