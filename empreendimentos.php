<?php include 'components/header-alternative.php' ?>

<div class="session">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="font-40 font-medium color-secondary-200">Empreendimentos</h1>
                <p class="font-18 color-secondary-100">A AB+ Urbanismo é uma evolução da AB+ Incorporações, empresa com mais de 15 anos de atuação no mercado imobiliário.</p>
            </div>
        </div>

        <div class="row mt-5">
            <?php for ($i = 0; $i < 3; $i++) { ?>
                <?php for ($j = 0; $j < 4; $j++) { ?>
                <div class="col-lg-3 mb-5">
                    <div class="card-empreendimento bg-secondary-100 p-4">
                        <img src="img/empreendimento<?php echo $j+1 ?>.png" alt="Empreendimento <?php echo $j+1 ?>" class="img-fluid mb-2">
                        <div class="text-center">
                            <h3 class="font-23 font-medium color-primary-200">Empreendimento <?php echo $j+1 ?></h3>
                            <p class="font-16 color-primary-200">Terrenos a partir de 200m². Itirapina - SP</p>
                            <a href="empreendimentos-interna.php" class="btn border-color-secondary color-secondary-200 font-15 rounded-0 px-5 py-3">Saiba mais</a>
                        </div>
                    </div>
                </div>
                <?php } ?>
            <?php } ?>
        </div>
    </div>
</div>

<?php include 'components/footer.php' ?>