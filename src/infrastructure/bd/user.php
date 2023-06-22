<?php
# INSERE DADOS DA CONEXÃO COM O PDO
require_once __DIR__ . '/connection.php';

/**
 * FUNÇÃO RESPONSÁVEL POR CRIAR UM NOVO UTILIZADOR
 */
function criarUtilizador($utilizador)
{
    # CRIPTOGRAFA PALAVRA PASSE
    $utilizador['palavra_passe'] = password_hash($utilizador['palavra_passe'], PASSWORD_DEFAULT);

    # INSERE UTILIZADOR COM PROTEÇÃO CONTRA SQLINJECTION
    $sqlCreate = "INSERT INTO 
    utilizadores (
        nome, 
        apelido, 
        nif, 
        telemovel, 
        email, 
        foto, 
        administrador, 
        dono, 
        palavra_passe) 
    VALUES (
        :nome, 
        :apelido, 
        :nif, 
        :telemovel, 
        :email, 
        :foto, 
        :administrador, 
        :dono,
        :palavra_passe
    )";

    # PREPARA A QUERY
    $PDOStatement = $GLOBALS['pdo']->prepare($sqlCreate);

    # EXECUTA A QUERY RETORNANDO VERDADEIRO SE CRIAÇÃO FOI FEITA
    $sucesso = $PDOStatement->execute([
        ':nome' => $utilizador['nome'],
        ':apelido' => $utilizador['apelido'],
        ':nif' => $utilizador['nif'],
        ':telemovel' => $utilizador['telemovel'],
        ':email' => $utilizador['email'],
        ':foto' => $utilizador['foto'],
        ':administrador' => $utilizador['administrador'],
        ':dono' => $utilizador['dono'],
        ':palavra_passe' => $utilizador['palavra_passe']
    ]);

    # RECUPERA ID DO UTILIZADOR CRIADO
    if ($sucesso) {
        $utilizador['id'] = $GLOBALS['pdo']->lastInsertId();
    }
    # RETORNO RESULTADO DA INSERSÃO 
    return $sucesso;
}

function registarInfo($info)
{
    # INSERE ceia COM PROTEÇÃO CONTRA SQLINJECTION
    $sqlCreate = "INSERT INTO 
     ceia (
        img, 
        titulo, 
        texto) 
     VALUES (
         :img, 
         :titulo, 
         :texto
     )";
    # PREPARA A QUERY
    $PDOStatement = $GLOBALS['pdo']->prepare($sqlCreate);

    # EXECUTA A QUERY RETORNANDO VERDADEIRO SE CRIAÇÃO FOI FEITA
    $sucesso = $PDOStatement->execute([
        ':img' => $info['img'],
        ':titulo' => $info['titulo'],
        ':texto' => $info['texto']
    ]);

    # RECUPERA ID DO UTILIZADOR CRIADO
    if ($sucesso) {
        $info['id'] = $GLOBALS['pdo']->lastInsertId();

    }
    # RETORNO RESULTADO DA INSERSÃO
    return $info;
}

# Ler Info
function lerinfo($id)
{
    # PREPARA A QUERY
    $PDOStatement = $GLOBALS['pdo']->prepare('SELECT * FROM ceia WHERE id = ?;');

    # FAZ O BIND
    $PDOStatement->bindValue(1, $id, PDO::PARAM_INT);

    # EXECUTA A CONSULTA
    $PDOStatement->execute();

    # RETORNA OS DADOS
    return $PDOStatement->fetch();
}

function lerCeia()
{
    # PREPARA A QUERY
    $PDOStatement = $GLOBALS['pdo']->query('SELECT * FROM ceia;');

    # INICIA ARRAY DE UTILIZADORES
    $info = [];

    # PERCORRE TODAS AS LINHAS TRAZENDO OS DADOS
    while ($listaDeInfos = $PDOStatement->fetch()) {
        $info[] = $listaDeInfos;
    }
    # RETORNA UTLIZADORES
    return $info;
}

