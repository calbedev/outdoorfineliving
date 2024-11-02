<?php
        include 'db.php';
        $anuncios = $conn->query ("SELECT anuncio.id_anuncio, anuncio.hashtag_slider, anuncio.imagem_slider, anuncio.texto_slider, anuncio.texto_bold_slider FROM anuncio");	

?> 
<section class="feature-product-area mb--75 mb-md--55">
                <div class="container">
                    <div class="row">
                        <?php while ($anuncio = $anuncios->fetch_assoc()) { ?>
                        <div class="col-12">
                            <div class="feature-product bg-color" data-bg-color="#B6A593">
                                <div class="feature-product__inner bg-color" data-bg-color="#E8E5E0">
                                    <div class="feature-product__info">
                                        <p class="hastag">#<?php echo $anuncio['hashtag_slider'] ?></p>
                                        <h2 class="feature-product__title"><a href="catalogo.php"><?php echo $anuncio['texto_bold_slider'] ?></a></h2>
                                        <a href="catalogo.php" class="feature-product__btn">Ver Mais</a>
                                    </div>
                                    <figure class="feature-product__image mb-sm--30">
                                        <a href="catalogo.php">
                                            <img src="<?php echo $anuncio['imagem_slider'] ?>" alt="Feature Product">
                                        </a>
                                    </figure>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                </div>
</section>