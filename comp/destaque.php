<?php
include 'db.php'; // Conexão com o banco de dados

$produtos = $db->query("SELECT id, nome, descricao, subcategoria_id, imagem, categoria_id FROM produtos ORDER BY criado DESC LIMIT 3");
?>


<?php while ($produto = $produtos->fetch_assoc()) { ?>
	    
                                <div class="item">
                                    <div class="ft-product">
                                        <div class="product-inner">
                                            <div class="product-image">
                                                <figure class="product-image--holder">
                                                    <img src="<?php echo $produto['imagem']; ?>" alt="Product">
                                                </figure>
                                                <a href="#" class="product-overlay"></a>
                                                <div class="product-action">
                                                    <a data-bs-toggle="modal" data-bs-target="#productModal" class="action-btn">
                                                        <i class="la la-eye"></i>
                                                    </a>
                                                    <a href="#" class="action-btn">
                                                        <i class="la la-heart-o"></i>
                                                    </a>
                                                    <a href="#" class="action-btn">
                                                        <i class="la la-repeat"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="product-info plr--20">
                                                <h3 class="product-title"><a><?php echo $produto['nome']; ?></a></h3>
                                                <div class="product-info-bottom">
                                                    <div class="product-price-wrapper">
                                                        <span class="money">Novo</span>
                                                    </div>
                                                    <a href="#" class="add-to-cart">
                                                        <i class="la la-plus"></i>
                                                        <span>Adicionar a Cotação</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
<?php } ?>