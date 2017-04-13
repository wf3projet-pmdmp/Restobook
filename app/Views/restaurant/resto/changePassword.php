<?php $this->layout('layoutback', ['title' => 'Accueil']) ?>

<?php $this->start('main_content') ?>

<div class="container">
	<div class="row">
		<div class="col-xs-12">
		    <h3 class="text-center">Changement de mot de passe</h3>
		    <hr/>
		    <form>
		        <div class="form-group">
		            <label>Entrez votre e-mail  :</label>
		            <input type="email" class="form-control"/>
		        </div>
		         <div class="form-group">
		            <label>Nouveau mot de passe :</label>
		            <input type="password" class="form-control"/>
		        </div>
		         <div class="form-group">
		            <label>Confirmez le nouveau mot de passe :</label>
		            <input type="password" class="form-control"/>
		        </div>
		        <button class="btn btn-primary btn-sm center-block">
		            Envoyez !
		        </button>
		    </form>
		</div>
	</div>
</div>

<?php $this->stop('main_content') ?>