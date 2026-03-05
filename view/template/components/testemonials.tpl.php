<div id="carouselExample" class="carousel slide carousel-fade testemonial">
    <div class="carousel-inner">
        <div class="carousel-item active" data-bs-interval="5000">
            <div class="row">
                <?php
                $key = 1;
                foreach ($testemonials as $testemonial) {
                    if ($key == (isMobile() ? 2 : 4)) {
                    echo '</div>';
                    echo '</div>';
                    echo '<div class="carousel-item" data-bs-interval="5000">';
                    echo '<div class="row">'; 
                    $key = 1;
                    }
                ?>
                <div class="col-sm-6 col-md-4">
                    <div class="card card-inverse card-info">
                        <div class="card-block">
                            <figure class="profile profile-inline">
                                <img src="<?= url('view/asset/imgs/testemonials/'. $testemonial['photo']) ?>" class="profile-avatar" alt="Avaliação de <?= $testemonial['name'] ?>">
                            </figure>
                            <h4 class="card-title"><?= $testemonial['name'] ?></h4>
                            <div class="card-text"><?= $testemonial['text'] ?></div>
                        </div>
                        <div class="card-footer">
                            <div class="d-flex">
                                <?php for ($i=0; $i < $testemonial['stars']; $i++) { ?>
                                <span class="star"></span>
                                <?php } ?>
                            </div>
                            <a href="<?= $testemonial['link'] ?>" target="_blank" class="btn btn-link float-right btn-sm">Ver</a>
                        </div>
                    </div>
                </div>
                <?php
                    $key++;
                }
                ?>
            </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev" style="left:<?= isMobile() ? '-10px' : '-40px' ?>;padding:0;width:auto;border:none;background:none;">
        <span class="carousel-control-prev-icon" aria-hidden="true" style="background-color:#000; width:30px; height:30px; background-size:50%; border-radius:50%;"></span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next" style="right:<?= isMobile() ? '-10px' : '-40px' ?>;padding:0;width:auto;border:none;background:none;">
        <span class="carousel-control-next-icon" aria-hidden="true" style="background-color:#000; width:30px; height:30px; background-size:50%; border-radius:50%;"></span>
    </button>
</div>