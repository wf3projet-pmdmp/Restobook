<?php $this->layout('layoutback', ['title' => 'Accueil']) ?>

<?php $this->start('main_content') ?>
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                Bienvenue <small>Détail Utilisateur</small>
            </h1>
            <ol class="breadcrumb">
                <li class="active">
                    <i class="fa fa-dashboard"></i> Panneau D'Administration
                </li>
            </ol>
        </div>
    </div>
    <!-- /.row -->
    
    <?php if(!empty($users)): ?>

    <ol class="breadcrumb">
        <li class="active">
            <h4>Utilisateur :</h4>
        </li>
    </ol>
    <h2><?php echo $users['lastname'].' '.$users['firstname']; ?></h2>
       
    <ol class="breadcrumb">
        <li class="active">
            <h4>Email :</h4>
        </li>
    </ol>
    <p><?php echo '<a href="mailto:'.$users['email'].'">'.$users['email'].'</a>'; ?></p>
       
    <ol class="breadcrumb">
        <li class="active">
            <h4>Adresse :</h4>
        </li>
    </ol>
    <p>
        <?php echo $users['address']; ?><br>
        <?php echo $users['zipcode'].' '.$users['city']; ?>
    </p>
       
    <ol class="breadcrumb">
        <li class="active">
            <h4>Phone :</h4>
        </li>
    </ol>
    <p><?php echo $users['phone']; ?></p>
        
    <?php endif; ?>

</div>
<!-- /.container-fluid -->
<?php $this->stop('main_content') ?>