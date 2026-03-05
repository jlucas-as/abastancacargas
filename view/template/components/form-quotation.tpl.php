<form class="login-signup-form get-quote-form-wrap" action="<?= ROOT ?>email/enviar" method="post">
    <input type="hidden" name="func" value="1" />
    <input type="hidden" name="location" value="#pagina-inicial" />
    <input type="hidden" name="argv" id="argv" value="<?= ADS ?>">
    
    <div class="row">
        <div class="col-6">
            <div class="form-group">
                <input type="text" class="form-control" name="origin" id="origin" placeholder="Origem da carga" required="required">
            </div>
        </div>
        <div class="col-6">
            <div class="form-group">
                <input type="text" class="form-control" name="destination" id="destination" placeholder="Destino da carga" required="required">
            </div>
        </div>

        <div class="col-4">
            <div class="form-group">
                <input type="text" class="form-control" name="note_cost" id="note_cost" placeholder="Valor de nota">
            </div>
        </div>
        <div class="col-4">
            <div class="form-group">
                <input type="text" class="form-control" name="quantity" id="quantity" placeholder="Quantidade">
            </div>
        </div>
        <div class="col-4">
            <div class="form-group">
                <input type="text" class="form-control" name="weight" id="weight" placeholder="Peso">
            </div>
        </div>

        <div class="col-12">
            <div class="form-group">
                <textarea class="form-control" name="message" id="message" placeholder="Dados da carga" required="required"></textarea>
            </div>
        </div>

        <div class="col-6">
            <div class="form-group">
                <label>Seu nome</label>
                <input type="text" class="form-control" name="name" id="name" placeholder="Seu nome" required="required">
            </div>
        </div>
        <div class="col-6">
            <div class="form-group">
                <label for="phone">WhatsApp</label>
                <input type="text" class="form-control" name="phone" id="phone" placeholder="(xx) xxxx-xxxx" required="required">
            </div>
        </div>
        <div class="col-12">
            <div class="form-group">
                <label for="phone">Seu e-mail</label>
                <input type="email" class="form-control" name="email" id="email" placeholder="Seu e-mail" required="">
            </div>
            <button type="submit" id="submit-form-quotation" class="btn btn-block btn-brand-03 mt-4 mb-3">Solicitar cotação</button>
        </div>
    </div>
</form>