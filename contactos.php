<?php include 'components/header.php' ?>
        <!-- Header End -->

        <!-- Breadcrumb area Start -->
        <section class="page-title-area bg-image ptb--80" data-bg-image="assets/img/bg/page_title_bg.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <h1 class="page-title">Contacte Nos</h1>
                        <ul class="breadcrumb">
                            <li><a href="index.php">Outdoor Fine Living</a></li>
                            <li class="current"><span>Contacte Nos</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- Breadcrumb area End -->

        <!-- Main Content Wrapper Start -->
        <main class="main-content-wrapper">
            <div class="inner-page-content pt--75 pt-md--55">
                <!-- Contact Area Start -->
                <section class="contact-area mb--75 mb-md--55">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-4 col-md-5 mb-sm--30">
                                <div class="heading mb--32">
                                    <h2>Entre em contacto</h2>
                                    <hr class="delimeter">
                                </div>
                                <div class="contact-info mb--20">
                                    <!--<p><i class="fa fa-map-marker"></i>221b Baker St, Marylebone <br>London NW1 6XE, UK</p>-->
                                    <p><i class="fa fa-phone"></i> +258 84 395 9290</p>
                                    <p><i class="fa fa-fax"></i> +258 82762 3378</p>
                                    <p><i class="fa fa-clock-o"></i> Seg – Sab : 9:00 – 18:00</p>
                                </div>
                                <div class="social">
                                    <a href="https://web.facebook.com/profile.php?id=61565747026660&_rdc=1&_rdr" class="social__link" target="_blank">
                                        <i class="la la-facebook"></i>
                                    </a>
                                    <a href="https://www.instagram.com/outdoorfineliving/" class="social__link" target="_blank">
                                        <i class="la la-instagram"></i>
                                    </a>
                                    
                                </div>
                            </div>
                            <div class="col-md-7 offset-lg-1">
                                <div class="heading mb--40">
                                    <h2>Contacte Nos</h2>
                                    <hr class="delimeter">
                                </div>
                                <form action="mail.php" method="POST" class="form" id="contact-form">
                                    <input type="email" name="con_email" id="con_email" class="form__input mb--30" placeholder="Email*" required>
                                    <input type="text" name="con_name" id="con_name" class="form__input mb--30" placeholder="Nome*" required>
                                    <textarea class="form__input form__input--textarea mb--30" placeholder="Mensagem" id="con_message" name="con_message" required></textarea>
                                    <button type="submit" class="btn btn-shape-round form__submit">Enviar Pedido</button>
                                    <div class="form__output"></div>
                                </form>

                            </div>
                        </div>
                    </div>
                </section>
                <!-- Contact Area End -->

                <!-- Google Map Area Start -->
                <div class="google-map-area" id="local">
                    <div id="google-map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d114853.9714829039!2d32.52828092278365!3d-25.896235319176835!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1ee69723b666da55%3A0x42497f579a6bb442!2sMaputo!5e0!3m2!1sen!2smz!4v1730271453508!5m2!1sen!2smz" width="1400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
                <!-- Google Map Area End -->

                <!-- Brand Logo Area Start -->
                <div class="brand-logo-area bg-color ptb--10">
                    
                </div>
                <!-- Brand Logo Area End -->
            </div>
        </main>
        <!-- Main Content Wrapper End -->


        <!-- Footer Start-->
<?php include 'components/footer.php' ?>