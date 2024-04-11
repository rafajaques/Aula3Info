<?php
# compras.php
require('twig_carregar.php');
require('inc/banco.php');
use Carbon\Carbon;

$dados = $pdo->query('SELECT * FROM compromissos');

$compromissos = $dados->fetchAll(PDO::FETCH_ASSOC);

foreach ($compromissos as $indice => $compromisso) {
    $fds = Carbon::parse($compromisso['data'])->isWeekend();
    
    $compromissos[$indice]['fimdesemana'] = $fds;
}

echo $twig->render(
    'compromissos.html',
    [
        'compromissos' => $compromissos,
        'titulo' => 'Compromissos'
    ]
);