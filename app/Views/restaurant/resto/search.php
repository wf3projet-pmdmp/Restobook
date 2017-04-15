<?php $this->layout('layout', ['title' => 'Recherche']) ?>

<?php $this->start('main_content') ?>

    
        <?php if(!empty($errors)): // La variable $errors est envoyé via le controller?>
            <p id="errors" style="color:black"><?=implode('<br>', $errors); ?></p>
        <?php endif; ?>
        
        <?php if($noResult == true): ?>
            <p style="color:blue">Il n'y a pas de resultat pour votre recherche</p>
        <?php endif; ?> 
    
    <div class="col-xs-12">
        <form id="research" class="form-horizontal col-xs-6 col-xs-offset-3" method="get">
            <fieldset>

                <!-- Form Name -->
                <legend>Rechercher un Restaurant ou un Evenement</legend>

                <!--<div id="ajax-loader"></div>-->
                <!-- Champ Recherche -->
                <div class="form-group">
                    <div class="col-xs-12">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-search" aria-hidden="true"></i></span>
                            <input type="search" name="search" id="s" style="color:black">
                        </div>
                    </div>
                </div>
                
                <!-- Bouton d'envoi -->
                <div class="col-xs-12" style="text-align:center">
                    <button type="submit" class="btn btn-primary" id="button">Rechercher</button>
                </div>
            </fieldset>
        </form>
    </div>
    
    
    <ul class="r-p">
        <!-- foreach permettant d'avoir une ligne <tr> par ligne SQL -->
        <?php foreach($rsearch as $lresto): ?>
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
    
    

<?php $this->stop('main_content'); ?>