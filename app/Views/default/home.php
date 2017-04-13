<?php $this->layout('layouthome', ['title' => 'Accueil']) ?>

<?php $this->start('main_content') ?>

    <section class="col-xs-12 r-p">
        <div class="container view">
            <div class="col-xs-12">
                <div class="col-sm-4 fiche">
                    <div class="resto">
                        <p>Nom du restaurant</p>
                        <p><img src="assets/img/minia.jpg" class="img-responsive" alt="restaurant"/></p>
                        <p>Ville</p>
                        <p>Description</p>
                        <br>
                        <a href="" class="more">Voir la fiche >></a>
                    </div>
                </div>
                <div class="col-sm-4 fiche">
                    <div class="resto">
                        <p>Nom du restaurant</p>
                        <img src="assets/img/minia.jpg" class="img-responsive" alt="restaurant"/>
                        <p>Ville</p>
                        <p>Description</p>
                        <br>
                        <a href="" class="more">Voir la fiche >></a>
                    </div>
                </div>
                <div class="col-sm-4 fiche">
                    <div class="resto">
                        <p>Nom du restaurant</p>
                        <img src="assets/img/minia.jpg" class="img-responsive" alt="restaurant"/>
                        <p>Ville</p>
                        <p>Description</p>
                        <br>
                        <a href="" class="more">Voir la fiche >></a>
                    </div>
                </div>
            </div>

            <div class="col-xs-12">
                <div class="col-sm-4 fiche">
                    <div class="resto">
                        <p>Nom du restaurant</p>
                        <img src="assets/img/minia.jpg" class="img-responsive" alt="restaurant"/>
                        <p>Ville</p>
                        <p>Description</p>
                        <br>
                        <a href="" class="more">Voir la fiche >></a>
                    </div>
                </div>
                <div class="col-sm-4 fiche">
                    <div class="resto">
                        <p>Nom du restaurant</p>
                        <img src="assets/img/minia.jpg" class="img-responsive" alt="restaurant"/>
                        <p>Ville</p>
                        <p>Description</p>
                        <br>
                        <a href="" class="more">Voir la fiche >></a>
                    </div>
                </div>
                <div class="col-sm-4 fiche">
                    <div class="resto">
                        <p>Nom du restaurant</p>
                        <img src="assets/img/minia.jpg" class="img-responsive" alt="restaurant"/>
                        <p>Ville</p>
                        <p>Description</p>
                        <br>
                        <a href="" class="more">Voir la fiche >></a>
                    </div>
                </div>
            </div>
            <p class="col-xs-12 button">
                <a href="<?= $this->url('resto_listresto') ?>"><button type="button" class="btn allresto">Voir tous les restaurants</button></a>
            </p>
        </div>

    </section>
    
<?php $this->stop('main_content') ?>
