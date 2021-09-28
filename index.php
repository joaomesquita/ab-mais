<?php include 'components/header.php' ?>

<div class="container-fluid bg-primary-200">
    <div class="row">
        <div class="col-lg-1 d-none d-lg-block">
            <div class="side-home d-flex flex-column justify-content-between align-items-center py-5">
                <a href="index.php">
                    <img src="img/logo.svg" alt="Ab Mais Urbanismo" class="img-fluid" width="100">
                </a>
                <div class="d-flex flex-column">
                    <div class="social bg-primary-100 mb-2">
                        <a class="color-primary-200" href="#" target="_blank" ><i class="bi bi-facebook font-18"></i></a>
                    </div>
                    <div class="social bg-primary-100 mb-2">
                        <a class="color-primary-200" href="#" target="_blank" ><i class="bi bi-whatsapp font-18"></i></a>
                    </div>
                    <div class="social bg-primary-100 mb-2">
                        <a class="color-primary-200" href="#" target="_blank" ><i class="bi bi-instagram font-18"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-lg-11 px-0">
            <div class="splide">
                <div class="splide__track">
                    <ul class="splide__list">
                        <li class="splide__slide">
                            <div class="splide__slide__container">
                                <div class="slide-home w-100" style="background: linear-gradient(0deg, rgba(49, 59, 55, 0.5), rgba(49, 59, 55, 0.5)), url(img/bg-home.jpg);">
                                    <div class="container">
                                        <div class="row justify-content-end text-center text-lg-end me-lg-5">
                                            <div class="col-lg-6 headline">
                                                <h1 class="font-60 fw-bold color-secondary-100">Sarandi Jardins</h1>
                                                <p class="font-20 color-secondary-100">Viva em total sintonia entre o glamour e o prestígio de morar em um dos bairros mais nobres de São Paulo. </p>
                                                <a href="empreendimentos.php" target="_blank" class="btn bg-secondary-200 color-white font-15 rounded-0 py-3 px-5">Saiba mais</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="splide__slide">
                            <div class="splide__slide__container">
                                <div class="slide-home w-100" style="background: linear-gradient(0deg, rgba(49, 59, 55, 0.5), rgba(49, 59, 55, 0.5)), url(img/bg-home.jpg);">
                                    <div class="container">
                                        <div class="row justify-content-end text-center text-lg-end me-lg-5">
                                            <div class="col-lg-6 headline">
                                                <h1 class="font-60 fw-bold color-secondary-100">Jardim América</h1>
                                                <p class="font-20 color-secondary-100">Viva em total sintonia entre o glamour e o prestígio de morar em um dos bairros mais nobres de São Paulo. </p>
                                                <a href="empreendimentos.php" target="_blank" class="btn bg-secondary-200 color-white font-15 rounded-0 py-3 px-5">Saiba mais</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="splide__slide">
                            <div class="splide__slide__container">
                                <div class="slide-home w-100" style="background: linear-gradient(0deg, rgba(49, 59, 55, 0.5), rgba(49, 59, 55, 0.5)), url(img/bg-home.jpg);">
                                    <div class="container">
                                        <div class="row justify-content-end text-center text-lg-end me-lg-5">
                                            <div class="col-lg-6 headline">
                                                <h1 class="font-60 fw-bold color-secondary-100">Park Meraki</h1>
                                                <p class="font-20 color-secondary-100">Viva em total sintonia entre o glamour e o prestígio de morar em um dos bairros mais nobres de São Paulo. </p>
                                                <a href="empreendimentos.php" target="_blank" class="btn bg-secondary-200 color-white font-15 rounded-0 py-3 px-5">Saiba mais</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="session bg-primary-200">
    <div class="container">
        <div class="row gx-0">
            <div class="col-lg-6 bg-pattern empreendimento-home" style="background: url(img/pattern-home1.png);">
                <h1 class="font-35 font-medium color-secondary-100">Empreendimentos</h1>
                <p class="font-18 color-secondary-100">Viva em total sintonia entre o glamour e o prestígio de morar em um dos bairros mais nobres de São Paulo. </p>
                <a href="empreendimentos.php" class="btn border-color-secondary-100 color-secondary-100 font-15 rounded-0 px-5 py-3">Saiba mais</a>
            </div>
            <div class="col-lg-6">
                <div class="splide" id="splide-empreendimentos">
                    <div class="splide__track">
                        <ul class="splide__list">
                            <li class="splide__slide">
                                <div class="splide__slide__container">
                                    <div class="card shadow border-0 rounded-0">
                                        <img src="img/empreendimentos-carrousel.jpg" class="card-img rounded-0" alt="Jardim América">
                                        <div class="card-img-overlay d-flex flex-column justify-content-end rounded-0">
                                            <h5 class="font-20 color-white font-medium">Jardim América</h5>
                                            <p class="font-14 color-white mb-0">Terrenos a partir de 200m² · Itirapina - SP</p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="splide__slide">
                                <div class="splide__slide__container">
                                    <div class="card shadow border-0 rounded-0">
                                        <img src="img/empreendimentos-carrousel.jpg" class="card-img rounded-0" alt="Sarandi Jardins">
                                        <div class="card-img-overlay d-flex flex-column justify-content-end rounded-0">
                                            <h5 class="font-20 color-white font-medium">Sarandi Jardins</h5>
                                            <p class="font-14 color-white mb-0">Terrenos a partir de 200m² · Itirapina - SP</p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="splide__slide">
                                <div class="splide__slide__container">
                                    <div class="card shadow border-0 rounded-0">
                                        <img src="img/empreendimentos-carrousel.jpg" class="card-img rounded-0" alt="Park Meraki">
                                        <div class="card-img-overlay d-flex flex-column justify-content-end rounded-0">
                                            <h5 class="font-20 color-white font-medium">Park Meraki</h5>
                                            <p class="font-14 color-white mb-0">Terrenos a partir de 200m² · Itirapina - SP</p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="session bg-primary-200 pt-0">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="font-40 font-medium color-secondary-100">Dicas e <span class="color-secondary-200 font-medium">Notícias</span></h1>
                <p class="font-18 color-secondary-100">Orientamos você em todo o processo e com dicas e notícias.</p>
            </div>
        </div>

        <div class="row gx-0 mt-4">
            <?php for ($i = 0; $i < 4; $i++) { ?>
                <div class="col-lg-3 mb-3">
                    <a href="post.php">
                        <div class="card border-0">
                            <img src="img/post<?php echo $i+1 ?>.jpg" class="card-img rounded-0" alt="Post">
                            <div class="card-img-overlay d-flex flex-column justify-content-end  rounded-0">
                                <p class="font-13 color-secondary-100 mb-1">02 de março de 2020</p>
                                <h5 class="font-18 font-medium color-secondary-100">Smartphones são a grande aposta do mercado imobiliário</h5>
                            </div>
                        </div>
                    </a>
                </div>
            <?php } ?>
        </div>
    </div>
