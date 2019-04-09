<?php

class Tasks
{
    public $sarcina;

    public $indeplinit = false;

    public function __construct($sarcina, $indeplinit){
        $this->sarcina = $sarcina;
        $this->indeplinit = $indeplinit;
    }
}

$program = [
    new Tasks ('barbierit', false),
    new Tasks ('lucru cu php', true),
    new Tasks ('vizita la dentis', false),
];

//var_dump($program);

            // ARRAY_FILTER //
$sarcinaefectuata = array_filter($program, function($sortare){
    return $sortare->indeplinit;
});

//var_dump($sarcinaefectuata);

$sarcinaNEefectuata = array_filter($program, function($sortare){
    return ! $sortare->indeplinit;
});

//var_dump($sarcinaNEefectuata);

            // ARRAY_MAP //
$modificat = array_map(function($sortare){
    return (array) $sortare;
    //return ['descriere'=>$sortare->sarcina];
}, $program);

//var_dump($modificat);

$denumire_sarcina = array_map(function($sortare){
    return $sortare->sarcina;
}, $program);

//var_dump($denumire_sarcina);

//$stadiu_sarcina = array_map(function($sortare){
//    return $sortare->indeplinit = true;
//}, $program);

//var_dump($stadiu_sarcina);

            // ARRAY_COLUMN //
$sarcini = array_column($program, 'indeplinit');
//var_dump($sarcini);
