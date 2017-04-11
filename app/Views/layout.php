<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="pmdmp">
	<title><?= $this->e($title) ?></title>

	<link rel="stylesheet" href="<?= $this->assetUrl('css/bootstrap.min.css') ?>">
	<link rel="stylesheet" href="<?= $this->assetUrl('css/style.css') ?>">
    <link rel="stylesheet" href="<?= $this->assetUrl('font-awesome/css/font-awesome.min.css') ?>">
    
</head>
<body>
    <main class="container-full">
            <header>
                <!--<h1>W :: <?= $this->e($title) ?></h1>-->
                <div class="col-xs-12">
                    <p class="log">
                        <a href="<?= $this->url('users_login') ?>">Connexion</a>
                        | 
                        <a href="<?= $this->url('users_register') ?>">Inscription</a>
                    </p>
                </div>

                <div class="container">
                    <ul class="col-xs-12">
                        <li class="col-sm-4"><a href="<?= $this->url('default_home') ?>">Accueil</a></li>
                        <li class="col-sm-4"><a href="">Les Restaurants</a></li>
                        <li class="col-sm-4"><a href="">Recherche</a></li>
                    </ul>
                </div>
            </header>

            <section class="container content">
                <?= $this->section('main_content') ?>
            </section>

            <footer class="col-xs-12 foot">
                <div class="container">
                    <div class="col-sm-3 cmt">
                        <img src="<?= $this->assetUrl('img/logocmtsite2-ctm2.png') ?>" class="img-responsive" alt="cmt">
                    </div>

                    <div class="col-sm-3 info">
                        <p><a href="">Qui sommes-nous ?</a></p>
                        <p><a href="">Devenir membre de l'association</a></p>
                        <p><a href="">Nous contacter</a></p>
                    </div>

                    <div class="col-sm-3">
                        <h3 class="r-m">CONTACT</h3>
                        <p>ASSOCIATION DES RESTAURATEURS DE MARTINIQUE</p>
                        <p>97200 Fort-de-France<br>MARTINIQUE<br>Tel : +596(0) 596 00 00 00</p>
                    </div>

                </div>
            </footer>

            <footer class="col-xs-12 copyr">
                <p>Copyright © WebForce3 2017</p>
            </footer>
    </main>
    
    <script src="<?= $this->assetUrl('js/jquery-3.2.0.min.js') ?>"></script>
    <script src="<?= $this->assetUrl('js/bootstrap.min.js') ?>"></script>
</body>
</html>