</div>

<div class="session bg-primary-200 pt-0 item">
    <div class="container">
        <div class="row text-center text-lg-start gx-0">
            <div class="col-lg-6">
                <img src="img/bg-contato-home.jpg" alt="Contato" class="img-fluid w-100">
            </div>
            <div class="bg-primary-100 col-lg-6 bg-pattern p-4 p-lg-5" style="background: url(img/pattern-home2.png);">
                <h1 class="font-35 font-medium color-secondary-100">Fale com um Consultor</h1>
                <p class="font-18 color-secondary-100">Fale conosco pelo WhatsApp</p>
                <div class="d-flex flex-column flex-lg-row align-items-center">
                    <a href="#" target="_blank" class="btn border-color-secondary-100 color-secondary-100 font-15 rounded-0 px-5 py-3"><i class="bi bi-whatsapp me-2"></i>Whatsapp</a>
                    <a href="tel:115053-8700" class="color-secondary-100 font-15 text-decoration-none mt-3 mt-lg-0 ms-lg-4"><i class="bi bi-telephone-fill me-2"></i></i>11 5053.8700</a>
                </div>

                <p class="font-18 color-secondary-100 my-3 my-lg-5">ou insira seus dados e ligamos para você:</p>
                <form action="">
                    <div class="row">
                        <div class="col-12">
                            <input type="text" class="form-control rounded-0 mb-3" placeholder="Nome *" id="nome" aria-label="Nome">
                        </div>
                        <div class="col-12">
                            <input type="text" class="form-control rounded-0 mb-3" placeholder="Telefone *" id="telefone" aria-label="Telefone">
                        </div>
                        <div class="col-12">
                            <input type="email" class="form-control rounded-0 mb-3" placeholder="E-mail *" id="email" aria-label="E-mail">
                        </div>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="checkAutorizacao">
                        <label class="form-check-label font-14 color-secondary-100 text-start" for="checkAutorizacao">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque ultrices lacinia risus at volutpat. Suspendisse fringilla lectus at enim</label>
                    </div>
                    <div class="text-center mt-5">
                        <button class="btn bg-secondary-200 color-secondary-100 font-15 rounded-0 py-3 w-100">Enviar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include 'components/footer.php' ?>