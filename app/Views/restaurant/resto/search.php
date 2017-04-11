<?php $this->layout('layout', ['title' => 'Recherche']) ?>

<?php $this->start('main_content') ?>

    <div id="result">
    
    <?php if($success == true): // La variable $success est envoyé via le controller?>
			<p style="color:green">Bravo, votre article a été envoyé</p>
		<?php endif; ?>
    <?php if(!empty($errors)): // La variable $errors est envoyé via le controller?>
		<p id="errors" style="color:red"><?=implode('<br>', $errors); ?></p>
	<?php endif; ?>
</div>
   
    <div class="col-xs-12">
        <form id="research" action="" class="form-horizontal col-xs-6 col-xs-offset-3" method="post">
            <fieldset>

                <!-- Form Name -->
                <legend>Rechercher un Restaurant</legend>


                <!-- Champ Recherche -->
                <div class="form-group">
                    <div class="col-xs-12">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-search" aria-hidden="true"></i></span>
                            <input type="search" name="search" id="search" style="color:black">
                        </div>
                    </div>
                </div>
                
                <!-- Champ Proximité -->
                <div class="form-group">
                    <div class="col-xs-12">
                        <label for="range">Combien de Km de vous</label>
                        <input type="range" name="range" id="range" value="100" min="0" max="100" step="5">
                    </div>
                </div>
                
                <!-- Bouton d'envoi -->
                <div class="col-xs-12" style="text-align:center">
                    <button type="submit" class="btn btn-primary" id="button">S'inscrire</button>
                </div>
            </fieldset>
        </form>
    </div>
    
    <br>
    <br>
    
    <table class="table table-inverse table-responsive">
        <thead>
            <tr>
                <th>Nom</th>
                <th>Description</th>
                <th>Spécialités</th>
                <th>Adresse</th>
                <th></th>
            </tr>
        </thead>

        <tbody>
            <!-- foreach permettant d'avoir une ligne <tr> par ligne SQL -->
            <?php foreach($rsearch as $rsh): ?>

                <tr>
                    <td><?=$rsh['name']; ?></td>                        
                    <td><?=$rsh['description']; ?></td>
                    <td><?=$rsh['speciality']; ?></td>
                    <td><?=$rsh['address']; ?></td>
                    <td>
                        <!-- view_menu.php?id=6 -->
                        <a href="<?=$this->url('resto_viewresto', ['id' => $rsh['id_resto']]); ?>">Visualiser
                        <?php echo $w_current_route; ?>

                        </a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    
    

<?php $this->stop('main_content'); ?>