        <footer class="footer-1 bg-dark light-color">
            <div class="footer-bottom border-gray-light py-3">
                <div class="container">
                    <div class="row">

                        <div class="col-md-6 <?php if (isMobile()) echo 'text-center'; ?>">
                            <div class="copyright-wrap small-text">
                                <p class="mb-0">&copy; <?= date('Y') ?> <?= SITE_NAME ?> (<?= CNPJ_COMPANY ?>) <?php if (!isMobile()) echo '• Todos os direitos reservados'; ?></p>
                                <p class="mb-0"><a class="text-white" target="_blank" href="//abastancacargas.com.br/webmail">Acessar o webmail</a></p>
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

        <a class="linkWhatsApp <?php if (isMobile()) echo 'mobile'; ?>" href="<?= LINK_WHATSAPP ?>" target="_blank"><i class="fab fa-whatsapp"></i></a>
        <div class="scroll-top scroll-to-target text-white" data-target="html">
            <span class="fas fa-hand-point-up"></span>
        </div>

        <script src="<?= asset('js/vendors/jquery-3.5.1.min.js') ?>"></script>
        <script src="<?= asset('js/vendors/popper.min.js') ?>"></script>
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