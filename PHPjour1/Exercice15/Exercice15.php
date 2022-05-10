<?php
   $pays_population = array(
      'France' => 777445000,
      'Suede' => 8886000,
      'Suisse' => 8512800,
      'Kosovo' => 2950000,
      'Malte' => 541760,
      'Mexique' => 135278000,
      'Allemagne' => 662500400,
   ); {
foreach($pays_population as $pays => $population) 
   if($population >= 20000000) {
      echo "$pays" . PHP_EOL;

   }
}