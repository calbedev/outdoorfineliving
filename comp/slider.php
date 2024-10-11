<?php
include 'db.php'; // Conexão com o banco de dados

$produtos = $db->query("SELECT id, texto, imagem FROM slider");
?>


<?php while ($produto = $produtos->fetch_assoc()) { ?>

								<div class="item">
                                    <div class="single-slide d-flex align-items-center bg-color" data-bg-color="#94947e">
                                        <div class="row align-items-center g-0 w-100">
                                            <div class="col-xl-7 col-md-6 mb-sm--50">
                                                <figure data-animation="fadeInUp" data-duration=".3s" data-delay=".3s" class="plr--15">
													<img src="<?php echo $produto['imagem']; ?>" alt="Slider O1 image" class="mx-auto"/>
                                                </figure>
                                            </div>
                                            <div class="col-md-6 col-lg-5 offset-lg-1 offset-xl-0">
                                                <div class="slider-content">
                                                    <div class="slider-content__text mb--40 mb-md--30">
                                                        <p class="mb--15" data-animation="fadeInUp" data-duration=".3s" data-delay=".3s">#Nova Tendência</p>
                                                        <p class="mb--20" data-animation="fadeInUp" data-duration=".3s" data-delay=".3s">Bem Vindo A Nosso, Galeria De Móveis</p>
                                                        <h1 class="heading__primary lh-pt7" data-animation="fadeInUp" data-duration=".3s" data-delay=".3s">Elegantes 2024</h1>
                                                    </div>
                                                    <div class="slider-content__btn">
                                                        <a href="shop_full.php" class="btn btn-outline btn-brw-2" data-animation="fadeInUp" data-duration=".3s" data-delay=".6s">Explorar Galeria</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
	    
<?php } ?>