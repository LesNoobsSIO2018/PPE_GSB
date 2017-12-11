

<?php

foreach ($lesQtComps as $qt){
     foreach ($qt as $a){
         echo "<h2 class='idH'> Quantite de composant d'un medicament</h2>";
       echo"<h3>".$a."</h3>";
   }
 }

  foreach ($lesStats as $st){
   // var_dump($st);
   foreach ($st as $a){
        echo "<h2 class='idH'>Somme de composant d'un medicament</h2>";
    echo"<h3>".$a."</h3>";
   }
 }
