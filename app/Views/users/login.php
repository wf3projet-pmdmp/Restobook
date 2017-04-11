<?php $this->layout('layout', ['title' => 'Login']) ?>

<?php $this->start('main_content') ?>

    <?php if($success == true): // La variable $success est envoyé via le controller?>
    <p style="color:green">Bienvenue !</p>
    <?php endif; ?>

    <?php if(!empty($errors)): // La variable $errors est envoyé via le controller?>
    <p style="color:red"><?=implode('<br>', $errors); ?></p>
    <?php endif; ?>

    <form id="news" class="form-horizontal col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1" method="post" enctype="multipart/form-data">
        <fieldset>

            <!-- Form Name -->
            <legend>Se connecter</legend>

            <!-- Email -->
            <div class="form-group">
                <div class="col-xs-12">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" name="email" id="email">
                </div>
            </div>

            <!-- Password -->
            <div class="form-group">
                <div class="col-xs-12">
                    <label for="password">Mot de Passe</label>
                    <input type="password" class="form-control" name="password"
                    id="password">
                </div>
            </div>


            <!-- Bouton d'envoi -->
            <div class="col-xs-12" style="text-align:center">
                <button type="submit" class="btn btn-primary" id="button">Se connecter</button>
                <a href="<?= $this->url('users_register') ?>"><button type="button" class="btn btn-default">S'inscrire</button></a>
            </div>

        </fieldset>
    </form>

    <div class="col-xs-12 pwforg">
        <a href="">Mot de Passe oubliée ?</a>
    </div>
    
<?php $this->stop('main_content') ?>