function AtualizarInfo($info)
{
    # INSERE Ceia COM PROTEÇÃO CONTRA SQLINJECTION, INCLUSINDO PALAVRA PASSE.
    $sqlUpdate = "UPDATE  
    ceia SET
    img = :img, 
    titulo = :titulo, 
    texto = :texto,   
    WHERE id = :id;";

    $PDOStatement = $GLOBALS['pdo']->prepare($sqlUpdate);

    # EXECUTA A QUERY RETORNANDO VERDADEIRO SE CRIAÇÃO FOI FEITA
    return $PDOStatement->execute([
        ':id' => $info['id'],
        ':img' => $info['img'],
        ':titulo' => $info['titulo'],
        ':texto' => $info['texto'],
    ]);
}

# apaga a info do ceia
function deleteInfos($id)
{
    # PREPARA A CONSULTA
    $PDOStatement = $GLOBALS['pdo']->prepare('DELETE FROM ceia WHERE id = ?;');

    # REALIZA O BIND
    $PDOStatement->bindValue(1, $id, PDO::PARAM_INT);

    # EXECUTA A CONSULTA E RETORNA OS DADOS
    return $PDOStatement->execute();
}

/**
 * FUNÇÃO RESPONSÁVEL POR LER UM UTILIZADOR
 */
function lerUtilizador($id)
{
    # PREPARA A QUERY
    $PDOStatement = $GLOBALS['pdo']->prepare('SELECT * FROM utilizadores WHERE id = ?;');

    # FAZ O BIND
    $PDOStatement->bindValue(1, $id, PDO::PARAM_INT);

    # EXECUTA A CONSULTA
    $PDOStatement->execute();

    # RETORNA OS DADOS
    return $PDOStatement->fetch();
}

/**
 * FUNÇÃO RESPONSÁVEL POR LER UM UTILIZADOR PELO EMAIL
 */
function lerUtilizadorPorEmail($email)
{
    # PREPARA A QUERY
    $PDOStatement = $GLOBALS['pdo']->prepare('SELECT * FROM utilizadores WHERE email = ? LIMIT 1;');

    # FAZ O BIND
    $PDOStatement->bindValue(1, $email);

    # EXECUTA A CONSULTA
    $PDOStatement->execute();

    # RETORNA OS DADOS
    return $PDOStatement->fetch();
}

/**
 * FUNÇÃO RESPONSÁVEL POR RETORNAR TODOS OS UTILIZADORES
 */
function lerTodosUtilizadores()
{
    # PREPARA A QUERY
    $PDOStatement = $GLOBALS['pdo']->query('SELECT * FROM utilizadores;');

    # ININIA ARRAY DE UTILIZADORES
    $utilizadores = [];

    # PERCORRE TODAS AS LINHAS TRAZENDO OS DADOS
    while ($listaDeUtilizadores = $PDOStatement->fetch()) {
        $utilizadores[] = $listaDeUtilizadores;
    }

    # RETORNA UTLIZADORES
    return $utilizadores;
}

/**
 * FUNÇÃO RESPONSAVEL POR ATUALIZAR OS DADOS DE UM UTILIZADOR NO SISTEMA
 */
