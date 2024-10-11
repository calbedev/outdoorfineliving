<?php
include 'db.php'; // Conexão com o banco de dados

$produtos = $db->query("SELECT id, texto, imagem FROM unicos");
?>


<?php while ($produto = $produtos->fetch_assoc()) { ?>
  
        <section class="feature-product-area mb--75 mb-md--55">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="feature-product bg-color" data-bg-color="#94947e">
                                <div class="feature-product__inner bg-color" data-bg-color="#e9fefd">
                                    <div class="feature-product__info">
                                        <p class="hastag">#New Style</p>
                                        <h2 class="feature-product__title"><a href="product-details.html"><?php echo $produto['texto']; ?></a></h2>
                                        <a href="shop_full.php" class="feature-product__btn">Ver Mais</a>
                                    </div>
                                    <figure class="feature-product__image mb-sm--30">
                                        <a href="product-details.html">
                                            <img src="<?php echo $produto['imagem']; ?>" alt="Feature Product">
                                        </a>
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

<?php } ?>


            