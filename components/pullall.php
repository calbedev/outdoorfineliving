<?php
        include 'db.php';
        $destaques = $conn->query ("SELECT moveis.id_moveis, moveis.nome_moveis, moveis.banner, moveis.criado_em, nome_categoria FROM moveis
        join categorias on moveis.categoria = categorias.id_categoria
        LIMIT 4");	

?>
<?php while ($destaque = $destaques->fetch_assoc()) { ?>
<div class="col-lg-3 col-sm-6 mb--45">
                                            <div class="ft-product HTfadeInUp">
                                                <div class="product-inner">
                                                    <div class="product-image">
                                                        <figure class="product-image--holder">
                                                            <img src="<?php echo $destaque['banner'] ?>" alt="Product">
                                                        </figure>
                                                        <a href="product-details.html" class="product-overlay"></a>
                                                        <div class="product-action">
                                                            <a data-bs-toggle="modal" data-bs-target="#productModal" class="action-btn">
                                                                <i class="la la-eye"></i>
                                                            </a>
                                                            
                                                        </div>
                                                    </div>
                                                    <!--<div class="product-info">
                                                        <div class="product-category">
                                                            <a href="catalogo.php"><?php //echo $destaque['nome_categoria'] ?></a>
                                                        </div>
                                                        <h3 class="product-title"><a href="catalogo.php"><?php //echo $destaque['nome_moveis'] ?>.</a></h3>
                                                        
                                                    </div>-->
                                                </div>
                                            </div>
</div>
<?php } ?>