<?php 

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
};