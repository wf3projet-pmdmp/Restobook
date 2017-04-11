<?php $this->layout('layoutbackresto', ['title' => 'Accueil']) ?>

<?php $this->start('main_content') ?>
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                Bienvenue <small></small>
            </h1>
            <ol class="breadcrumb">
                <li class="active">
                    <i class="fa fa-dashboard"></i> Panneau D'Administration
                </li>
            </ol>
        </div>
    </div>
    <!-- /.row -->

    <div class="row">
        <div class="col-lg-4 col-md-12">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <i class="fa fa-cutlery fa-5x"></i>
                        </div>
                        <div class="col-xs-9 text-right">
                            <div class="huge">12</div>
                            <div>Liste des Restaurants !</div>
                        </div>
                    </div>
                </div>
                <a href="<?= $this->url('manager_listall') ?>">
                    <div class="panel-footer">
                        <span class="pull-left">Voir Détails</span>
                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-lg-4 col-md-12">
            <div class="panel panel-red">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <i class="fa fa-ticket fa-5x"></i>
                        </div>
                        <div class="col-xs-9 text-right">
                            <div class="huge">124</div>
                            <div>Liste des Réservations !</div>
                        </div>
                    </div>
                </div>
                <a href="<?= $this->url('manager_reserv') ?>">
                    <div class="panel-footer">
                        <span class="pull-left">Voir Détails</span>
                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-lg-4 col-md-12">
            <div class="panel panel-yellow">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <i class="fa fa-envelope fa-5x"></i>
                        </div>
                        <div class="col-xs-9 text-right">
                            <div class="huge">13</div>
                            <div> Contacts !</div>
                        </div>
                    </div>
                </div>
                <a href="<?= $this->url('manager_listcontact') ?>">
                    <div class="panel-footer">
                        <span class="pull-left">Voir Détails</span>
                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <!-- /.row -->

    <div class="row">
        <div class="col-lg-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title"><i class="fa fa-clock-o fa-fw"></i> Mes Restaurants</h3>
                </div>
                <div class="panel-body">
                    <div class="list-group">
                        <a href="#" class="list-group-item">
                            <span class="badge">maintenant</span>
                            <i class="fa fa-fw fa-calendar"></i> Mis à jour
                        </a>
                        <a href="#" class="list-group-item">
                            <span class="badge">08/04/2017 17:42</span>
                            <i class="fa fa-fw fa-cutlery"></i> Ti-Toques
                        </a>
                        <a href="#" class="list-group-item">
                            <span class="badge">04/04/2017 08:50</span>
                            <i class="fa fa-fw fa-cutlery"></i> Le Deck
                        </a>
                    </div>
                    <div class="text-right">
                        <a href="<?= $this->url('manager_listall') ?>">Voir tous mes Restaurants <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title"><i class="fa fa-money fa-fw"></i> Panneau des réservations</h3>
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover table-striped">
                            <thead>
                                <tr>
                                    <th>Réservation #</th>
                                    <th>Date</th>
                                    <th>Heures</th>
                                    <th>Restaurant</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>3326</td>
                                    <td>08/04/2017</td>
                                    <td>15:29</td>
                                    <td>Le Beach-Grill</td>
                                </tr>
                                <tr>
                                    <td>3325</td>
                                    <td>08/04/2017</td>
                                    <td>15:20</td>
                                    <td>Le Pineapple</td>
                                </tr>
                                <tr>
                                    <td>3324</td>
                                    <td>08/04/2017</td>
                                    <td>15:03</td>
                                    <td>Le Patio</td>
                                </tr>
                                <tr>
                                    <td>3323</td>
                                    <td>08/04/2017</td>
                                    <td>15:00</td>
                                    <td>L'Annexe</td>
                                </tr>
                                <tr>
                                    <td>3322</td>
                                    <td>08/04/2017</td>
                                    <td>14:49</td>
                                    <td>Le Beach-Grill</td>
                                </tr>
                                <tr>
                                    <td>3321</td>
                                    <td>08/04/2017</td>
                                    <td>14:23</td>
                                    <td>Le Copacabana</td>
                                </tr>
                                <tr>
                                    <td>3320</td>
                                    <td>08/04/2017</td>
                                    <td>14:15</td>
                                    <td>Le Marley's</td>
                                </tr>
                                <tr>
                                    <td>3319</td>
                                    <td>08/04/2017</td>
                                    <td>14:13</td>
                                    <td>New Mejico</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="text-right">
                        <a href="<?= $this->url('manager_reserv') ?>">Voir toutes les réservations <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.row -->

</div>
<!-- /.container-fluid -->
<?php $this->stop('main_content') ?>