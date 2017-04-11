<?php $this->layout('layoutbackresto', ['title' => 'Accueil']) ?>
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
    
    
	<?php
	if (isset($result) && !empty($result)) {
		echo $result;
	}
	?>




<form method="post"  class="form-horizonthal" enctype="multipart/form-data">

	<div class="form-group">
		<label for="name">Nom du Restaurant</label>
		<input type="text" name="name" id="name" class="form-control">
	</div>

	<div class="form-group">
		<label for="email">Email</label>
		<input type="text" name="email" id="email" class="form-control">
	</div>

	<div class="form-group">
		<label for="address">Adresse</label>
		<input type="text" name="address" id="address" class="form-control">
	</div>

	<div class="form-group">
		<label for="zipcode">Code Postal</label>
		<input type="text" name="zipcode" id="zipcode" class="form-control">
	</div>

	<div class="form-group">
		<label for="city">Ville</label>
		<input type="text" name="city" id="city" class="form-control">
	</div>

	<div class="form-group">
		<label for="phone">Téléphone</label>
		<input type="text" name="phone" id="phone" class="form-control">
	</div>

	<div class="form-group">
		<label for="schedule">Horaires</label>
		<input type="text" name="schedule" id="schedule" class="form-control">
	</div>

	<div class="form-group">
		<label for="speciality">Spécialité</label>
		<select name="speciality" id="speciality" class="form-control">
			<option value="" selected disabled>-- Sélectionnez une spécialité --</option>
			<!-- On réutilise notre array() ci-dessus -->
			<?php foreach ($specialityAvailable as $key => $value): ?>
				<option value="<?=$key;?>"><?=$value;?></option>
			<?php endforeach; ?>
		</select>
	</div>

	<div class="form-group">
		<label for="description">Description</label>
		<textarea name="description" id="description" cols="30" rows="10"></textarea>
	</div>

	<div class="form-group">
		<label for="picture">Photo</label>
		<input type="file" name="picture_header" id="picture" accept="image/*">
	</div>

	<div class="form-group">
		<label for="lightbox_one">First Lightbox</label>
		<input type="file" name="lightbox_one" id="lightbox_one" accept="image/*">
	</div>

	<div class="form-group">
		<label for="lightbox_two">Second Lightbox</label>
		<input type="file" name="lightbox_two" id="lightbox_two" accept="image/*">
	</div>

	<div class="form-group">
		<label for="lightbox_three">Third Lightbox</label>
		<input type="file" name="lightbox_three" id="lightbox_three" accept="image/*">
	</div>
	
	<div class="form-group">
		<label for="gmap">Google Maps</label>
		<input type="url" name="gmap" id="gmap">
	</div>

	<div class="text-center">
		<input type="submit" class="btn btn-primary">
	</div>
</form>

</div>
<?php
$this->stop('main_content');
?>