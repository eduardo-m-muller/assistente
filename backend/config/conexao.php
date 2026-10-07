<?php
// ============================================================
// conexao.php
// Aqui fica a conexão com o banco de dados.
// Deixei tudo num arquivo só pra não repetir usuário e senha
// em todo script. Sempre que eu precisar do banco, é só dar
// um require_once neste arquivo e usar a variável $pdo.
// ============================================================

// Dados de conexão (se mudar o banco, é só mexer aqui)
$host    = "localhost";
$banco   = "db_helpdesk";
$usuario = "admin_helpdesk";
$senha   = "MinhaSenha123";

$dsn = "mysql:host=$host;dbname=$banco;charset=utf8mb4";

// Cria a conexão com o tratamento de erros ligado (lança exceção se der problema).
// Não coloquei try/catch aqui de propósito: quem chamar este arquivo
// é quem decide o que fazer quando der erro.
$pdo = new PDO($dsn, $usuario, $senha, [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
]);
