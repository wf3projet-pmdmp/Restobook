<?php $this->layout('layoutback', ['title' => 'Accueil']) ?>

<?php $this->start('main_content') ?>
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                Bienvenue <small>Liste des Utilisateurs</small>
            </h1>
            <ol class="breadcrumb">
                <li class="active">
                    <i class="fa fa-dashboard"></i> Panneau D'Administration
                </li>
            </ol>
        </div>
    </div>
    <!-- /.row -->
    
    <table class="table table-inverse table-responsive">
        <thead>
            <tr>
                <th>#</th>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Object</th>
                <th>Détail</th>
                <th></th>
            </tr>
        </thead>

        <tbody>
            <!-- foreach permettant d'avoir une ligne <tr> par ligne SQL -->
            <?php foreach($read as $contact): ?>

            <tr>
                <td><?=$contact['id_contact']; ?></td>
                <td><?=strtoupper($contact['lastname']); ?></td>
                <td><?=ucfirst($contact['firstname']); ?></td>
                <td><?=ucfirst($contact['object']); ?></td>
                <td>
                    <!-- view_menu.php?id=6 -->
                    <a href="<?=$this->url('admin_viewcontact', ['id' => $contact['id_contact']]); ?>"><i class="glyphicon glyphicon-circle-arrow-right" aria-hidden="true"></i></a>
                </td>
                <!--<td>
                    <a href="#"><i class="glyphicon glyphicon-remove" aria-hidden="true"></i></a>
                </td>-->
                <td>
                    <!-- view_menu.php?id=6 -->
                    <a href="#"><!--<i class="glyphicon glyphicon-refresh" aria-hidden="true"></i>--></a>
                </td>
            </tr>

            <?php endforeach; ?>
        </tbody>
    </table>



</div>
<!-- /.container-fluid -->
<?php $this->stop('main_content') ?>