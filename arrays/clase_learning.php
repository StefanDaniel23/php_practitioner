<?php
class Dictionar {
     public $traduceri = array();
     public $tip = "Ro";

     public $dictio;

     function __construct( $tip, DictionarIO $dictio ) {
          $this->tip = $tip;
          $this->dictio = $dictio;
      }
  }

  //$ro = new Dictionar();
//  print_r($ro);
//echo "<br /><br />";
//  var_dump($ro);

/*$ro = new Dictionar();
  $ro->traduceri['COPAC'] = "copac";

//var_dump($ro);

  $en = new Dictionar();
  $en->tip = "En";
  $en->traduceri['COPAC'] = "tree";

//var_dump($en);

  foreach ( array( $ro, $en ) as $dict ) {
      print "tip: " . $dict->tip;
      print "COPAC: " . $dict->traduceri['COPAC'];
  }
*/
$ro = new Dictionar("En", new DictionarIO());
$ro->dictio = NULL;
var_dump($ro);
