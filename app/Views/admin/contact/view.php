<?php $this->layout('layoutback', ['title' => 'Accueil']) ?>

<?php $this->start('main_content') ?>
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                Bienvenue <small>Liste des Contacts</small>
            </h1>
            <ol class="breadcrumb">
                <li class="active">
                    <i class="fa fa-dashboard"></i> Panneau D'Administration
                </li>
            </ol>
        </div>
    </div>
    <!-- /.row -->
    
    <?php if(!empty($contact)): ?>
        <button type="submit" class="btn btn-primary valid" id="back" onclick="goBack()" style="float:right;">Previous Page</button>

        <h1>Détails du Restaurant</h1>

        <h2>Prénom: <?php echo $contact['lastname']; ?></h2>
        <h3>Nom: <?php echo $contact['firstname']; ?></h3>
        <h4>Email: <?php echo $contact['email']; ?></h4>

        <p><strong>Message :</strong><br><?php echo nl2br($contact['message']); ?></p>
        
        <?php if ($contact['msgread'] == 0) {echo 'Non lu';} else {echo 'Lu';} ?>
	
    <?php endif; ?>

        <form id="read" method='get'>
            <input type="checkbox" name="check" value="1">
            
            <button type="submit">Marquer comme LU</button>
        </form>


</div>
<!-- /.container-fluid -->
<?php $this->stop('main_content') ?>

<!--------------------->