function atualizarUtilizador($utilizador)
{
    # CRIPTOGRAFA PALAVRA PASSE E ALTERAR DADOS DO UTILIZDOR MAIS A PALAVRA PASSA, SE FOR INFORMADA
    if (isset($utilizador['palavra_passe']) && !empty($utilizador['palavra_passe'])) {
        $utilizador['palavra_passe'] = password_hash($utilizador['palavra_passe'], PASSWORD_DEFAULT);

        # INSERE UTILIZADOR COM PROTEÇÃO CONTRA SQLINJECTION, INCLUSINDO PALAVRA PASSE.
        $sqlUpdate = "UPDATE  
        utilizadores SET
            nome = :nome, 
            apelido = :apelido, 
            nif = :nif, 
            telemovel = :telemovel, 
            email = :email, 
            foto = :foto, 
            administrador = :administrador, 
            palavra_passe = :palavra_passe
        WHERE id = :id;";

        $PDOStatement = $GLOBALS['pdo']->prepare($sqlUpdate);

        # EXECUTA A QUERY RETORNANDO VERDADEIRO SE CRIAÇÃO FOI FEITA
        return $PDOStatement->execute([
            ':id' => $utilizador['id'],
            ':nome' => $utilizador['nome'],
            ':apelido' => $utilizador['apelido'],
            ':nif' => $utilizador['nif'],
            ':telemovel' => $utilizador['telemovel'],
            ':email' => $utilizador['email'],
            ':foto' => $utilizador['foto'],
            ':administrador' => $utilizador['administrador'],
            ':palavra_passe' => $utilizador['palavra_passe']
        ]);
    }

    # SE NÃO HOUVER PALAVRA PASSE ALTERADA, INSERE UTILIZADOR COM PROTEÇÃO CONTRA SQLINJECTION SEM A PALAVRA PASSE
    $sqlUpdate = "UPDATE  
    utilizadores SET
        nome = :nome, 
        apelido = :apelido, 
        nif = :nif, 
        telemovel = :telemovel, 
        email = :email, 
        foto = :foto, 
        administrador = :administrador
    WHERE id = :id;";

    # PREPARA A CONSULTA
    $PDOStatement = $GLOBALS['pdo']->prepare($sqlUpdate);

    # EXECUTA A QUERY RETORNANDO VERDADEIRO SE CRIAÇÃO FOI FEITA
    return $PDOStatement->execute([
        ':id' => $utilizador['id'],
        ':nome' => $utilizador['nome'],
        ':apelido' => $utilizador['apelido'],
        ':nif' => $utilizador['nif'],
        ':telemovel' => $utilizador['telemovel'],
        ':email' => $utilizador['email'],
        ':foto' => $utilizador['foto'],
        ':administrador' => $utilizador['administrador']
    ]);
}

/**
 * FUNÇÃO RESPONSAVEL POR ATUALIZAR A PALAVRA PASSE DO UTILIZADOR NO SISTEMA
 */
function atualizarPalavraPasse($utilizador)
{
    # CRIPTOGRAFA PALAVRA PASSE E ALTERAR DADOS DO UTILIZDOR MAIS A PALAVRA PASSA, SE FOR INFORMADA
    if (isset($utilizador['palavra_passe']) && !empty($utilizador['palavra_passe'])) {
        $utilizador['palavra_passe'] = password_hash($utilizador['palavra_passe'], PASSWORD_DEFAULT);

        # INSERE UTILIZADOR COM PROTEÇÃO CONTRA SQLINJECTION, INCLUSINDO PALAVRA PASSE.
        $sqlUpdate = "UPDATE  
        utilizadores SET
            nome = :nome, 
            palavra_passe = :palavra_passe
        WHERE id = :id;";

        $PDOStatement = $GLOBALS['pdo']->prepare($sqlUpdate);

        # EXECUTA A QUERY RETORNANDO VERDADEIRO SE CRIAÇÃO FOI FEITA
        return $PDOStatement->execute([
            ':id' => $utilizador['id'],
            ':nome' => $utilizador['nome'],
            ':palavra_passe' => $utilizador['palavra_passe']
        ]);
    }
}

/**
 * FUNÇÃO RESPONSÁVEL POR DELETAR UM UTILIZADOR DO SISTEMA
 */
function deletarUtilizador($id)
{
    # PREPARA A CONSULTA
    $PDOStatement = $GLOBALS['pdo']->prepare('DELETE FROM utilizadores WHERE id = ?;');

    # REALIZA O BIND
    $PDOStatement->bindValue(1, $id, PDO::PARAM_INT);

    # EXECUTA A CONSULTA E RETORNA OS DADOS
    return $PDOStatement->execute();
}

/**
 * FUNÇÃO RESPONSÁVEL POR CRIAR UM NOVO UTILIZADOR
 */
