<?php $this->layout('layout', ['title' => 'Accueil']) ?>

<?php $this->start('main_content') ?>

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
            <?php foreach($listresto as $lresto): ?>

                <tr>
                    <td><?=$lresto['name']; ?></td>                        
                    <td><?=$lresto['description']; ?></td>
                    <td><?=$lresto['speciality']; ?></td>
                    <td><?=$lresto['address']; ?></td>
                    <td>
                        <!-- view_menu.php?id=6 -->
                        <a href="<?=$this->url('resto_viewresto', ['id' => $lresto['id_resto']]); ?>">Visualiser
                        <!--<?php echo $w_current_route; ?>-->

                        </a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

<?php $this->stop('main_content') ?>