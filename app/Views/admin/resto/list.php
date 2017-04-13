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
                <th>City</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Détail</th>
                <th>Update</th>
                <th>Delete</th>
            </tr>
        </thead>

        <tbody>
            <!-- foreach permettant d'avoir une ligne <tr> par ligne SQL -->
            <?php foreach($restos as $resto): ?>

            <tr>
                <td><?=$resto['id_resto']; ?></td>
                <td><?=strtoupper($resto['name']); ?></td>
                <td><?=ucfirst($resto['city']); ?></td>
                <td><?=ucfirst($resto['email']); ?></td>
                <td><?=ucfirst($resto['phone']); ?></td>
                <td>
                    <!-- view_menu.php?id=6 -->
                    <a href="<?=$this->url('admin_viewresto', ['id' => $resto['id_resto']]); ?>"><i class="glyphicon glyphicon-circle-arrow-right" aria-hidden="true"></i></a>
                </td>
                <td>
                    <!-- view_menu.php?id=6 -->
                    <a href="<?=$this->url('admin_updateresto', ['id' => $resto['id_resto']]); ?>"><i class="glyphicon glyphicon-refresh" aria-hidden="true"></i></a>
                </td>
                <td>
                    <!-- view_menu.php?id=6 -->
                    <a href="<?=$this->url('admin_delresto', ['id' => $resto['id_resto']]); ?>"><i class="glyphicon glyphicon-remove" aria-hidden="true"></i></a>
                </td>
            </tr>

            <?php endforeach; ?>
        </tbody>
    </table>



</div>
<!-- /.container-fluid -->
<?php $this->stop('main_content') ?>