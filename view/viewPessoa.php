<?php

function listarPessoas($pessoas) {
    $var = '';
    foreach ($pessoas as $pessoa) {
        $var = $var."| Nome: " . $pessoa->getName() . " | CPF: " . $pessoa->getCpf() . " | ID: " . $pessoa->getId() . " \n ";
        
    }
    return nl2br ($var);
}

?>