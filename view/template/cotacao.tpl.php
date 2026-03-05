<?php
require_once VIEW . 'common/head.tpl.php';
require_once VIEW . 'common/navbar.tpl.php';
?>

<div class="main">
    <section class="pt-100 pb-50 hero-bg-shape <?= isMobile() ? 'mt-5' : '' ?>" id="pagina-inicial">
        <div class="container">
            <div class="row align-items-center text-center justify-content-center">
                <div class="col-md-12 col-lg-9">
                    <h1 class="text-white">Solicite sua cotação</h1>
                    <p class="lead text-white" style="line-height:normal;">Transporte com quem entende do assunto: frete fracionado, exclusivo, armazenagem e mudanças.</p>
                    <div class="card">
                        <div class="card-body">
                            <?= includes('components.form-quotation') ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="sobre-nos" class="position-relative overflow-hidden feature-section ptb-100">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-md-12 col-lg-6">
                    <div class="feature-contents section-heading">
                        <h2>Conheça um pouco mais da <?= SITE_NAME ?></h2>
                        <p>Acreditamos que a honestidade, ética e competência garantem a excelência do nosso trabalho e principalmente a satisfação dos nossos clientes.</p>

                        <ul class="check-list-wrap list-two-col py-3">
                            <li>Suporte 24h</li>
                            <li>Atendimento especializado</li>
                            <li>Equipe treinada</li>
                            <li>Carga 100% assegurada</li>
                            <li>Entrega no prazo</li>
                            <li>Transparência no processo</li>
                        </ul>

                        <div class="action-btns mt-4">
                            <a href="#pagina-inicial" class="btn btn-brand-03 mr-3"<?= isMobile() ? 'style="padding: 8px 22.5px;"' : '' ?>>Solicitar cotação</a>
                            <a href="javascript:chamaZap()" class="btn btn-outline-brand-03" <?= isMobile() ? 'style="padding: 8px 22.5px;"' : '' ?>>Chame no WhatsApp <i class="fab fa-whatsapp pl-2"></i></a>
                        </div>
                    </div>
                </div>
                <?php if (!isMobile()) { ?>
                <div class="col-md-6 col-lg-6 img-sobre">
                    <img src="<?= asset('imgs/sobre-nos.jpg') ?>" class="img-fluid" alt="Sobre a <?= SITE_NAME ?>">
                    <div class="item-icon video-promo-content zap">
                        <a href="javascript:chamaZap()" class="text-center video-play-icon m-auto"><span class="fab fa-whatsapp"></span> </a>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </section>
</div>
<?php require_once VIEW . 'common/footer.tpl.php'; ?>