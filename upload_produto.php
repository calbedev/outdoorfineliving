<?php
include 'comp/db.php'; // Conexão com o banco de dados

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $categoria_id = $_POST['categoria'];
    $subcategoria_id = $_POST['subcategoria'];
    $nome = $_POST['nome'];
    $descricao = $_POST['descricao'];

    // Verifica se a imagem foi enviada
    if (isset($_FILES['imagem']) && $_FILES['imagem']['error'] === 0) {
        $imagem = $_FILES['imagem']['name'];
        $caminho_imagem = 'uploads/' . $imagem;

        // Move a imagem para a pasta de uploads
        move_uploaded_file($_FILES['imagem']['tmp_name'], $caminho_imagem);

        // Inserir produto no banco de dados
        $sql = "INSERT INTO produtos (nome, descricao, subcategoria_id, imagem, categoria_id) VALUES ('$nome', '$descricao', '$subcategoria_id', '$caminho_imagem', '$categoria_id')";
        if ($db->query($sql) === TRUE) {
            echo "Produto cadastrado com sucesso!";
        } else {
            echo "Erro ao cadastrar produto: " . $db->error;
        }
    } else {
        echo "Erro ao enviar imagem.";
    }
}
?>