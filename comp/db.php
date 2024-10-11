<?php
// Definindo as credenciais de conexão com o banco de dados
$host = 'localhost';       // Host do banco de dados, normalmente 'localhost'
$dbname = 'outdoorlivingco_website2024';  // Nome do banco de dados
$username = 'outdoorlivingco_teldio';      // Nome de usuário do banco de dados
$password = '^IEUJvg(81%Q';        // Senha do banco de dados

// Conexão com o banco de dados utilizando mysqli
$db = new mysqli($host, $username, $password, $dbname);

// Verificando se houve erro na conexão
if ($db->connect_error) {
    die("Erro na conexão com o banco de dados: " . $db->connect_error);
}

// Definindo o charset para utf8 para suportar caracteres especiais
$db->set_charset("utf8");

?>
