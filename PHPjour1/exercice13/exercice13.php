<?php
   $tableau = array();
   $i = 0;
   while($i < 10) {
      $tableau[] = rand(0, 42);
      $i++;	  
   }
   if(in_array(42, $tableau))
      echo 'Le nombre 42 est bien dans le tableau.';
   else
      echo 'Le tableau contient la valeur 42.';
   echo '<br />';  
   var_dump($tableau);
?>