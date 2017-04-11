<?php $this->layout('layout', ['title' => 'Contact']) ?>

<?php $this->start('main_content') ?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Formulaire contact restaurant</title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div id="result"></div>

<div class="container">
	<div id="result">
	   <form method="post" action="traitement_formulaire.php">
		   <div class="form-group">
		    <label for="lastname">Votre nom :</label>
		    <input type="text" class="form-control" id="lastname">
		   </div>
		   <div class="form-group">
		    <label for="firstname">Votre prénom :</label>
		    <input type="text" class="form-control" id="firstname">
		   </div>

		  <div class="form-group">
		    <label for="email">Votre E-mail :</label>
		    <input type="email" class="form-control" id="email">
		  </div>
		   <p>Pour nous contacter,vous pouvez nous laisser un message:</p>
		  <div class="form-group">
		  <label for="message">Votre texte:</label>
		  <textarea class="form-control" rows="5" id="message"></textarea>
			</div>
		  
		  <div class="form-group"> 
	      <button type="submit" class="btn btn-default">Envoyer le message</button>
	      </div>
	   </form>
	</div>
</div>

<script src="https://code.jquery.com/jquery-3.2.0.min.js" integrity="sha256-JAW99MJVpJBGcbzEuXk4Az05s/XyDdBomFqNlM3ic+I=" crossorigin="anonymous"></script>
<script>
$(document).ready(function(){

	$('form input[type="submit"]').click(function(e){
		e.preventDefault();

		myForm = $('form');

		$.ajax({
			method: myForm.attr('method'),
			url: myForm.attr('action'),
			data: myForm.serialize(),
			success: function(res){
				$('#result').html(res);
			}
		});
	});
});
</script>
</body>
</html>


<?php $this->stop('main_content') ?>