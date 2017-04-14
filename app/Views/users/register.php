<?php $this->layout('layout', ['title' => 'S\'inscrire']) ?>

<?php $this->start('main_content') ?>

<div class="col-xs-12">
    <?php if($success == true): // La variable $success est envoyé via le controller?>
    <?php echo '<div class="alert alert-success">Votre compte a été créé ! Vous pouvez vous connecter.</div>'; ?>
    <?php endif; ?>

    <?php if(!empty($errors)): // La variable $errors est envoyé via le controller?>
    <?php echo '<div class="alert alert-danger">'.implode('<br>', $errors).'</div>'; ?>
    <?php endif; ?>

    <form id="register" class="form-horizontal col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1" method="post">
        <fieldset>

            <!-- Form Name -->
            <legend>Pour bien manger, créez votre compte : </legend>

            <!-- Lastname -->
            <div class="form-group">
                <div class="col-xs-12">
                    <label>Votre Nom :</label>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user" aria-hidden="true"></i></span>
                        <input type="text" class="form-control" name="lastname" placeholder="Entre 2 et 30 caractères ">
                    </div>
                </div>
            </div>
            
            <!-- Firstname -->
            <div class="form-group">
                <div class="col-xs-12">
                    <label>Votre Prénom :</label>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user" aria-hidden="true"></i></span>
                        <input type="text" class="form-control" name="firstname" placeholder="Entre 2 et 30 caractères ">
                    </div>
                </div>
            </div>

            <!-- Email -->
            <div class="form-group">
                <div class="col-xs-12">
                    <label>Votre Email :</label>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i></span>
                        <input type="email" class="form-control" name="email" placeholder="Entrez un Email valide ">
                    </div>
                </div>
            </div>
            
            <!-- Password -->
            <div class="form-group">
                <div class="col-xs-12">
                    <label>Votre Mot de Passe :</label>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock " aria-hidden="true"></i></span>
                        <input type="password" class="form-control" name="password" placeholder="Entre 8 et 20 caractères">
                    </div>
                </div>
            </div>
            
            <!-- Phone -->
            <div class="form-group">
                <div class="col-xs-12">
                    <label>Votre Téléphone :</label>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-phone-alt" aria-hidden="true"></i></span>
                        <input type="text" class="form-control" name="phone" placeholder="10 chiffres maximum">
                    </div>
                </div>
            </div>
            
            <!-- Address -->
            <div class="form-group">
                <div class="col-xs-12">
                    <label>Votre Adresse :</label>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-home" aria-hidden="true"></i></span>
                        <input type="text" class="form-control" name="address" placeholder="Entre 8 et 30 caractères">
                    </div>
                </div>
            </div>
            
            <!-- City -->
            <div class="form-group">
                <div class="col-xs-12">
                    <label>Votre Ville :</label>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-home" aria-hidden="true"></i></span>
                        <input type="text" class="form-control" name="city" placeholder="Entre 3 et 20 caractères">
                    </div>
                </div>
            </div>
            
            <!-- Zipcode -->
            <div class="form-group">
                <div class="col-xs-12">
                    <label>Votre Code Postal :</label>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-home" aria-hidden="true"></i></span>
                        <input type="text" class="form-control" name="zipcode" placeholder="10 chiffres maximum">
                    </div>
                </div>
            </div>

            <input type="hidden" name="role">

            <!-- Bouton d'envoi -->
            <div class="col-xs-12" style="text-align:center">
                <button type="submit" class="btn btn-primary" id="button">Créer son compte</button>
            </div>
        </fieldset>
    </form>
</div>
<?php $this->stop('main_content') ?>