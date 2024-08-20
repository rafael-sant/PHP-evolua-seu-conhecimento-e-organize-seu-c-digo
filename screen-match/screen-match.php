<?php 

require __DIR__ . "/funcoes.php";

echo "Bem vindo ao sreen match \n";

$nomeFilme = 'Top Gun - Maverick';
$nomeFilme = 'O Assassino';
$nomeFilme = 'Carros';

$anoLancamento =  $argv[1] ?? 2022;

$notas = [];

$notaFilme = $somaNotas / 4 ;
$estaIncluso= true;
$planoPrime= true;

$incluidoNoPlano = incluidoNoPlano($planoPrime, $anoLancamento);


echo "Nome do filme: " . $nomeFilme . "\n"; // concatenação
echo "Nota do filme: $notaFilme \n"; // interpolação
echo "Ano lançamento: $anoLancamento \n"; 


switch ($nomeFilme) {
    case "O Assassino":
        $genero = "Ação";
        break;
    case "Carros":
        $genero = "Infantil";
        break;
    case "Top Gun - Maverick":
        $genero = "Suspense";
        break;
    default:
        $genero = "Desconhecido"; // Caso o nome do filme não esteja na lista
        break;
}

echo "O gênero do filme é: $genero \n";

$quantidadeDeNotas = $argc - 2;

for($i = 1; $i < $argc; $i++) { 
    $notas[] = (float) $argv[$i];
};

$somaNotas = array_sum($notas) ;


$media = $somaNotas / $quantidadeDeNotas;

echo "A soma das notas é $somaNotas e a média é $media \n";

exibeMensagemLancamento($anoLancamento);

// $filme = [
//     "Thor",
//     2021, 
//     7.7, 
//     "Super Herói"
// ];

$filme = [
    "nome" => "Thor",
    "ano" => 2021, 
    "nota" => 7.7, 
    "genero" => "Super Herói"
];

// var_dump($filme['nome']);

echo ($filme['nome']);

// var_dump($notas);
// sort($notas);
// var_dump($notas);
// echo min($notas);

var_dump($filme['nome']);
// var_dump(strpos($filme['nome'], "T"));
$posicao = strpos($filme['nome'], "r");

var_dump(substr($filme['nome'],2, $posicao));

echo json_encode($filme);

$filmeComoStringJSON = json_encode($filme);    

file_put_contents(__DIR__ . '/filme.json', $filmeComoStringJSON);