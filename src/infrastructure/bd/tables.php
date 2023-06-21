<?php
# TRATA-SE DE UMA FORMA RÁPIDA PARA REINICIAR O BANCO DE DADOS EM AMBIENTE DE DESENVOLVIMENTO
# ESTE FICHEIRO NÃO DEVE ESTAR DISPONÍVEL EM PRODUÇÃO

# INSERE DADOS DA CONEXÃO COM O PDO UTILIZANDO SQLITE

require __DIR__ . '/connection.php';

# APAGA TABELA SE ELA EXISTIR
$pdo->exec('DROP TABLE IF EXISTS utilizadores;');

echo 'Tabela utilizadores apagada!' . PHP_EOL;

# CRIA A TABELA UTILIZADORES
$pdo->exec(
    'CREATE TABLE utilizadores (
    id INTEGER PRIMARY KEY, 
    nome CHAR, 
    apelido CHAR, 
    nif CHAR, 
    telemovel CHAR, 
    email CHAR NOT NULL, 
    foto CHAR NULL, 
    administrador CHAR, 
    dono CHAR,
    palavra_passe CHAR);'
);

echo 'Tabela utilizadores criada!' . PHP_EOL;

# ABAIXO UM ARRAY SIMULANDO A DADOS DE UM UTILIZADOR 
$utilizador = [
    'nome' => 'Henrique',
    'apelido' => 'Oliv',
    'nif' => '817493759',
    'telemovel' => '972562312',
    'email' => 'henrique@admin.pt',
    'foto' => null,
    'administrador' => true,
    'dono' => true,
    'palavra_passe' => 'henry1234'
];

$utilizador2 = [
    'nome' => 'Pedro',
    'apelido' => 'Ferreira',
    'nif' => '817493759',
    'telemovel' => '972562312',
    'email' => 'pedro@admin.pt',
    'foto' => null,
    'administrador' => true,
    'dono' => true,
    'palavra_passe' => 'pedro1234'
];

# CRIPTOGRAFA PALAVRA PASSE
$utilizador['palavra_passe'] = password_hash($utilizador['palavra_passe'], PASSWORD_DEFAULT);
# CRIPTOGRAFA PALAVRA PASSE
$utilizador2['palavra_passe'] = password_hash($utilizador2['palavra_passe'], PASSWORD_DEFAULT);

# INSERE UTILIZADOR
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
# EXECUTA A QUERY RETORNANDO VERDADEIRO SE CRIAÇÃO FOI FEITA
$sucesso = $PDOStatement->execute([
    ':nome' => $utilizador2['nome'],
    ':apelido' => $utilizador2['apelido'],
    ':nif' => $utilizador2['nif'],
    ':telemovel' => $utilizador2['telemovel'],
    ':email' => $utilizador2['email'],
    ':foto' => $utilizador2['foto'],
    ':administrador' => $utilizador2['administrador'],
    ':dono' => $utilizador2['dono'],
    ':palavra_passe' => $utilizador2['palavra_passe']
]);

echo 'Utilizadores padrão criado!';

$pdo->exec('DROP TABLE IF EXISTS ceia;');

echo 'Tabela ceia apagada!' . PHP_EOL;

# CRIA A TABELA Ceia
$pdo->exec(
    'CREATE TABLE ceia (
    id INTEGER PRIMARY KEY,
    img CHAR NULL,
    titulo CHAR NOT NULL, 
    texto TEXT NOT NULL,
    links TEXT);'
);

echo 'Tabela ceia criada!' . PHP_EOL;

# INSERE UTILIZADOR
$sqlCreate = "INSERT INTO 
    ceia (
        img, 
        titulo, 
        texto, 
        links,) 
    VALUES (
        :img, 
        :titulo, 
        :texto, 
        :links
    )";
    

$pdo->exec('DROP TABLE IF EXISTS Corno_do_Bico_Page;');

echo 'Tabela Corno_do_Bico_Page apagada!' . PHP_EOL;

# CRIA A TABELA Corno do Bico Page
$pdo->exec(
    'CREATE TABLE Corno_do_Bico_Page (
    id INTEGER PRIMARY KEY,
    img CHAR NULL,
    titulo CHAR NOT NULL, 
    texto TEXT NOT NULL,
    links TEXT,
    categoria char);'
);

echo 'Tabela Corno_do_Bico_Page criada!' . PHP_EOL;

# INSERE UTILIZADOR
$sqlCreate = "INSERT INTO 
    Corno_do_Bico_Page (
        img, 
        titulo, 
        texto, 
        links,
        categoria,) 
    VALUES (
        :img, 
        :titulo, 
        :texto, 
        :links,
        :categoria
    )";

# Tabela geral para as tres ultimas paginas
