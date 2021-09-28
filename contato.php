<?php include 'components/header-alternative.php' ?>

<div class="session">
    <div class="container">
        <div class="row text-center">
            <div class="col-lg-12">
                <h1 class="font-40 font-medium color-secondary-200">Contato</h1>
                <p class="font-18 color-secondary-100">Transparência, credibilidade e pontualidade em nossos projetos. Ética e respeito em nossas relações.</p>
            </div>
        </div>

        <div class="row align-items-start text-center mt-5">
            <div class="col-lg-4 mb-4 mb-lg-0">
                <h3 class="font-23 font-medium color-secondary-200">Endereço 01</h3>
                <p class="font-16 color-secondary-100">Rua Artur de Azevedo, n° 1217 – 9° andar,<br>Pinheiros, São Paulo/SP</p>
                <a href="#" class="font-14 color-secondary-200">Ver no mapa</a>
            </div>
            <div class="col-lg-4 mb-4 mb-lg-0">
                <h3 class="font-23 font-medium color-secondary-200">Endereço 02</h3>
                <p class="font-16 color-secondary-100">Avenida Presidente Kennedy, n° 1386 – sala 58,<br>Cidade Nova I, Indaiatuba / SP, 13334-170</p>
                <a href="#" class="font-14 color-secondary-200">Ver no mapa</a>
            </div>
            <div class="col-lg-4">
                <h3 class="font-23 font-medium color-secondary-200">Atendimento</h3>
                <p class="font-16 color-secondary-100">Horário de atendimento<br>8h00 às 18h00</p>
            </div>
        </div>

        <div class="row justify-content-center mt-5">
            <div class="col-lg-8">
                <form action="">
                    <div class="row">
                        <div class="col-12 col-lg-6">
                            <input type="text" class="form-control rounded-0 mb-3" placeholder="Nome *" id="nome" aria-label="Nome">
                        </div>
                        <div class="col-12 col-lg-6">
                            <input type="text" class="form-control rounded-0 mb-3" placeholder="Telefone *" id="telefone" aria-label="Telefone">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <input type="email" class="form-control rounded-0 mb-3" placeholder="E-mail *" id="email" aria-label="E-mail">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <textarea class="form-control rounded-0 mb-3" placeholder="Descrição *" id="descricao" style="height: 150px"></textarea>
                        </div>
                    </div>
                    <div class="form-check bg-primary-200 rounded px-5 py-4">
                        <input class="form-check-input" type="checkbox" value="" id="checkAutorizacao">
                        <label class="form-check-label font-14 color-secondary-100" for="checkAutorizacao">Autorizo a coleta de meus dados pessoais mediante neste formulário para que a AB+ entre em contato comigo para sanar minhas dúvidas e responder aos meus questionamentos. Acesse nossos termos de uso e privacidade para saber mais sobre como tratamos seus dados pessoais alinhados à Lei Nº 13.709/2018.</label>
                    </div>
                    <div class="text-center mt-5">
                        <button class="btn bg-secondary-200 color-secondary-100 font-15 rounded-0 py-3 w-50">Enviar</button>
                        <p class="font-15 color-secondary-100 my-4">Ou chame pelo WhatsApp</p>
                        <a href="#" target="_blank" class="btn bg-green color-white font-15 rounded-0 py-3 w-50"><i class="bi bi-whatsapp me-2"></i>Whatsapp</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include 'components/footer.php' ?>