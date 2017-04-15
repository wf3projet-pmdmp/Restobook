<?php $this->layout('layout', ['title' => 'Accueil']) ?>

<?php $this->start('main_content') ?>

    <?php if(!empty($viewresto)): ?>
        <button type="submit" class="btn btn-primary valid" id="back" onclick="goBack()" style="float:right;">Previous Page</button>

        <h1>Détails du Restaurant</h1>

        <img src="<?php echo $this->assetUrl('/upload/'.$viewresto['picture_header']);?>" alt="<?php echo $viewresto['name'];?>">
        
        <h2>Nom: <?php echo $viewresto['name']; ?></h2>
        
        <p>Spécialités : <?php echo $viewresto['speciality']; ?></p>
        
        <p><strong>Horaires :</strong><?php echo $viewresto['schedule']; ?></p>
        
        <h5>Email : <?php echo $viewresto['email']; ?></h5>
        
        <p><strong>Coordonnées et localisation :</strong><br><?php echo $viewresto['address']; ?><br><?php echo $viewresto['phone']; ?></p>
        
        <p><strong>Description :</strong><br><?php echo nl2br($viewresto['description']); ?></p>

	
    <?php endif; ?>

<?php $this->stop('main_content') ?>