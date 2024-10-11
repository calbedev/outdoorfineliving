<?php
include 'comp/db.php'; // Conexão com o banco de dados

// Verificar se o ID do produto foi passado
if (isset($_GET['id'])) {
    $produto_id = $_GET['id'];

    // Recuperar os dados do produto pelo ID
    $query = "SELECT * FROM produtos WHERE id = ?";
    $stmt = $db->prepare($query);
    $stmt->bind_param('i', $produto_id);
    $stmt->execute();
    $result = $stmt->get_result();
    $produto = $result->fetch_assoc();

    // Verificar se o formulário foi submetido para atualização
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $nome = $_POST['nome'];
        $descricao = $_POST['descricao'];
        $categoria_id = $_POST['categoria'];
        $subcategoria_id = $_POST['subcategoria'];

        // Verificar se uma nova imagem foi enviada
        if (isset($_FILES['imagem']['name']) && $_FILES['imagem']['name'] != '') {
            $imagem = $_FILES['imagem']['name'];
            $target_dir = "uploads/";
            $target_file = $target_dir . basename($imagem);
            move_uploaded_file($_FILES["imagem"]["tmp_name"], $target_file);
        } else {
            $imagem = $produto['imagem']; // Mantém a imagem atual se não for enviada uma nova
        }

        // Atualizar o produto no banco de dados
        $query = "UPDATE produtos SET nome = ?, descricao = ?, categoria_id = ?, subcategoria_id = ?, imagem = ? WHERE id = ?";
        $stmt = $db->prepare($query);
        $stmt->bind_param('ssissi', $nome, $descricao, $categoria_id, $subcategoria_id, $imagem, $produto_id);

        if ($stmt->execute()) {
            echo "Produto atualizado com sucesso!";
        } else {
            echo "Erro ao atualizar o produto: " . $stmt->error;
        }
    }
} else {
    echo "ID do produto não fornecido!";
    exit;
}

// Recuperar as categorias e subcategorias
$categorias = $db->query("SELECT * FROM categorias");
$subcategorias = $db->query("SELECT * FROM subcategorias WHERE categoria_id = " . $produto['categoria_id']);
?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Produto</title>
    <!-- Favicons -->
    <link rel="shortcut icon" href="uploads/icon.png" type="image/x-icon">
    <link rel="apple-touch-icon" href="uploads/icon.png">

    <!-- ************************* CSS Files ************************* -->

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.css">

    <!-- Vendor CSS -->
    <link rel="stylesheet" href="assets/css/vendor.css">

    <!-- style css -->
    <link rel="stylesheet" href="assets/css/main.css">
</head>
<body>
    <div class="col-md-7 offset-lg-1">

        <div class="heading mb--40">
            <h2>Editar Produto</h2>
            <hr class="delimeter">
        </div>
            
            <form action="editar_produto.php?id=<?php echo $produto_id; ?>" method="POST" enctype="multipart/form-data" class="form">
                <label for="nome">Nome do Produto:</label>
                <input class="form__input mb--30" type="text" name="nome" id="nome" value="<?php echo $produto['nome']; ?>" required><br><br>

                <label for="descricao">Descrição:</label>
                <textarea class="form__input form__input--textarea mb--30" name="descricao" id="descricao" required><?php echo $produto['descricao']; ?></textarea><br><br>

                <label for="categoria">Categoria:</label>
                <select class="table table-condensed" name="categoria" id="categoria" required>
                    <?php while ($categoria = $categorias->fetch_assoc()) { ?>
                        <option value="<?php echo $categoria['id']; ?>" <?php echo ($categoria['id'] == $produto['categoria_id']) ? 'selected' : ''; ?>>
                            <?php echo $categoria['nome']; ?>
                        </option>
                    <?php } ?>
                </select><br><br>

                <label for="subcategoria">Subcategoria:</label>
                <select class="table table-condensed" name="subcategoria" id="subcategoria" required>
                    <?php while ($subcategoria = $subcategorias->fetch_assoc()) { ?>
                        <option value="<?php echo $subcategoria['id']; ?>" <?php echo ($subcategoria['id'] == $produto['subcategoria_id']) ? 'selected' : ''; ?>>
                            <?php echo $subcategoria['nome']; ?>
                        </option>
                    <?php } ?>
                </select><br><br>

                <label for="imagem">Imagem do Produto:</label>
                <input class="form__input mb--30" type="file" name="imagem" id="imagem"><br>
                <img src="<?php echo $produto['imagem']; ?>" alt="Imagem do Produto" width="100"><br><br>

                <input class="btn  btn-bg-primary" type="submit" value="Atualizar Produto">
            </form>

            <br>
            <a class="btn  btn-bg-primary" href="admin.php">Voltar para a administração de produtos</a>
    </div>
</body>
</html>
