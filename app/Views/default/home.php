<?php $this->layout('layouthome', ['title' => 'Accueil']) ?>

<?php $this->start('main_content') ?>

   <section class="col-xs-12 r-p">
        <div class="container view">
            <div class="col-xs-12">
                <?php foreach($randpicture as $random): ?>
                    <div class="col-sm-4 fiche">
                        <div class="resto">
                            <p><?=$random['name']; ?></p>
                            <p><img src="<?=$this->assetUrl($random['picture_header']); ?>" class="img-responsive" alt="restaurant"/></p>
                            <p><?=$random['city']; ?></p>
                            <p><?=$random['description']; ?></p>
                            <br>
                            <a href="<?= $this->url('resto_viewresto',['id'=>$random['id_resto']]); ?>" class="more">Voir la fiche >></a>
                        </div>
                    </div>
                    
                <?php endforeach; ?>
            </div>
            <p class="col-xs-12 button">
                <a href="<?= $this->url('resto_listresto') ?>"><button type="button" class="btn allresto">Voir tous les restaurants</button></a>
            </p>
        </div>

   </section>
    
<?php $this->stop('main_content') ?>
