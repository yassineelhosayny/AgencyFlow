<?php
declare(strict_types=1);

echo "=================== Esercizi 3 =====================",PHP_EOL;

//dati iniziali
$budget = 5000;
$spese = 4600;
$avanzamento_iniziale = 55;
$incrementoPerDay = 7;
const periodo = 10;
$stato = "working";
$statoBudget = null;

//parte A : stato finanziario
$budgetRimanente = $budget - $spese;
if($budgetRimanente < 0 ){
    $statoBudget = "Budget superato";
} elseif($budgetRimanente === 0){
    $statoBudget = "Budget esaurito";
}
elseif($budgetRimanente <= ( $budget - ($budget * 0.9))){
    $statoBudget = "Budget quasi esaurito";
}
else{
    $statoBudget = "Budget disponibile";
}

//parte B: traduzione dello stato
$statoITA = match($stato){
    "new" => "Nuovo",
    "working" => "In lavorazione",
    "blocked" => "Bloccato",
    "completed" => "Completato",
    default => "Stato sconosciuto"
};

//parte C: Simulazione
$avanzamento = $avanzamento_iniziale ;
for($day = 0 ;$day < periodo; $day++){
    if($day === 5 || $day === 6){
        echo "Giorno " . $day +1," : Avanzamento: " . $avanzamento,PHP_EOL;
        continue;
    }
    $avanzamento += $incrementoPerDay;
    if($avanzamento >= 100){
        $avanzamento = 100;
        echo "Giorno " . $day +1," : Avanzamento: " . $avanzamento,PHP_EOL;
        break;
    } 
    echo "Giorno " . $day +1," : Avanzamento: " . $avanzamento,PHP_EOL;
}

//parte D: confronto
var_dump("10" == 10); //bool(true)
var_dump("10" === 10); //bool(false)
var_dump("false" == true);//bool(true)
var_dump(0 == false); //bool(true)
var_dump(0 === false);//bool(false)