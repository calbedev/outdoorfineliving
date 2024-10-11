
<?php 	Include 'comp/header.php' ?>
        <!-- Main Content Wrapper Start -->
        <main class="main-content-wrapper">
            <!-- Slider area Start -->
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
                                
                            <?php 	Include 'comp/slider.php' ?>   
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Slider area End -->
            
            <!-- Top Sale Area Start -->
            <section class="top-sale-area mb--75 mb-md--55">
                <div class="container">
                    <div class="row mb--35 mb-md--23">
                        <div class="col-12 text-center">
                        <h3 class="heading__primary lh-pt7">EM DESTAQUE</h3>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-13">
                            <div class="element-carousel"
                                data-slick-options='{
                                    "spaceBetween": 30,
                                    "slidesToShow": 3
                                }'
                                data-slick-responsive='[
                                    {"breakpoint": 768, "settings": {"slidesToShow": 2}},
                                    {"breakpoint": 480, "settings": {"slidesToShow": 1}}
                                ]'>
                                <?php include 'comp/destaque.php' ?>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Top Sale Area End -->

            <!-- Feature Product Area Start -->
            <?php include 'comp/unico.php' ?>
            <!-- Feature Product Area End -->

            <!-- Product Tab Area Start -->
            <section class="product-tab-area mb--30 mb-md--10">
                <div class="container">
                    <div class="row mb--28 mb-md--18 mb-sm--33">
                        <div class="col-md-3 text-md-start text-center">
                            <h2>Nosso Catálogo</h2>
                        </div>
                        <div class="col-md-9">
                            <div class="tab-style-1">
                                <div class="nav nav-tabs justify-content-md-end justify-content-center" id="product-tab" role="tablist">
                                    <button type="button" class="nav-item nav-link active" id="new-all-tab" data-bs-toggle="tab" data-bs-target="#new-all" role="tab" aria-controls="new-all" aria-selected="true">
                                        <span class="nav-text">Sofás</span>
                                    </button>
                                    <button type="button" class="nav-item nav-link" id="new-wooden-tab" data-bs-toggle="tab" data-bs-target="#new-wooden" role="tab" aria-controls="new-wooden" aria-selected="false">
                                        <span class="nav-text">Mesas & Cadeiras</span>
                                    </button>
                                    <button type="button" class="nav-item nav-link" id="new-furnished-tab" data-bs-toggle="tab" data-bs-target="#new-furnished" role="tab" aria-controls="new-furnished" aria-selected="false">
                                        <span class="nav-text">Guarda Sol</span>
                                    </button>
                                    <button type="button" class="nav-item nav-link" id="new-table-tab" data-bs-toggle="tab" data-bs-target="#new-table" role="tab" aria-controls="new-table" aria-selected="false">
                                        <span class="nav-text">Artigos de Decoração</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="tab-content" id="product-tab-content">
                                <!-- Sofas -->
                                <div class="tab-pane fade show active" id="new-all" role="tabpanel" aria-labelledby="new-all-tab">
                                    <div class="row">
                                        <?php  
                                            $cathtml = 1;
                                            include 'comp/categoria.php';
                                        ?>
                                    </div>
                                </div>
                                <!-- Mesas  & Cadeiras -->
                                <div class="tab-pane fade" id="new-wooden" role="tabpanel" aria-labelledby="new-wooden-tab">
                                <div class="row">
                                <?php  
                                        $cathtml = 2;
                                        include 'comp/categoria.php';
                                    ?>
                                </div>
                                </div>
                                <!-- Guarda Sol -->
                                <div class="tab-pane fade" id="new-furnished" role="tabpanel" aria-labelledby="new-furnished-tab">
                                <div class="row">
                                <?php  
                                        $cathtml = 3;
                                        include 'comp/categoria.php';
                                    ?>
                                </div>
                                </div>
                                <!-- Artigos de decoração -->
                                <div class="tab-pane fade" id="new-table" role="tabpanel" aria-labelledby="new-table-tab">
                                <div class="row">
                                <?php  
                                        $cathtml = 4;
                                        include 'comp/categoria.php';
                                    ?>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Product Tab Area End -->

            <!-- Brand Logo Area Start -->
            <div class="brand-logo-area mb--80 mb-md--60">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-12">
                            <div class="brand-log-wrapper bg-color ptb--75" data-bg-color="#94947e">
                                <div class="element-carousel"
                                data-slick-options='{
                                    "slidesToShow": 5,
                                    "autoplay": true
                                }'
                                data-slick-responsive='[
                                    {"breakpoint": 1200, "settings": {"slidesToShow": 4}},
                                    {"breakpoint": 992, "settings": {"slidesToShow": 3}},
                                    {"breakpoint": 768, "settings": {"slidesToShow": 2}},
                                    {"breakpoint": 480, "settings": {"slidesToShow": 1}}
                                ]'>
                                    <div class="item">
                                        <figure>
                                            <img src="uploads/brand-01.png" alt="Brand" class="mx-auto">
                                        </figure>
                                    </div>
                                    <div class="item">
                                        <figure>
                                            <img src="uploads/brand-02.png" alt="Brand" class="mx-auto">
                                        </figure>
                                    </div>
                                    <div class="item">
                                        <figure>
                                            <img src="uploads/brand-03.png" alt="Brand" class="mx-auto">
                                        </figure>
                                    </div>
                                    <div class="item">
                                        <figure>
                                            <img src="uploads/brand-04.png" alt="Brand" class="mx-auto">
                                        </figure>
                                    </div>
                                    <div class="item">
                                        <figure>
                                            <img src="uploads/brand-05.png" alt="Brand" class="mx-auto">
                                        </figure>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Brand Logo Area End -->

            <!-- Best Sale Product Area Start -->
            <section class="best-sale-product-area mb--75 mb-md--55">
                <?php include 'comp/banner.php' ?>
            </section>
            <!-- Best Sale Product Area End -->
             <!-- Contact Area Start -->
            <section class="contact-area mb--75 mb-md--55">
                    <div class="container" id="contact">
                        <div class="row">
                            <div class="col-lg-4 col-md-5 mb-sm--30">
                                <div class="heading mb--32">
                                    <h2>Localização</h2>
                                    <hr class="delimeter">
                                </div>
                                <div class="contact-info mb--20">
                                    <p><i class="fa fa-map-marker"></i>xxxxxxxxxx, xxxxxxxxxx <br>Maputo, Mozambique</p>
                                    <p><i class="fa fa-phone"></i> +258 xx xx xx xxx</p>
                                    <p><i class="fa fa-fax"></i> +258 xx xx xx xxx</p>
                                    <p><i class="fa fa-clock-o"></i> Seg – Sab : 9:00 – 18:00</p>
                                </div>
                                <div class="social">
                                    <a href="https://www.facebook.com/" class="social__link">
                                        <i class="la la-facebook"></i>
                                    </a>
                                    <a href="https://www.twitter.com/" class="social__link">
                                        <i class="la la-twitter"></i>
                                    </a>
                                    <a href="https://www.plus.google.com/" class="social__link">
                                        <i class="la la-instagram"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-7 offset-lg-1">
                                <div class="heading mb--40">
                                    <h2>Contacte Nos</h2>
                                    <hr class="delimeter">
                                </div>
                                <form action="" class="form" id="contact-form">
                                    <input type="email" name="con_email" id="con_email" class="form__input mb--30" placeholder="Email*">
                                    <input type="text" name="con_name" id="con_name" class="form__input mb--30" placeholder="Nome*">
                                    <textarea class="form__input form__input--textarea mb--30" placeholder="Menssagem" id="con_message" name="con_message"></textarea>
                                    <button type="submit" class="btn btn-shape-round form__submit">Enviar Mensagem</button>
                                    <div class="form__output"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                </section>
            <!-- Blog Area Start -->
            <!-- Blog Area End -->
        </main>
        <!-- Main Content Wrapper End -->

<?php 	Include 'comp/footer.php' ?>