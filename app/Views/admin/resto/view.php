<?php $this->layout('layoutback', ['title' => 'Accueil']) ?>

<?php $this->start('main_content') ?>
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                Bienvenue <small>Détail Restaurant</small>
            </h1>
            <ol class="breadcrumb">
                <li class="active">
                    <i class="fa fa-dashboard"></i> Panneau D'Administration
                </li>
            </ol>
        </div>
    </div>
    <!-- /.row -->

    <?php if(!empty($restos)): ?>
    
    <div class="col-sm-12">
        <div class="col-sm-6">
            <ol class="breadcrumb">
                <li class="active">
                    <h4>Restaurant :</h4>
                </li>
            </ol>
            <h2><?php echo $restos[0]['name']; ?></h2>
        </div>

        <div class="col-sm-6">
            <ol class="breadcrumb">
                <li class="active">
                    <h4>Propriétaire :</h4>
                </li>
            </ol>
            <p><?php echo '<strong>'.$restos[0]['lastname'].' '.$restos[0]['firstname'].'</strong> (<a href="'.$this->url('admin_viewuser', ['id' => $restos[0]['id_user']]).'">Voir fiche restaurateur</a>)'; ?></p>
        </div>
    </div>

    <div class="col-sm-12">
        <div class="col-sm-6">
            <ol class="breadcrumb">
                <li class="active">
                    <h4>Phone :</h4>
                </li>
            </ol>
            <p><?php echo $restos[0]['phone']; ?></p>
        </div>

        <div class="col-sm-6">
            <ol class="breadcrumb">
                <li class="active">
                    <h4>Email :</h4>
                </li>
            </ol>
            <p><?php echo '<a href="mailto:'.$restos[0]['email'].'">'.$restos[0]['email'].'</a>'; ?></p>
        </div>
    </div>

        <div class="col-sm-12">
            <ol class="breadcrumb">
                <li class="active">
                    <h4>Adresse :</h4>
                </li>
            </ol>
            <p><?php echo $restos[0]['address']; ?></p>
            <p><?php echo $restos[0]['zipcode'].' '.$restos[0]['city']; ?></p>
        </div>

        <div class="col-sm-12">
            <ol class="breadcrumb">
                <li class="active">
                    <h4>Email :</h4>
                </li>
            </ol>
            <p></p>
        </div>
       

    <?php endif; ?>

</div>
<!-- /.container-fluid -->
<?php $this->stop('main_content') ?>