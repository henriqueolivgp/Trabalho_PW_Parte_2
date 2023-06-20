<?php

/**
 * FICHEIRO RESPONSÁVEL PARA GARANTIR QUE UMA PÁGINA SEJA ACESSÍVEL
 * APENAS POR UM ADMINISTRADOR
 * 
 * PARA UTILIZAR, BASTA FAZER A REQUISIÇÃO DESTE FICHEIRO NA PÁGINA
 * QUE DEVERÁ SER PROTEGIDA
 */

# CARREGA AUXILIADOR
require_once __DIR__ . '/../../auxiliadores/auxiliador.php';

$isAdmin = false;

# SE UTILIZADOR NÃO TIVER SESSÃO INICIADA, ENVIA PARA TELA DE LOGIN
if (administrador() == true) {
    # Deixa ver o botao de painel de controlo
    $isAdmin = $row["administrador"] == 1;
}else{
    # Não deixa ver o botao de painel de controlo
    $isAdmin = $row["administrador"] == 0;
}
