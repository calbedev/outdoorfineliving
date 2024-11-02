<?php
        include 'db.php';
        $destaques = $conn->query ("SELECT moveis.id_moveis, moveis.nome_moveis, moveis.banner, moveis.criado_em FROM moveis ORDER BY criado_em LIMIT 3");	

?>

<section class="top-sale-area mb--75 mb-md--55">
                <div class="container">
                    <div class="row mb--35 mb-md--23">
                        <div class="col-12 text-center">
                            <h2>Móveis Em Destaque</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="element-carousel"
                            data-slick-options='{
                                "spaceBetween": 30,
                                "slidesToShow": 3
                            }'
                            data-slick-responsive='[
                                {"breakpoint": 768, "settings": {"slidesToShow": 2}},
                                {"breakpoint": 480, "settings": {"slidesToShow": 1}}
                            ]'>
                                <?php while ($destaque = $destaques->fetch_assoc()) { ?>
                                <div class="item">
                                    <div class="ft-product">
                                        <div class="product-inner">
                                            <div class="product-image">
                                                <figure class="product-image--holder">
                                                    <img src="<?php echo $destaque['banner'] ?>" alt="Product">
                                                </figure>
                                                <a href="catalogo.php" class="product-overlay"></a>
                                                <div class="product-action">
                                                    <a data-bs-toggle="modal" data-bs-target="#productModal" class="action-btn">
                                                        <i class="la la-eye"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <!--<div class="product-info plr--20">
                                                <h3 class="product-title"><a href="product-details.html"><?php //echo $destaque['nome_moveis'] ?>.</a></h3>
                                                
                                            </div>-->
                                        </div>
                                    </div>
                                </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </section>