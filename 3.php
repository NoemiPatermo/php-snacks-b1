<?php
/*
Creare un array di array.
Ogni array figlio avrà come chiave una data in questo formato:
    DD/MM/YYYY (ad es 31/01/2007) e come valore un array di post 
associati a quella data.
Stampare ogni data con i relativi post.  
*/
$posts = [

    '10/01/2019' => [
        [
            'title' => 'Post 1',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 1'
        ],
        [
            'title' => 'Post 2',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 2'
        ],
    ],
    '10/02/2019' => [
        [
            'title' => 'Post 3',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 3'
        ]
    ],
    '15/05/2019' => [
        [
            'title' => 'Post 4',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 4'
        ],
        [
            'title' => 'Post 5',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 5'
        ],
        [
            'title' => 'Post 6',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 6'
        ]
    ],
];
//Stampare ogni data con i relativi post.
// LO USI PER CICLARE IN ARRAY CON INDICI NUMERICI  E ANCHE ASSOCIATIVI
foreach ($posts as $key => $value) {
    echo $key . "<br/>";
    foreach ($value as $postDetail ) {
        echo $postDetail['title'] . "<br/><hr>";
        echo $postDetail['author']. "  ";
        echo $postDetail['text'] . "<br/>";
    }
}

/* CORREZIONE DI OTTAVIO col ciclo FOR

 1. estrapolare l'array di chiavi (posizionale) dall'array posts
 2. cicliamo con il for le chiavi in maniera incrementale 0, 1, 2
 3. per ogni step prendiamo i valori che ci servono dall'array originale 
  per la chiave che io sto ciclando in questo esatto momento


$postsKeys = array_keys($postskeys);


*/

?>
