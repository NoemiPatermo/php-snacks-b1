<?php
/*
Creare un array contenente qualche alunno di un'ipotetica classe.
Ogni alunno avrà i seguenti dati:
 - nome
 - cognome
 - un array contenente i suoi voti scolastici
Stampare nome, cognome e la media dei voti di ogni alunno.
*/
$classe = [
    
    [
        'nome' => 'Gabriele',
        'cognome' => 'Sanna',
        'voti' => [25,30,24]
    ],
    [
        'nome' => 'Dayron',
        'cognome' => 'Aguilera',
        'voti' => [20,18,22]
    ],
    [
        'nome' => 'Pippo',
        'cognome' => 'Baudo',
        'voti' => [27,20,29]
    ]
];

foreach ($classe as $key) { //richiamo array e key, ricerco più elementi dell'array associati a indice
    echo $key['nome'] . " "; //in un ciclo for sarebbe classe[i]
    echo $key['cognome']." , ";
    $mediaVoti = array_sum($key['voti'])/count($key['voti']);//somma e count per arrivare alla media
    echo "La media dei voti dello studente è: ". $mediaVoti. "<br/>"; //stampa finale
}
//per ogni elemento dell'array identificato "as" chiave-valore manda a schermo(echo) chiave e valore




// correzione col ciclo For

/*
for ($x=0; $x < count($classe) ; $x++) { 
    $mediaVoti = array_sum($classe[$x]['voti'])/ count($classe[$x]['voti']);
    $media = round($mediaVoti,2);
    //stampa
    echo "La media dei voti dello studente {$classe[$x]['nome']} {$classe[$x]['cognome']} è:   $media<br><hr>";
}*/
?>