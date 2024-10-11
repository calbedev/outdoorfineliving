<?php
include 'db.php'; // Conexão com o banco de dados

$produtos = $db->query("SELECT id, nome, descricao, subcategoria_id, imagem, categoria_id FROM produtos WHERE categoria_id=$cathtml ORDER BY id DESC LIMIT 4");
?>


<?php while ($produto = $produtos->fetch_assoc()) { ?>
	    
									
                                        <div class="col-lg-3 col-sm-6 mb--45">
                                            <div class="ft-product HTfadeInUp">
                                                <div class="product-inner">
                                                    <div class="product-image">
                                                        <figure class="product-image--holder">
                                                            <img src="<?php echo $produto['imagem']; ?>" alt="Product">
                                                        </figure>
                                                        <a href="product-details.html" class="product-overlay"></a>
                                                        <div class="product-action">
                                                            <a data-bs-toggle="modal" data-bs-target="#productModal" class="action-btn">
                                                                <i class="la la-eye"></i>
                                                            </a>
                                                            <a href="wishlist.html" class="action-btn">
                                                                <i class="la la-heart-o"></i>
                                                            </a>
                                                            <a href="wishlist.html" class="action-btn">
                                                                <i class="la la-repeat"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="product-info">
                                                        <div class="product-category">
                                                            <a href="product-details.html">Chair</a>
                                                        </div>
                                                        <h3 class="product-title"><a href="product-details.html"><?php echo $produto['nome']; ?></a></h3>
                                                        <div class="product-info-bottom">
                                                            <div class="product-price-wrapper">
                                                                <span class="money"></span>
                                                            </div>
                                                            <a href="cart.html" class="add-to-cart pr--15">
                                                                <i class="la la-plus"></i>
                                                                <span>Adicionar a Cotação</span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                   
<?php } ?>