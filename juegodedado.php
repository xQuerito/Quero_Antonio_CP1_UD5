<?php

//Definición de la clase
class Dado {
	
// Declaración de propiedades
private $minNumDado = '1';
private $maxNumDado = '12';

//getterssetters
public function getMinNumDado()
{
	return $this->minNumDado;
}

public function getMaxNumDado()
{
	return $this->maxNumDado;
}

//Declaración del método
public function tirarDado(){
    echo rand ($minNumDado,$maxNumDado);
	
	}
}

?>
