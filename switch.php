<?php

$day="lundi";

switch ($day) {
    case 'Lundi':
        echo "c'est debut de la semaine.";
        break;
    case 'Vendredi':
            echo "c'est bientot me weekend.";
            break;
        
    default: "un autre jour de la semaine.";
        
        break;
}
if ($day== "lundi") {
  echo "C'est debut de la semaine.";
} elseif ($day=='vendredi') {
    echo "c'est bientot le weekend";
}else {
    echo "Un autre de la semaine.";
}