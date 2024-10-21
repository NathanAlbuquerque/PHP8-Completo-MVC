<?php

declare(strict_types = 1); // obriga a enviar parametros exatamente nos tipos definidos pelas funcoes, retorna um erro caso contrário

require 'config.php';
include 'functions.php';

$myText = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque distinctio nam placeat veniam incidunt voluptas voluptates aut, animi quae nostrum dolore amet, culpa assumenda autem quis rerum numquam eius!';
$myText2 = 'Lorem ipsum dolor!';

echo resumirTexto($myText, 40);
echo '<hr>';
var_dump($myText);
echo '<br>';
var_dump(resumirTexto($myText2, 40));
echo '<hr>';
echo strlen($myText);
echo '<hr>';

echo saudacao();
echo strip_tags(saudacao());
echo '<hr>';

$val1 = 56;
echo $val1 ? $val1 : 0;
// ou 
$val2 = '';
echo $val2 ?: 0;
echo '<hr>';
echo '<br><br>';

echo url('sobre-nos');
echo '<br>';
echo dataFormatada();

