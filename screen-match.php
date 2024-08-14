<?php 

// \n Quebra de linha 
// \t Tab 

function exibeMensagemLancamento(int $ano): void {
    if($ano >= 2022) { 
        echo "Esse filme é um lançamento \n"; 
    
    } elseif($ano >= 2020 && $ano <= 2022) { 
        echo "Esse filme ainda é novo \n"; 
    
    } else { 
        echo "Esse não é um lançamento \n"; 
    }
};

function incluidoNoPlano(bool $plano, int $ano): bool {
    return $plano || $ano < 2020;
}


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