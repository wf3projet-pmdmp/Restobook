<?php $this->layout('layout', ['title' => 'Accueil']) ?>

<?php $this->start('main_content') ?>
<!-- Small modal pris sur http://www.bootply.com/Ztz1JW1Kb9-->
<button class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-sm">Se déconnecter</button>

<div class="modal bs-example-modal-sm" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header"><h4>Déconnexion <i class="fa fa-lock"></i></h4></div>
      <div class="modal-body"><i class="fa fa-question-circle"></i> Etes vous sûr de vous déconnecter ?</div>
      <div class="modal-footer"><a href="javascript:;" class="btn btn-primary btn-block">Appuyez içi pour vous déconnecter</a></div>
    </div>
  </div>
</div>
<?php $this->stop('main_content') ?>