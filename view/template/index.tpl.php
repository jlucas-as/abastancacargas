<?php
require_once VIEW . 'common/head.tpl.php';
require_once VIEW . 'common/navbar.tpl.php';
?>

<div class="main">
    <section id="pagina-inicial" class="pt-100 pb-50 hero-bg-shape <?= isMobile() ? 'mt-5' : '' ?>">
        <style>
            .hero-bg-shape:before { background-image: url('<?= img('hero-bg.png') ?>'); }
        </style>
        <div class="container">
            <div class="row align-items-center justify-content-lg-between justify-content-md-center justify-content-sm-center">
                <div class="col-md-12 col-lg-6">
                    <div class="hero-slider-content text-white pb-5" <?php if (isMobile()) echo 'style="margin-top:-20px;"'; ?>>
                        <h1 class="text-white">Eficiência e Qualidade</h1>
                        <p class="lead">Transporte com quem entende do assunto: frete fracionado, exclusivo, armazenagem e mudanças.</p>
                        <div class="action-btns mt-3">
                            <a href="<?= LINK_WHATSAPP ?>" class="btn btn-brand-03 btn-rounded mr-3">Chame no WhatsApp <i class="fab fa-whatsapp pl-2"></i></a>
                            <?php if (isMobile()) echo '<br>'; ?>
                            <a href="<?= LINK_EMAIL ?>" target="_blank" class="btn btn-white btn-circle btn-icon"><i class="fas fa-paper-plane"></i> </a> <span class="pl-2">Mande um e-mail</span>
                        </div>
                    </div>
                </div>

                <?php if (!isMobile()) { ?>
                <div class="col-md-7 col-sm-9 col-lg-5">
                    <div class="sign-up-form-wrap position-relative z-index shadow-lg rounded p-3 mt-5 w-100 gray-light-bg">
                        <div class="sign-up-form-header text-center mb-4">
                            <h4 class="mb-1">Faça uma cotação</h4>
                        </div>
                        <div class="message-box d-none">
                            <div class="alert alert-danger"></div>
                        </div>
                        <?= includes('components.form-quotation') ?>
                    </div>
                </div>
                <?php } ?>
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
                            <a href="<?= LINK_WHATSAPP ?>" class="btn btn-outline-brand-03" <?= isMobile() ? 'style="padding: 8px 22.5px;"' : '' ?>>Chame no WhatsApp <i class="fab fa-whatsapp pl-2"></i></a>
                        </div>
                    </div>
                </div>
                <?php if (!isMobile()) { ?>
                <div class="col-md-6 col-lg-6 img-sobre">
                    <img src="<?= img('sobre-nos.jpg') ?>" class="img-fluid" alt="Sobre a <?= SITE_NAME ?>">
                    <div class="item-icon video-promo-content zap">
                        <a href="https://www.instagram.com/abastancacargas" class="text-center video-play-icon m-auto"><span class="fab fa-instagram"></span> </a>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </section>

    <section id="servicos" class="position-relative overflow-hidden ptb-100">
        <div class="mask-65" <?= isMobile() ? 'style="bottom:5%;"' : '' ?>></div>
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-md-9 col-lg-8">
                    <div class="section-heading text-center text-white">
                        <h2 class="text-white">Nossos serviços</h2>
                        <h3 class="text-white" style="font-size:1.7rem;">Transportamos sua carga para todo o Brasil</h3>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-sm-6 col-md-6 col-lg-4 col-6">
                    <div class="bg-white p-2 rounded text-center shadow mt-lg-0 mb-4">
                        <img class="w-100" src="<?= img('transporte-fracionado.png') ?>" />
                        <h5 class="mb-2 mt-2">Transporte fracionado</h5>
                        <p class="mb-2">Envie pequenas cargas pagando menos. Compartilhe espaço no caminhão e conte com uma logística rápida, segura e econômica para sua empresa.</p>
                        <a href="<?= LINK_WHATSAPP ?>" class="btn btn-brand-03 p-2"><span class="fab fa-whatsapp"></span> Saiba mais</a>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-4 col-6">
                    <div class="bg-white p-2 rounded text-center shadow mt-lg-0 mb-4">
                        <img class="w-100" src="<?= img('transporte-exclusivo.png') ?>" />
                        <h5 class="mb-2 mt-2">Transporte exclusivo</h5>
                        <p class="mb-2">Sua carga viaja sozinha, com mais rapidez e segurança. O caminhão é dedicado à sua entrega, garantindo prazos mais curtos e controle total.</p>
                        <a href="<?= LINK_WHATSAPP ?>" class="btn btn-brand-03 p-2"><span class="fab fa-whatsapp"></span> Saiba mais</a>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-4 col-6">
                    <div class="bg-white p-2 rounded text-center shadow mt-lg-0 mb-4">
                        <img class="w-100" src="<?= img('transporte-de-mudancas.png') ?>" />
                        <h5 class="mb-2 mt-2">Transporte de mudanças</h5>
                        <p class="mb-2">Mudança residencial ou comercial com cuidado e segurança. Transportamos seus móveis e pertences com equipe preparada e total proteção.</p>
                        <a href="<?= LINK_WHATSAPP ?>" class="btn btn-brand-03 p-2"><span class="fab fa-whatsapp"></span> Saiba mais</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="numeros" class="pt-5">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-md-9 col-lg-8">
                    <div class="section-heading text-center">
                        <h2 class="text-dark">Nossos números</h2>
                        <p class="text-dark">Transportamos sua carga para todo o Brasil, veja nossos números, isso é fruto de trabalho duro e comprometimento com nossos clientes e suas cargas.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 pb-2">
                    <div class="card">
                        <div class="card-body">
                            <div><span class="fas fa-map-marked-alt rounded-circle"></span></div>
                            <div>
                                <h3>+1530</h3>
                                <h4>Cidades atendidas</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 pb-2">
                    <div class="card">
                        <div class="card-body">
                            <div><span class="fas fa-truck-loading rounded-circle"></span></div>
                            <div>
                                <h3>+159</h3>
                                <h4>Fretes todo mês</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 pb-5">
                    <div class="card">
                        <div class="card-body">
                            <div><span class="fas fa-user-check rounded-circle"></span></div>
                            <div>
                                <h3>+353</h3>
                                <h4>Clientes satisfeitos</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="contato" class="contact-us-section pt-5 <?= isMobile() ? 'mb-2' : 'pb-5 mb-5' ?>">
        <div class="container">            
            <div class="row justify-content-around">
                <div class="col-md-9 col-lg-8">
                    <div class="section-heading text-center mb-5">
                        <h2>Entre em contato</h2>
                        <p>Chame a qualquer momento, nos esforçamos para responder a todos o mais rápido possível.</p>
                    </div>
                </div>
                
                <div class="col-md-12 col-lg-5 mb-5 mb-md-5 mb-sm-5 mb-lg-0">
                    <div class="contact-us-form gray-light-bg rounded p-4">
                        <h4>Deseja falar com a gente?</h4>
                        <form action="<?= ROOT ?>email/enviar" method="POST" class="contact-us-form">
                            <input type="hidden" name="func" value="0" />
                            <input type="hidden" name="location" value="#contato" />

                            <div class="form-row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="name" placeholder="Digite seu nome" required="required">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <input type="email" class="form-control" name="email" placeholder="Digite seu e-mail" required="required">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <input type="tel" class="form-control" name="phone" placeholder="Digite seu telefone">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <textarea name="message" id="message" class="form-control" rows="7" cols="25" placeholder="Sua mensagem"></textarea>
                                    </div>
                                </div>
                                <div class="col-sm-12 mt-3">
                                    <button type="submit" class="btn btn-brand-03 disabled" id="btnContactUs" style="pointer-events:all; cursor:pointer;">Enviar mensagem</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-12 col-lg-6">
                    <div class="contact-us-content">
                        <ul class="contact-info-list mb-0">
                            <li class="d-flex pb-2">
                                <div class="contact-icon mr-3">
                                    <span class="fas fa-location-arrow rounded-circle p-3"></span>
                                </div>
                                <div class="contact-text">
                                    <h5 class="mb-1">Nossa localização</h5>
                                    <p><a href="https://maps.app.goo.gl/5vcRSSwMyg9rbRtk7" target="_blank">R. Francisco Leopoldo e Silva, 68 - Jardim Andaraí <br> São Paulo - SP, 02166-030</a></p>
                                </div>
                            </li>
                            <li class="d-flex pb-2">
                                <div class="contact-icon mr-3">
                                    <span class="fas fa-envelope rounded-circle p-3"></span>
                                </div>
                                <div class="contact-text">
                                    <h5 class="mb-1">E-mail</h5>
                                    <p><a target="_blank" href="<?= LINK_EMAIL ?>"><?= EMAIL ?></a></p>
                                </div>
                            </li>
                            <li class="d-flex">
                                <div class="contact-icon mr-3">
                                    <span class="fab fa-whatsapp rounded-circle p-3"></span>
                                </div>
                                <div class="contact-text">
                                    <h5 class="mb-1">Telefones</h5>
                                    <p>
                                        <a target="_blank" href="<?= LINK_WHATSAPP ?>"><i class="fab fa-whatsapp"></i> <?= WHATSAPP ?></a> |
                                        <a target="_blank" href="<?= LINK_WHATSAPP2 ?>"><i class="fab fa-whatsapp"></i> <?= WHATSAPP2 ?></a>
                                    </p>
                                </div>
                            </li>
                        </ul>
                        <hr class="mt-2 mb-3">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3658.2045857364024!2d-46.58492100000001!3d-23.525143!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce5f2f3ff051ad%3A0x5a0549137b8ba5c0!2sR.%20Francisco%20Leopoldo%20e%20Silva%2C%2068%20-%20Vila%20Maria%2C%20S%C3%A3o%20Paulo%20-%20SP%2C%2002166-030!5e0!3m2!1spt-BR!2sbr!4v1772734790499!5m2!1spt-BR!2sbr" width="100%" height="175" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<?php require_once VIEW . 'common/footer.tpl.php'; ?>
