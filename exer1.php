<?php

$nome = "Rafael dos S.";
echo "Nome: $nome \n";

$nota1 = 7.3;
$nota2 = 9.0;
$nota3 = 5.0;
$media = ($nota1 + $nota2 + $nota3) / 3;
echo "A média do aluno $nome é $media \n";

$metros = $argv[1];
$centimetros = $argv[1] * 100;
echo "$metros metros em cm é $centimetros \n";
