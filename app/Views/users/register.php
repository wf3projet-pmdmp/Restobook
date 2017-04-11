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
            <legend>S'inscrire</legend>

            <!-- Lastname -->
            <div class="form-group">
                <div class="col-xs-12">
                    <label>Nom :</label>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user" aria-hidden="true"></i></span>
                        <input type="text" class="form-control" name="lastname">
                    </div>
                </div>
            </div>
            
            <!-- Firstname -->
            <div class="form-group">
                <div class="col-xs-12">
                    <label>Prénom :</label>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user" aria-hidden="true"></i></span>
                        <input type="text" class="form-control" name="firstname">
                    </div>
                </div>
            </div>

            <!-- Email -->
            <div class="form-group">
                <div class="col-xs-12">
                    <label>Email :</label>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i></span>
                        <input type="email" class="form-control" name="email">
                    </div>
                </div>
            </div>
            
            <!-- Password -->
            <div class="form-group">
                <div class="col-xs-12">
                    <label>Mot de Passe :</label>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock " aria-hidden="true"></i></span>
                        <input type="password" class="form-control" name="password">
                    </div>
                </div>
            </div>
            
            <!-- Phone -->
            <div class="form-group">
                <div class="col-xs-12">
                    <label>Téléphone :</label>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-phone-alt" aria-hidden="true"></i></span>
                        <input type="text" class="form-control" name="phone">
                    </div>
                </div>
            </div>
            
            <!-- Address -->
            <div class="form-group">
                <div class="col-xs-12">
                    <label>Adresse :</label>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-home" aria-hidden="true"></i></span>
                        <input type="text" class="form-control" name="address">
                    </div>
                </div>
            </div>
            
            <!-- City -->
            <div class="form-group">
                <div class="col-xs-12">
                    <label>Ville :</label>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-home" aria-hidden="true"></i></span>
                        <input type="text" class="form-control" name="city">
                    </div>
                </div>
            </div>
            
            <!-- Zipcode -->
            <div class="form-group">
                <div class="col-xs-12">
                    <label>Code Postal :</label>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-home" aria-hidden="true"></i></span>
                        <input type="text" class="form-control" name="zipcode">
                    </div>
                </div>
            </div>

            <input type="hidden" name="role">

            <!-- Bouton d'envoi -->
            <div class="col-xs-12" style="text-align:center">
                <button type="submit" class="btn btn-primary" id="button">S'inscrire</button>
            </div>
        </fieldset>
    </form>
</div>
<?php $this->stop('main_content') ?>