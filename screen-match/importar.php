<?php 

$caminhoArquivo = __DIR__ . '/filme.json';
$conteudoArquivoFilme = file_get_contents($caminhoArquivo);

$filmes = json_decode($conteudoArquivoFilme, true);

var_dump($filmes);