<?php
# INICIALIZA O REPOSITÓRIO PDO UTILIZADOR PARA 
require_once __DIR__ . '/../infrastructure/bd/user.php';
session_start();

/*
    Função responsavel por ver se a sessão foi iniciada ou não,
    se não foi iniciada inicia 
*/


/**
 * FUNÇÃO PARA INFORMAR SE UTILIZADO ESTÁ AUTENTICADO
 */
function autenticado()
{
    return isset($_SESSION['id']) ? true : false;
}

/**
 * FUNÇÃO QUE RETORNA OS DADOS DO UTILIZADOR
 */
function utilizador()
{
    if (autenticado()) {
        return lerUtilizador($_SESSION['id']);
    } else {
        return false;
    }
}

function ceia()
{
    if (autenticado()) {
        return lerinfo($_SESSION['id']);
    } else {
        return false;
    }
}
<<<<<<< HEAD

function corno_de_bico()
=======
function Percursos_Bike_Miradouros()
>>>>>>> e1f378cef1a329a24e17cb7b3b44e65c04b1444c
{
    if (autenticado()) {
        return lerinfo($_SESSION['id']);
    } else {
        return false;
    }
}
<<<<<<< HEAD

=======
>>>>>>> e1f378cef1a329a24e17cb7b3b44e65c04b1444c
/**
 * FUNÇÃO QUE RETORNA O ID DO UTILIZADOR LOGADO
 */
function utilizadorId()
{
    return  $_SESSION['id'];
}

/**
 * FUNÇÃO PARA INFORMAR SE UTILIZADOR É ADMNISTRADOR
 */
function administrador()
{
    $utilizador = utilizador();
    return $utilizador['administrador'] ? true : false;
}

/**
 * FUNÇÃO PARA INFORMAR SE UTILIZADOR É O DONO DO SISTEMA
 */
function dono()
{
    $utilizador = utilizador();
    return $utilizador['dono'] ? true : false;
}
