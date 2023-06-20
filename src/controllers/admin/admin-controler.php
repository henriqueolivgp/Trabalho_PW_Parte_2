<?php

require_once __DIR__ . '/../../auxiliadores/auxiliador.php';

/**
 * FICHEIRO RESPONSÁVEL PARA GARANTIR QUE UMA PÁGINA SEJA ACESSÍVEL
 * APENAS POR UM ADMINISTRADOR
 * 
 * PARA UTILIZAR, BASTA FAZER A REQUISIÇÃO DESTE FICHEIRO NA PÁGINA
 * QUE DEVERÁ SER PROTEGIDA
 */

$isAdmin = false;

# PROVENIENTE DE FUNÇÕES AUXILIADORAS. CARREGA O UTILIZADOR ATUAL

$utilizador = utilizador();

# SE UTILIZADOR NÃO TIVER SESSÃO INICIADA, ENVIA PARA TELA DE LOGIN
if (administrador()) {

    # Deixa ver o botao de painel de controlo
    $isAdmin = $utilizador == ["administrador"];
} else {
    # Não deixa ver o botao de painel de controlo
    $isAdmin = $utilizador != ["administrador"];
}