function registarUtilizador($utilizador)
{
    # CRIPTOGRAFA PALAVRA PASSE
    $utilizador['palavra_passe'] = password_hash($utilizador['palavra_passe'], PASSWORD_DEFAULT);

    # INSERE UTILIZADOR COM PROTEÇÃO CONTRA SQLINJECTION
    $sqlCreate = "INSERT INTO 
    utilizadores (
        nome, 
        email, 
        palavra_passe) 
    VALUES (
        :nome, 
        :email, 
        :palavra_passe
    )";

    # PREPARA A QUERY
    $PDOStatement = $GLOBALS['pdo']->prepare($sqlCreate);

    # EXECUTA A QUERY RETORNANDO VERDADEIRO SE CRIAÇÃO FOI FEITA
    $sucesso = $PDOStatement->execute([
        ':nome' => $utilizador['nome'],
        ':email' => $utilizador['email'],
        ':palavra_passe' => $utilizador['palavra_passe']
    ]);

    # RECUPERA ID DO UTILIZADOR CRIADO
    if ($sucesso) {
        $utilizador['id'] = $GLOBALS['pdo']->lastInsertId();

        # RETORNO RESULTADO DA INSERSÃO 
        return $utilizador;
    }

    return false;
}

// Funções da Tabela Percursos_Bike_Miradouros

function registarDados($info)
{
    # INSERE ceia COM PROTEÇÃO CONTRA SQLINJECTION
    $sqlCreate = "INSERT INTO 
     Percursos_Bike_Miradouros (
        img, 
        titulo, 
        texto,
        links,
        categoria)
     VALUES (
         :img, 
         :titulo, 
         :texto, 
         :links,
         :categoria
     )";
    # PREPARA A QUERY
    $PDOStatement = $GLOBALS['pdo']->prepare($sqlCreate);

    # EXECUTA A QUERY RETORNANDO VERDADEIRO SE CRIAÇÃO FOI FEITA
    $sucesso = $PDOStatement->execute([
        ':img' => $info['img'],
        ':titulo' => $info['titulo'],
        ':texto' => $info['texto'],
        ':links' => $info['links'],
        ':categoria' => $info['categoria']
    ]);

    # RECUPERA ID DO UTILIZADOR CRIADO
    if ($sucesso) {
        $info['id'] = $GLOBALS['pdo']->lastInsertId();

    }
    # RETORNO RESULTADO DA INSERSÃO
    return $info;
}

# Ler Info
function lerdados($id)
{
    # PREPARA A QUERY
    $PDOStatement = $GLOBALS['pdo']->prepare('SELECT * FROM Percursos_Bike_Miradouros WHERE id = ?;');

    # FAZ O BIND
    $PDOStatement->bindValue(1, $id, PDO::PARAM_INT);

    # EXECUTA A CONSULTA
    $PDOStatement->execute();

    # RETORNA OS DADOS
    return $PDOStatement->fetch();
}

function lerPercursos()
{
    # PREPARA A QUERY
    $PDOStatement = $GLOBALS['pdo']->prepare('SELECT * FROM Percursos_Bike_Miradouros;');

    $Infopercursos = [] ;

    # PERCORRE TODAS AS LINHAS TRAZENDO OS DADOS
    while ($listapercursos = $PDOStatement->fetch()) {
        $Infopercursos[] = $listapercursos;
    }
    # RETORNA OS DADOS
    return $Infopercursos;
}

function AtualizarDados($info)
{
    # INSERE Ceia COM PROTEÇÃO CONTRA SQLINJECTION, INCLUSINDO PALAVRA PASSE.
    $sqlUpdate = "UPDATE  
    info SET
    img = :img, 
    titulo = :titulo, 
    texto = :texto,  
    links = :links,
    categoria = :categoria, 
    WHERE id = :id;";

    $PDOStatement = $GLOBALS['pdo']->prepare($sqlUpdate);

    # EXECUTA A QUERY RETORNANDO VERDADEIRO SE CRIAÇÃO FOI FEITA
    return $PDOStatement->execute([
        ':id' => $info['id'],
        ':img' => $info['img'],
        ':titulo' => $info['titulo'],
        ':texto' => $info['texto'],
        ':links' => $info['links'],
        ':categoria' => $info['categoria']
    ]);
}

# apaga a info do ceia
function deleteDados($id)
{
    # PREPARA A CONSULTA
    $PDOStatement = $GLOBALS['pdo']->prepare('DELETE FROM Percursos_Bike_Miradouros WHERE id = ?;');

    # REALIZA O BIND
    $PDOStatement->bindValue(1, $id, PDO::PARAM_INT);

    # EXECUTA A CONSULTA E RETORNA OS DADOS
    return $PDOStatement->execute();
}
