<?php $this->layout('layout', ['title' => 'PasswordForgot']) ?>

<?php $this->start('main_content') ?>

<?php if(!empty($errors)): // La variable $errors est envoyé via le controller?>
<p style="color:red"><?=implode('<br>', $errors); ?></p>
<?php endif; ?>

<form id="news" class="form-horizontal col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1" method="post" enctype="multipart/form-data">
    <fieldset>

        <legend>Mot de Passe oublié</legend>

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

        <div class="col-xs-12" style="text-align:center">
            <button type="submit" class="btn btn-primary" id="button">Envoyer</button>
        </div>

    </fieldset>
</form>
<?php $this->stop('main_content') ?>