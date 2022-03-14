<?php

function listarContatos($contatos) {
        
        $var = '';
        foreach ($contatos as $contato) {
            $var = $var."|Tipo " . $contato->getTipo() . " | Descrição: " . $contato->getDescricao() . " | ID da Pessoa: " . $contato->getUserId() . " \n ";
            
        }
        return nl2br ($var);
    }

    ?>