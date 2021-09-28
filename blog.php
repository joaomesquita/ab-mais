<?php include 'components/header-alternative.php' ?>

<div class="session">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="font-40 font-medium color-secondary-200">Notícias</h1>
                <p class="font-18 color-secondary-100">A AB+ Urbanismo é uma evolução da AB+ Incorporações, empresa com mais de 15 anos de atuação no mercado imobiliário.</p>
            </div>
        </div>

        <div class="row mt-5">
            <?php for ($i = 0; $i < 3; $i++) { ?>
                <?php for ($j = 0; $j < 4; $j++) { ?>
                <div class="col-lg-3 mb-3">
                    <a href="post.php">
                        <div class="card border-0">
                            <img src="img/post<?php echo $j+1 ?>.jpg" class="card-img rounded-0" alt="Post">
                            <div class="card-img-overlay d-flex flex-column justify-content-end rounded-0">
                                <p class="font-13 color-secondary-100 mb-1">02 de março de 2020</p>
                                <h5 class="font-18 font-medium color-secondary-100">Smartphones são a grande aposta do mercado imobiliário</h5>
                            </div>
                        </div>
                    </a>
                </div>
                <?php } ?>
            <?php } ?>
        </div>
    </div>
</div>

<?php include 'components/footer.php' ?>