<?php defined('C5_EXECUTE') or die(_("Access Denied.")); ?>
<?php $this->inc('elements/header.php'); ?>

<div id="content-wrap" role="main">
  <div class="uk-container uk-container-center uk-margin-top uk-margin-large-bottom">

    <div class="uk-grid">
      <div class="content-col-main uk-width-medium-1-1">
        <?php
        $a = new Area('Main');
        $a->display($c);
        ?>
      </div><!--/ .content-col-main -->
    </div>

  </div>
</div><!--/ #content-wrap -->

<?php $this->inc('elements/footer.php'); ?>
