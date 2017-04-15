<?php $this->layout('layout', ['title' => 'Nouveau Mot de Passe']) ?>

<?php $this->start('main_content') ?>



<form id="news" class="form-horizontal col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1" method="post" enctype="multipart/form-data">
    <fieldset>

        <legend>Nouveau Mot de Passe</legend>

        <!-- Password -->
        <div class="form-group">
            <div class="col-xs-12">
                <label>Nouveau Mot de Passe :</label>
                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-lock " aria-hidden="true"></i></span>
                    <input type="password" class="form-control" name="password">
                </div>
            </div>
        </div>

        <div class="col-xs-12" style="text-align:center">
            <button type="submit" class="btn btn-primary" id="button">Envoyer</button>
        </div>

    </fieldset>
</form>

<?php $this->stop('main_content') ?>