<?php
include 'db.php'; // Conexão com o banco de dados

$produtos = $db->query("SELECT id, texto, imagem, imagem2 FROM banner");
?>


<?php while ($produto = $produtos->fetch_assoc()) { ?>
    
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="best-sale-product bg-color" data-bg-color="#f7f8f9">
                                <div class="best-sale-product__inner bg-color" data-bg-color="#ffffff">
                                    <figure class="best-sale-product__img">
                                        <a href="#">
                                            <img src="<?php echo $produto['imagem']; ?>" alt="Best Sale Product">
                                        </a>
                                    </figure>
                                    <div class="best-sale-product__info">
                                        <h2 class="best-sale-product__heading">
                                            <span class="best-sale-product__heading--main">Mais Vendido</span>
                                            <span class="best-sale-product__heading--sub">Obtenha o melhor preço</span>
                                        </h2>
                                        <p class="best-sale-product__desc"><?php echo $produto['texto']; ?></p>
                                        <a href="shop_full.php" class="btn btn-outline btn-size-md btn-color-primary btn-shape-round btn-hover-2">Ver Mais</a>
                                    </div>
                                </div>
                                <figure class="best-sale-product__top-image">
                                    <img src="<?php echo $produto['imagem2']; ?>" alt="bg image">
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>

<?php } ?>

                