<?php defined('C5_EXECUTE') or die(_("Access Denied.")); ?>
<?php
$nh = Loader::helper('navigation');
$url = $nh->getCollectionURL($c);
?>
<!DOCTYPE html>
<!--[if lt IE 7 ]> <html lang="fr" dir="ltr" class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html lang="fr" dir="ltr" class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html lang="fr" dir="ltr" class="no-js ie8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="fr" dir="ltr" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="fr" dir="ltr" class="no-js"> <!--<![endif]-->
<head>
  <?php Loader::element('header_required'); ?>

  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <link rel="canonical" href="<?php echo $url; ?>" />

  <link rel="stylesheet" href="<?php echo $this->getThemePath(); ?>/css/styles.css.php" type="text/css" media="screen,projection" />
  <link rel="stylesheet" href="<?php echo $this->getThemePath(); ?>/css/print.css" type="text/css" media="print" />

  <script type="text/javascript">var jqC5 = jQuery.noConflict(true);</script>
  <script type="text/javascript" src="<?= $this->getThemePath(); ?>/js/vendor/jquery-1.11.2.min.js"></script>
  <script type="text/javascript" src="<?= $this->getThemePath(); ?>/js/javascripts.js.php"></script>
  <script type="text/javascript">var jquerylast = jQuery.noConflict(true);$=jqC5;jQuery=jqC5;</script>

  <body id="pageid_<?php echo $c->getCollectionID() ?>" class="<?php echo 'tpl-'.$c->getCollectionTypeHandle() ?>" role="document" itemscope="itemscope" itemtype="http://schema.org/WebPage">

    <div class="page">
    <!--[if lt IE 8]>
    <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

    <div id="header-wrap" role="banner" class="uk-clearfix">
      <div class="header-top"></div>
      <div class="header-main uk-container uk-container-center uk-margin-large-top uk-margin-large-bottom">
        <?php
        //test si page accueil pour optimisation SEO
        $p = Page::getCurrentPage();
        if(is_object($p) && $p instanceof Page && !$p->isError() && $p->getCollectionID() == HOME_CID)
        {
          ?>
          <h1 id="logo-site" class="uk-float-left">
            <img id="logo" class=""  width="287" height="79" alt="<?php echo SITE; ?>" src="<?php echo $this->getThemePath() ?>/images/logo-mairie-baincthun.png" />
          </h1>
          <?php
        } else {
          ?>
          <a href="<?php echo BASE_URL; ?><? echo $this->url('/') ?>" id="logo-site" class="" title="Retour à l'accueil - <?php echo SITE; ?>">
            <img id="logo" class="" width="287" height="79"  alt="<?php echo SITE; ?>" src="<?php echo $this->getThemePath() ?>/images/logo-mairie-baincthun.png" />
          </a>
          <?php
        }
        ?>
        <form class="uk-search uk-margin-top uk-float-right" data-uk-search>
          <input class="uk-search-field" type="search" placeholder="">
        </form>
      </div>
      <div class="header-bottom uk-container uk-container-center uk-margin-large-top uk-margin-large-bottom">
        <?php

        $navbar = BlockType::getByHandle('autonav');
        $navbar->controller->displayPages = 'top';
        $navbar->controller->orderBy = 'display_asc';
        $navbar->controller->displaySubPages = 'none';
        //$navbar->controller->displaySubPageLevels = 'all';
        $navbar->render('templates/uikit_navbar');

        ?>
      </div>
    </div><!--/ #header-wrap -->
