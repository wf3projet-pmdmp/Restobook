<?php $this->layout('layout', ['title' => 'Accueil']) ?>

<?php $this->start('main_content') ?>


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
	      <button type="submit" class="btn btn-default">Envoyez le message</button>
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


>>>>>>> origin/Fixes
<?php $this->stop('main_content') ?>