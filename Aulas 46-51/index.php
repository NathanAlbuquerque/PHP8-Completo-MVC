<?php

require 'vendor/autoload.php';

use app\Helpers;
// echo Helpers::formataMoeda(5.25);
// echo "<br>";
// echo date('H:i:s');
// echo "<br>";
// echo APP_NAME;
?>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Arima:wght@100..700&display=swap" rel="stylesheet">

<style>
    code {
        background-color: #3335;
        color: #050;
        padding-inline: 5px;
        font-style: italic;
    }
    * {
        font-family: "Arima", system-ui;
        font-optical-sizing: auto;
        font-weight: 400;
        font-style: normal;
    }
    h1, h2, h3, h4, h5, h6, strong {
        font-weight: 700;
    }
</style>

<br><hr><br>

<h3>Como fazer a utilização do composer em seus projetos</h3>
<p>Qual a necessidade?</p>
<p>Para não precisar ter que ficar fazendo diversos requires e/ou includes de arquivos no seu projeto.</p>
<h4>Passo-a-passo:</h4>
<ol>
    <li>Fazer a instalação do <strong>composer</strong> em sua máquina pelo <a href="getcomposer.org">getcomposer.org</a>;</li>
    <li>Na <strong>raiz</strong> do seu projeto executar <code>composer init</code>;</li>
    <li>A pasta para o carregamento dos arquivos vem por padrão como <strong>src</strong>, mas é possível mudar alterando no arquivo <strong>composer.json</strong>;</li>
    <li>Você pode implementar mais seu arquivo <strong>composer.json</strong> de acordo como quiser, possível segiur a doc no site do composer</li>
    <li>Realizar o <strong>include</strong> do arquivo <strong>autoload</strong> gerado pelo <strong>composer</strong>;</li>
    <li>Ao editar o arquivo <strong>composer.json</strong> é necessário rodar o comando <code>composer update</code>;</li>
    <li>Pronto, finalizado, ja esta carregando os arquivos;</li>
    <li>Possível também fazer carregamento de arquivos que não são classes, necessário acrescentar no campo <strong>autoload</strong> do arquivo <strong>composer.json</strong> mais uma chave chamada <strong>files</strong>.</li>
</ol>

<br><hr><br>

<h3>Instalar pacotes pelo Composer?</h3>
<p>Também conhecidos popularmente como componentes, dependências, classes e outros...</p>
<h4>Passo-a-passo:</h4>
<ol>
    <li>Busque no <a href="https://packagist.org/">https://packagist.org/</a> algum pacote que lhe interessa;</li>
    <li>Geralmente nele haverá um campo mostrando a instalação, porém caso não tenha, o usa-se o comando <code>composer require nome-do/pacote</code>;</li>
    <li>Ele será instalado em seu projeto, os arquivos dele ficarão em <strong>vendor/nome-do/pacote</strong>;</li>
    <li>Para remover segue-se código semelhante ao da instalação, porém troca-se o <strong>require</strong> por <strong>remove</strong>.</li>
</ol>