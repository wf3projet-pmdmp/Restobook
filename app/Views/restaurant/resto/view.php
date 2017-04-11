<?php $this->layout('layout', ['title' => 'Accueil']) ?>

<?php $this->start('main_content') ?>

    <?php if(!empty($viewresto)): ?>

        <h1>Détails d'un Restaurant</h1>

        <h2>Nom: <?php echo $viewresto['name']; ?></h2>

        <p>Description :<br><?php echo nl2br($viewresto['description']); ?></p>

        <p>Adresse : <?php echo $viewresto['address']; ?></p>

        <img src="<?php echo $this->assetUrl('/upload/'.$viewresto['picture_header']);?>" alt="<?php echo $viewsresto['name'];?>">
	
    <?php endif; ?>

<?php $this->stop('main_content') ?>