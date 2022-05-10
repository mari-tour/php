<?php
   $n= 0;
   while($n <= 20) {
      if($n == 8) {
        echo '<strong>'.$n.'</strong>';	  
      } else {
         echo $n;
      }
      echo '<br />';
      $n= $n+2;
   }
?>