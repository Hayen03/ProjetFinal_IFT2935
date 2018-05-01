<?php
/*
 * Retourne une string Json au client
 * $errorCode : Code erreur (string)
 * $errorMessage : Message d'erreur (string)
 * $data : Donn�e de la requ�te (string)
 * 
 * */
function responseJson($errorCode, $errorMessage, $data) {
    return '{"errCode":'.$errorCode.',"errMsg":"'.$errorMessage.'", "data":'.$data.'}';
}
?>