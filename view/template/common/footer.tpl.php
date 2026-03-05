        <footer class="footer-1 bg-dark light-color">
            <div class="footer-bottom border-gray-light py-3">
                <div class="container">
                    <div class="row">

                        <div class="col-md-6 col-lg-7 <?php if (isMobile()) echo 'text-center'; ?>">
                            <div class="copyright-wrap small-text">
                                <p class="mb-0">&copy; <?= date('Y') ?> <?= SITE_NAME ?> (<?= CNPJ_COMPANY ?>) <?php if (!isMobile()) echo '• Todos os direitos reservados'; ?></p>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-5">
                            <div class="terms-policy-wrap text-lg-right text-md-right <?= (isMobile()) ? 'text-center' : 'text-left'; ?>">
                                <p class="mb-0">Feito com <span style="color:#f00;">♥</span> por <a class="evoclick" target="_blank" href="//evoclick.com.br">EvoClick</a>.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

        <div class="scroll-top scroll-to-target text-white" data-target="html">
            <span class="fas fa-hand-point-up"></span>
        </div>

        <!-- <a href="<?= LINK_WHATSAPP ?>" target="_blank" style="position:fixed;z-index:1000;bottom:56px;left:-150px;"> -->
            <!-- <a href="javascript:chamaZap()" style="position:fixed;z-index:1000;bottom:110px;left:-150px;"> -->
            <!-- <img src="<?= asset('imgs/cotacao-rapida-whatsapp.png') ?>" class="btn-whatsapp" title="Cotação rápida via WhatsApp" alt="Cotação rápida via WhatsApp"> -->
        <!-- </a> -->

        <a class="linkWhatsApp" href="<?= LINK_WHATSAPP ?>" target="_blank"><i class="fab fa-whatsapp"></i></a>

        <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">Cotação no WhatsApp</h5>
                        <button type="button" class="close" onclick="fechamodal()" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p class="mb-4">Para que possamos lhe atender melhor e agilizar o atendimento, pedimos que nos informe os campos abaixo antes de abrir o WhatsApp</p>
                        <form id="quotation-zap-form">
                            <div class="row">
                                <div class="col-6 col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="origin" id="origin" placeholder="Origem" required="required">
                                    </div>
                                </div>
                                <div class="col-6 col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="destination" id="destination" placeholder="Destino" required="required">
                                    </div>
                                </div>

                                <div class="col-12 col-md-4">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="note_cost" id="note_cost" placeholder="Valor de nota">
                                    </div>
                                </div>
                                <div class="col-6 col-md-4">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="quantity" id="quantity" placeholder="Quantidade">
                                    </div>
                                </div>
                                <div class="col-6 col-md-4">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="weight" id="weight" placeholder="Peso">
                                    </div>
                                </div>

                                <div class="col-6 col-md-7">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="name" id="name" placeholder="Seu nome" required="required">
                                    </div>
                                </div>
                                <div class="col-6 col-md-5">
                                    <div class="form-group">
                                        <input type="tel" class="form-control" name="whatsapp" id="whatsapp" placeholder="Seu WhatsApp" required="required">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" onclick="fechamodal()">Cancelar</button>
                        <button type="submit" id="btn-quotation-zap-form" form="quotation-zap-form" class="btn btn-primary">Abrir WhatsApp</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="alertaDeGolpe" data-keyboard="false" tabindex="-1" aria-labelledby="alertaDeGolpeLabel" style="display: none;" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" style="max-width: 620px;">
                <div class="modal-content">
                    <div class="modal-body p-0">
                        <img class="w-100" src="<?= asset('imgs/golpe.png') ?>" alt="Estamos sendo vitimas de golpe" title="Estamos sendo vitimas de golpe">
                    </div>
                </div>
            </div>
        </div>

        <script src="<?= asset('js/vendors/jquery-3.5.1.min.js') ?>"></script>
        <script src="<?= asset('js/vendors/popper.min.js') ?>"></script>
        <!-- <script src="<?= asset('js/vendors/bootstrap.min.js') ?>"></script> -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
        <script src="<?= asset('js/vendors/jquery.easing.min.js') ?>"></script>
        <script src="<?= asset('js/vendors/owl.carousel.min.js') ?>"></script>
        <script src="<?= asset('js/vendors/countdown.min.js') ?>"></script>
        <script src="<?= asset('js/vendors/jquery.waypoints.min.js') ?>"></script>
        <script src="<?= asset('js/vendors/jquery.rcounterup.js') ?>"></script>
        <script src="<?= asset('js/vendors/magnific-popup.min.js') ?>"></script>
        <script src="<?= asset('js/vendors/validator.min.js') ?>"></script>
        <script src="<?= asset('js/app.js?v=' . md5(microtime())) ?>"></script>
        <script>
            $(document).ready(function() {
                setInterval(() => {
                    var filled = $('#client_name').val() !== '' && $('#client_phone').val() !== '' && $('#client_email').val() !== '' &&
                        $('#origin').val() !== '' && $('#destination').val() !== '' && $('#description').val() !== '';

                    if (filled) {
                        $('#submit-form-quotation').removeAttr('disabled');
                    } else {
                        $('#submit-form-quotation').attr('disabled', 'disabled');
                    }
                }, 1000);

                setInterval(() => {
                    var filled = $('#quotation-zap-form input[name=name]').val() !== '' &&
                        $('#quotation-zap-form input[name=whatsapp]').val() !== '' &&
                        $('#quotation-zap-form input[name=origin]').val() !== '' &&
                        $('#quotation-zap-form input[name=destination]').val() !== '';

                    if (filled) {
                        $('button[form=quotation-zap-form]').removeAttr('disabled');
                    } else {
                        $('button[form=quotation-zap-form]').attr('disabled', 'disabled');
                    }
                }, 1000);

                // setTimeout(() => {
                //     $('#alertaDeGolpe').modal('show');
                // }, 1500);
            });

            function chamaZap() {
                $('#staticBackdrop').modal('show');
            }

            function fechamodal() {
                $('#staticBackdrop').modal('hide');
            }

            $('#quotation-zap-form').submit(function(e) {
                e.preventDefault();
                var name = $('#quotation-zap-form input[name=name]').val();
                var origin = $('#quotation-zap-form input[name=origin]').val();
                var destination = $('#quotation-zap-form input[name=destination]').val();
                var note_cost = $('#quotation-zap-form input[name=note_cost]').val();
                var quantity = $('#quotation-zap-form input[name=quantity]').val();
                var weight = $('#quotation-zap-form input[name=weight]').val();
                var whatsapp = $('#quotation-zap-form input[name=whatsapp]').val();

                var text = `Olá <?= SITE_NAME ?>, me chamo *${name}* desejo uma cotação de frete!%0A%0A`;
                text += `*Meu WhatsApp:* ${whatsapp}%0A`;
                text += `*Origem:* ${origin}%0A`;
                text += `*Destino:* ${destination}`;


                if (note_cost !== '') text += `%0A*Valor de nota:* ${note_cost}`;
                if (quantity !== '') text += `%0A*Quantidade:* ${quantity}`;
                if (weight !== '') text += `%0A*Peso:* ${weight}`;

                $.get('whatsapp-quotations.php', {
                    name: '',
                    text
                });

                var whats_link = '<?= str_replace(['(', ')', ' ', '-'], '', WHATSAPP) ?>';
                window.open(`https://api.whatsapp.com/send?phone=+55${whats_link}&text=${text}`, 'blank');
            });
        </script>
        </body>

        </html>