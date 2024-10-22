<?php

echo '<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">';

include './classes/Mensagem.php';
echo "<h3>1. Estanciando classes e trabalhando com seus atributos e métodos</h3>";
$msg = new Mensagem();
var_dump($msg);
echo "<br><br>";
echo $msg;
echo $msg->definirMensagem('<h1>Teste</h1>');
echo $msg->definirMensagem('<h1>Teste</h1>')->renderizar();
echo $msg->definirMensagem('<h1>Teste</h1>')->renderizar(3);
echo "<br><br><br>";
echo (new Mensagem());
echo (new Mensagem())->definirMensagem('<h1>Teste</h1>')->renderizar(99);

// aqui diferentemente do modelo acima usei namespace.
require './classes/sistema/Configuracao.php'; // necessário fazer o 'require' ou o 'include' do arquivo antes de realizar o 'use'.
use classes\sistema\Configuracao;
echo "<br><br><br><h3>2. Acessando classe pelo nasmespace</h3>";
echo (new \classes\sistema\Configuracao)->appName; // esta linha não depende do 'use'.
echo "<br>";
echo (new Configuracao)->appName; // esta aqui depende do 'use'.
// como esta classe não tem onstrutor, logo não é necessário os parenteses, como se vê acima.

// trabalhando com métodos estáticos
require './classes/Helpers.php';
use sistema\Helpers;
echo "<br><br><h3>3. Trabalhando com métodos estáticos</h3>";
// echo (new Helpers)->formataMoeda(3445652.658);
echo Helpers::formataMoeda(534.1); // Para acessar um método estático não é necessário estanciar a classe, ele pode ser acessado diretamente.
echo '<br>';
echo Helpers::verificaCPF('11122233355') ? 'Sim' : 'Não';