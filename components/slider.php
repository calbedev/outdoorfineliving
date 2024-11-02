<?php
        include 'db.php';
        $sliders = $conn->query ("SELECT slider.id_slider, slider.hashtag_slider, slider.imagem_slider, slider.texto_slider, slider.texto_bold_slider FROM slider");	

?>        
<section class="homepage-slider mb--75 mb-md--55">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="element-carousel slick-right-bottom"
                            data-slick-options='{
                                "slidesToShow": 1, 
                                "arrows": true,
                                "prevArrow": {"buttonClass": "slick-btn slick-prev", "iconClass": "la la-arrow-left" },
                                "nextArrow": {"buttonClass": "slick-btn slick-next", "iconClass": "la la-arrow-right" }
                            }' 
                            data-slick-responsive='[{"breakpoint": 768, "settings": {"arrows": false}}]'>
                                <?php while ($slider = $sliders->fetch_assoc()) { ?>
                                <div class="item">
                                    <div class="single-slide d-flex align-items-center bg-color" data-bg-color="#B6A593">
                                        <div class="row align-items-center g-0 w-100">
                                            <div class="col-xl-7 col-md-6 mb-sm--50">
                                                <figure data-animation="fadeInUp" data-duration=".3s" data-delay=".3s" class="plr--15">
                                                    <img src="<?php echo $slider['imagem_slider'] ?>" alt="Slider <?php echo $slider['id_slider'] ?> image" class="mx-auto">
                                                </figure>
                                            </div>
                                            <div class="col-md-6 col-lg-5 offset-lg-1 offset-xl-0">
                                                <div class="slider-content">
                                                    <div class="slider-content__text mb--40 mb-md--30">
                                                        <p class="mb--15" data-animation="fadeInUp" data-duration=".3s" data-delay=".3s">#<?php echo $slider['hashtag_slider'] ?></p>
                                                        <p class="mb--20" data-animation="fadeInUp" data-duration=".3s" data-delay=".3s"><?php echo $slider['texto_slider'] ?></p>
                                                        <h1 class="heading__primary lh-pt7" data-animation="fadeInUp" data-duration=".3s" data-delay=".3s"><?php echo $slider['texto_bold_slider'] ?></h1>
                                                    </div>
                                                    <div class="slider-content__btn">
                                                        <a href="catalogo.php" class="btn btn-outline btn-brw-2" data-animation="fadeInUp" data-duration=".3s" data-delay=".6s">Explorar Galeria</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
</section>