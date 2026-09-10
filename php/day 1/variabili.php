<?php
declare(strict_type=1);

#string con uso di gettype() e var_dump()
$nome ="yassine";
echo gettype($nome),PHP_EOL;        //output: string
var_dump($nome);                    //output: string(7) "yassine"

#is_numeric()
echo "$nome è un numero: ", var_dump(is_numeric($nome)) ;
echo "12 è un numero: " , var_dump(is_numeric(12));
echo "'123400' è un numero:" , var_dump(is_numeric("123400")); //qui bool(true) viene stampato prima a causa del concatenazione (.)
echo "\n====CONST====",PHP_EOL;

#const 
$C = "C12";
echo $C." è una constante",PHP_EOL;  //qui mi da un warning: PHP Warning:  Undefined variable $C in /home/emidark/Agencyflow/php/day 1/variabili.php on line 16

#
if(isset($C)){
    echo "constante C non è null",PHP_EOL; //questo viene stampato
}
else echo "constante C è null",PHP_EOL;
//NB: non viene stampato true o false solo con isset() o le altri is_....., ho dovuto usare var_dump() ma sempre stampa bool(true)..? ci una soluzione?
//NB: ho usato altri cose che non abbiamo ancora visti, non significa che deve saltarli quado arriviamo tipo if, else

//esercizio
echo "=============================== Esercizio ================================",PHP_EOL;
#dati
$nome_cliente= "yassine";
$nome_progetto = "agencyFlow";
$id_attivita=101;
$budget="2500.75";
$stato = true;
$sconto = null;
$iva = 0.22;

echo "tipo: ", var_dump($nome_progetto) , "Budget iniziale: ",var_dump($budget),PHP_EOL;

if(is_numeric($budget)){
    $budget = (float)$budget;
}
echo "tipo Budget attuale: ", var_dump($budget);

