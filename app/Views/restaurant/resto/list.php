<?php $this->layout('layout', ['title' => 'Accueil']) ?>

<?php $this->start('main_content') ?>

<ul class="r-p">
        <!-- foreach permettant d'avoir une ligne <tr> par ligne SQL -->
        <?php foreach($listresto as $lresto): ?>
            <li class="col-xs-12 r-m viewresto">
                <div class="col-xs-3">
                    <img src="<?= $this->assetUrl($lresto['picture_header']);?>" class="img-responsive" alt="cmt">
                </div>

                <div class="col-xs-3">
                    <h3><?=$lresto['name']; ?></h3>
                    <p><?=$lresto['description']; ?></p>
                </div>   

                <div class="col-xs-3">
                    <p><?=$lresto['speciality']; ?></p>
                    <p><?=$lresto['city']; ?></p>
                </div>

                <div class="col-xs-3">
                    <!-- view_menu.php?id=6 -->
                    <a href="<?=$this->url('resto_viewresto', ['id' => $lresto['id_resto']]); ?>">Visualiser</a>
                </div>
            </li>
        <?php endforeach; ?>
</ul>

<?php $this->stop('main_content') ?>