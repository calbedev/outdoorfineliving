<?php
include 'comp/header.php'; // Conexão com o banco de dados
include 'comp/db.php';
?>

<div class="col-12">
    <div class="elements-section-title mb-30 mt-20">
        <div class="cart-bottom  clearfix">
            <a href="admin.php" class="btn  btn-bg-primary" data-text="Catalogo">Catalogo</a>
            <a href="admin_slider.php" class="btn  btn-bg-primary" data-text="Slider">Slider</a>
			<a href="admin_banner.php" class="btn  btn-bg-primary" data-text="Banners">Banners</a>
            <a href="admin_unicos.php" class="btn  btn-bg-primary" data-text="Moveis unicos">Moveis unicos</a>
            <a href="upload.php" class="btn  btn-bg-primary" data-text="Adicionar Catalogo">Adicionar Catalogo</a>
		</div>
     </div>
</div>

            <div class="contact-us-area  pt-80 pb-80">
				<div class="container col-lg-6 col-md-7">	
					<div class="contact-us customer-login bg-white">
						<div class="row">
							<div >
								<div class="send-message mt-60">
									<form action="upload_produto.php" method="POST" enctype="multipart/form-data">
										<h4 class="heading mb--40">Adicionar ao Catálogo</h4>

                                            <label for="categoria">Categoria:</label>
                                                <select name="categoria" id="categoria" class="table table-condensed">
                                                    <?php
                                                    $categorias = $db->query("SELECT * FROM categorias");
                                                    while ($cat = $categorias->fetch_assoc()) {
                                                        echo "<option value='{$cat['id']}'>{$cat['nome']}</option>";
                                                    }
                                                    ?>
                                                </select> <br>

                                                <label for="subcategoria">Subcategoria:</label>
                                                <select name="subcategoria" id="subcategoria" class="table table-condensed">
                                                    <?php
                                                    $subcategorias = $db->query("SELECT * FROM subcategorias");
                                                    while ($sub = $subcategorias->fetch_assoc()) {
                                                        echo "<option value='{$sub['id']}'>{$sub['nome']}</option>";
                                                    }
                                                    ?>
                                                </select>

                                                    <label for="nome">Nome do Produto:</label>
                                                    <input type="text" name="nome" id="nome" required>

                                                    <label for="descricao">Descrição:</label>
                                                    <textarea class="form__input form__input--textarea mb--30" name="descricao" id="descricao" required></textarea>

                                                    <label for="imagem">Imagem do Produto (270x270)</label>
                                                    <input type="file" name="imagem" id="imagem" accept="image/*" required >

                                                    <button class="btn  btn-bg-primary" type="submit">Cadastrar Produto</button>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
<?php
include 'comp/footer.php';
?>