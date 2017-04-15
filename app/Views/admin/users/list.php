<?php $this->layout('layoutback', ['title' => 'Accueil']) ?>

<?php $this->start('main_content') ?>
<div class="container-fluid">

   <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                Restobook <small>Liste des Utilisateurs</small>
            </h1>
            
            <?php if(!empty($errors)): // La variable $errors est envoyé via le controller?>
            <p id="errors" style="color:black"><?=implode('<br>', $errors); ?></p>
            <?php endif; ?>

            <?php if($noResult == true): ?>
                <p style="color:blue">Il n'y a pas de resultat pour votre recherche</p>
            <?php endif; ?>
            <form methode="post">
                <div class="form-group">
                    <div class="col-xs-12">
                        <div class="input-group">
                            <input type="text" name="search">
                        </div>
                    </div>
                </div>
            </form>
            
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
                <th>Rôle</th>
                <th>Détail</th>
                <th>Mettre à Jour</th>
                <th>Supprimer</th>
            </tr>
        </thead>

       <tbody>
            <!-- foreach permettant d'avoir une ligne <tr> par ligne SQL -->
            <?php foreach($users as $user): ?>

           <tr>
                <td><?=$user['id_user']; ?></td>
                <td><?=strtoupper($user['lastname']); ?></td>
                <td><?=ucfirst($user['firstname']); ?></td>
                <td><?=ucfirst($user['role']); ?></td>
                <td>
                    <!-- view_menu.php?id=6 -->
                    <a href="<?=$this->url('admin_viewuser', ['id' => $user['id_user']]); ?>"><i class="glyphicon glyphicon-circle-arrow-right" aria-hidden="true"></i></a>
                </td>
                <td>
                    <!-- view_menu.php?id=6 -->
                    <a href="<?=$this->url('admin_updateuser', ['id' => $user['id_user']]); ?>"><i class="glyphicon glyphicon-refresh" aria-hidden="true"></i></a>
                </td>
                <td>
                    <!-- view_menu.php?id=6 -->
                    <a href="<?=$this->url('admin_deluser', ['id' => $user['id_user']]); ?>"><i class="glyphicon glyphicon-remove" aria-hidden="true"></i></a>
                </td>
            </tr>
            
           <?php endforeach; ?>
        </tbody>
    </table>

   

</div>
<!-- /.container-fluid -->
<?php $this->stop('main_content') ?>