<?php

/************************************************************
**
**
**		Funció per comprovar la validesa del DNI
**
**
************************************************************/

//Returns: 1 = NIF ok, 2 = CIF ok, 3 = NIE ok, -1 = NIF bad, -2 = CIF bad, -3 = NIE bad, 0 = ??? bad
$cif = strtoupper($cif);
for ($i = 0; $i < 9; $i ++){
    $num[$i] = substr($cif, $i, 1);
}

//Si no té el fortmat vàlid torna un error
if (!preg_match('/((^[A-Z]{1}[0-9]{7}[A-Z0-9]{1}$|^[T]{1}[A-Z0-9]{8}$)|^[0-9]{8}[A-Z]{1}$)/', $cif)){
         return 0;
}

//comprobació de NIFs estàndar
if (preg_match('/(^[0-9]{8}[A-Z]{1}$)/', $cif)){
    if ($num[8] == substr('TRWAGMYFPDXBNJZSQVHLCKE', substr($cif, 0, 8) % 23, 1))    {
        return 1;
    }else{
        return -1;
    }
}

//Comprobació del CIF
$suma = $num[2] + $num[4] + $num[6];
for ($i = 1; $i < 8; $i += 2){
    $suma += substr((2 * $num[$i]),0,1) + substr((2 * $num[$i]), 1, 1);
}
    $n = 10 - substr($suma, strlen($suma) - 1, 1);

//Comprobació de NIFs especials (es calculen com CIF o NIF)
if (preg_match('/^[KLM]{1}/', $cif)){
     if ($num[8] == chr(64 + $n) || $num[8] == substr('TRWAGMYFPDXBNJZSQVHLCKE', substr($cif, 1, 8) % 23, 1)){
        return 1;
     } else {
    return -1;
     }
}

//comprobacion de CIFs
if (preg_match('/^[ABCDEFGHJNPQRSUVW]{1}/', $cif)){
    if ($num[8] == chr(64 + $n) || $num[8] == substr($n, strlen($n) - 1, 1)){
        return 2;
    }else{
        return -2;
    }
}

//comprobacion de NIEs
if (preg_match('/^[XYZ]{1}/', $cif)){
    if ($num[8] == substr('TRWAGMYFPDXBNJZSQVHLCKE', substr(str_replace(array('X','Y','Z'), array('0','1','2'), $cif), 0, 8) % 23, 1))    {
        return 3;
    }else{
        return -3;
    }
}

//si todavia no se ha verificado devuelve error
return 0;

?>
