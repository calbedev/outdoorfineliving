<?php
include 'comp/header.php';
include 'comp/db.php'; // Conexão com o banco de dados

// Excluir produto
if (isset($_GET['delete_id'])) {
    $id = $_GET['delete_id'];
    $db->query("DELETE FROM produtos WHERE id = $id");
}

// Listar produtos
$produtos = $db->query("SELECT p.id, p.nome, p.imagem, s.nome as subcategoria, c.nome as categoria
                        FROM produtos p
                        JOIN subcategorias s ON p.subcategoria_id = s.id
                        JOIN categorias c ON s.categoria_id = c.id");
?>

<div class="col-12">
    <div class="elements-section-title mb-30 mt-20">
        <h1>Gerenciar Produtos </h1>
        <div class="cart-bottom  clearfix">
            <a href="admin.php" class="btn  btn-bg-primary" data-text="Catalogo">Catalogo</a>
            <a href="admin_slider.php" class="btn  btn-bg-primary" data-text="Slider">Slider</a>
			<a href="admin_banner.php" class="btn  btn-bg-primary" data-text="Banners">Banners</a>
            <a href="admin_unicos.php" class="btn  btn-bg-primary" data-text="Moveis unicos">Moveis unicos</a>
            <a href="upload.php" class="btn  btn-bg-primary" data-text="Adicionar Catalogo">Adicionar Catalogo</a>
		</div>
     </div>
</div>

<h2>Lista do Catalogo </h2>
<div class="our-order payment-details">
    <table class="table table-style-2 wishlist-table text-center" style="width: 100%">
        
        <thead>
            <th>Nome</th>
            <th>Categoria</th>
            <th>Subcategoria</th>
            <th>Imagem</th>
            <th>Ações</th>
        </thead>
        <?php while ($produto = $produtos->fetch_assoc()) { ?>
            <tr style="height: 145px">
                <td><?php echo $produto['nome']; ?></td>
                <td><?php echo $produto['categoria']; ?></td>
                <td><?php echo $produto['subcategoria']; ?></td>
                <td><img src="<?php echo $produto['imagem']; ?>" width="145"></td>

                <td>
                    <a href="editar_produto.php?id=<?php echo $produto['id']; ?>">Editar || </a>
                    <a href="?delete_id=<?php echo $produto['id']; ?>" onclick="return confirm('Tem certeza?')">Apagar</a>
                </td>
            </tr>
        <?php } ?>
    </table>
</div>

<?php
include 'comp/footer.php';
?>
