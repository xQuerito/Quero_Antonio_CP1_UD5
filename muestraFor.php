<?php

include '/juegodedado.php';

$resultado_dado = new dado();

for ($i=0;$i<12;$i++){
    $resultado_dado->tirarDado();
    echo "<br>El dado ha dado " . $resultado_dado->minNumDado . " puntos";
}

?>
