<?php

/**
 * FUNÇÃO RESPONSÁVEL PELA VALIDAÇÃO DO LOGIN DE UM UTILIZADOR
 */
function validarLogin($requisicao)
{
    # RETIRA ESPAÇOS VAZIOS
    foreach ($requisicao as $key => $value) {
        $requisicao[$key] =  trim($requisicao[$key]);
    }

    # VALIDANDO O CAMPO EMAIL
    if (!filter_var($requisicao['email'], FILTER_VALIDATE_EMAIL)) {
        $erros['email'] = 'O campo Email não pode estar vazio e deve ter o formato de email, a exemplo de: nome@dominio.pt.';
    }

    # VALIDANDO O CAMPO PALAVRA PASSE
    if (empty($requisicao['palavra_passe']) || strlen($requisicao['palavra_passe']) < 6) {
        $erros['palavra_passe'] = 'O campo Palavra Passe não pode estar vazio e deve ter no mínio 6 caracteres.';
    }

    # RETORNA ERROS
    if (isset($erros)) {
        return ['invalido' => $erros];
    }

    # RETORNA UTILIZADOR VALIDADO
    return $requisicao;
}

/**
 * FUNÇÃO RESPONSÁVEL PELA VALIDAÇÃO DA PALAVRA PASSE DE UM UTILIZADOR
 */
function validarPalavraPasse($requisicao)
{
    if (!isset($_SESSION['id'])) {

        # RECUPERA DADOS DO UTILIZADOR
        $utilizador = lerUtilizadorPorEmail($requisicao['email']);

        # VALIDANDO O CAMPO EMAIL
        if (!$utilizador) {
            $erros['email'] = 'Verifique seu email.';
        }

        if (!password_verify($requisicao['palavra_passe'], $utilizador['palavra_passe'])) {
            $erros['palavra_passe'] = 'Verifique sua palavra passe.';
        }

        # RETORNA ERROS
        if (isset($erros)) {
            return ['invalido' => $erros];
        }

        # RETORNA UTILIZADOR VALIDADO
        return $utilizador;
    }
}
