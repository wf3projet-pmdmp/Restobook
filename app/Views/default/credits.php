<?php $this->layout('layout', ['title' => 'PRESENTATION ARMADA']) ?>

<?php $this->start('main_content') ?>

<!DOCTYPE html>
<html lang="fr">
<head>
  <title>PRESENTATION ARMADA</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body>

<div class="jumbotron text-center">
<div img src="">
  <h3>ASSOCIATION DES RESTAURATEURS DE MARTINIQUE ET DES ANTILLES<h3> 
  <br><h6>(ARMADA)
</h2>
  
</div>
</div>
<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="https://placehold.it/1200x400?text=Notre mission" alt="Former les jeunes">
        <div class="carousel-caption">
          <h3>Former les jeunes</h3>
          
        </div>      
      </div>

      <div class="item">
        <img src="https://placehold.it/1200x400?text=Notre vision" alt="Se rassembler">
        <div class="carousel-caption">
          <h3>Se rassembler</h3>
          
        </div>      
      </div>
      <div class="item">
        <img src="https://placehold.it/1200x400?text=Notre histoire" alt="Récompenser">
        <div class="carousel-caption">
          <h3>Récompenser</h3>
          
        </div>      
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div>

<section id="text-center">  
<div class="container text-center">
  <div class="row">
    <div class="col-xs-4">
      <h3>Notre mission </h3>
      <p>Fédérer et regrouper les différents partenaires dans le secteur de la restauration et du tourisme <br>
      Animer et organiser des manifestations touristiques et culturelles.<br>
      Développer, former et structurer les équipements et personnels</p>
    </div>    
  </div>
  <div class="row">
    <div class="col-xs-4" >
      <strong><h3>Notre vision </h3></strong>
      <p>L’ARMADA consacre ses efforts à rassembler et à sensibiliser tous ces intervenants aux causes qui leur sont communes. Chaque action posée par L’ARMADA a pour finalité de contribuer à l’essor de ses membres et de les aider à relever de nouveaux défis </p>
    </div>
  </div> 
  <div class="row">
    <div class="col-xs-4">
      <h3>Notre histoire </h3>
      <p>1938 : Le 6 juin 1938 est une date mémorable puisque l'Association était légalement créée.<br>  
     1979 : Afin de se doter d’un nouveau levier de développement, l’Association  organise à Fort-de-france en 1979 son premier Salon Rest-Hôte<br> 
      2017 : Création de la plate-forme de regroupement des restaurateurs </p>
    </div>    
  </div>

</div>
</section>

  <section id="contact ">
            <div class="container text-center">
                <div class="row">
                    <h3>Pour nous contacter</h3>
                    <div class="col-sm-8 col-sm-push-2 col-xs-10 col-xs-push-1">
                        <form id="contact-form" class="form-horizontal" 
                            action="contact.php" method="post">
                            
                            <!-- Nom et Prénom -->
                            <div class="form-group">
                                <div class="col-xs-12">
                                    <input name="nomcomplet" required class="form-control" type="text" placeholder="Saisissez votre Nom et Prénom">
                                </div>
                            </div>
                            
                            <!-- Email -->
                            <div class="form-group">
                                
                                <div class="col-sm-6">
                                    <input name="email" required class="form-control" type="email" placeholder="Saisissez votre Email">
                                </div>
                                
                                <div class="col-sm-6">
                                    <input name="phone" type="tel" placeholder="Saisissez votre Téléphone" class="form-control">
                                </div>
                                
                            </div> 
                            <!-- /.Email -->
                            
                            <!-- Sujet -->
                            <div class="form-group">
                                <div class="col-xs-12">
                                    <input name="subject" required class="form-control" type="text" placeholder="Saisissez votre Sujet">
                                </div>
                            </div>
                            
                            <!-- Message -->
                            <div class="form-group">
                              <div class="col-xs-12">
                                  <textarea id="message" name="message" rows="5" placeholder="Saisissez votre message" class="form-control"></textarea>           
                              </div>
                            </div>
                            
                            <!-- Bouton d'Envoi -->
                            <div class="form-group">
                                <div class="col-xs-12">
                                    <button type="submit" class="btn btn-primary" name="contact" value="Envoyer ma Demande">Envoyer ma Demande</button>

                                </div>
                            </div>
                            
                        </form>    
                    </div>
                </div>
            </div>
        </section>
</div>
<footer>
<div class="footer text-center">
            <p>Réalisation ARMADA - Martinique 2017</p>
             
</footer>

</body>
</html>
<?php $this->stop('main_content') ?>