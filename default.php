<?php defined('C5_EXECUTE') or die(_("Access Denied.")); ?>
<?php $this->inc('elements/header.php'); ?>

<div id="content-wrap" role="main" class="uk-clearfix">
  <div class="uk-container uk-container-center uk-margin-top uk-margin-large-bottom">

    <div class="uk-grid">

      <div class="content-col-left">
      </div><!--/ .content-col-left -->

      <div class="content-col-main uk-width-medium-3-4">

        <div id="compas" class="">
          <?php $this->inc('elements/compas.php'); ?>
        </div>

        <h1><?php echo $c->getCollectionName(); ?></h1>
        <h2>test h2</h2>
        <h3>test h3</h3>
        <ul>
          <li>test</li>
          <li>test</li>
          <li>test</li>
          <li>test</li>
          <li>test</li>
        </ul>
        <a href="#">test lien</a>
        <?php
        $a = new Area('Main');
        $a->display($c);
        ?>
      </div><!--/ .content-col-main -->

      <div class="content-col-right uk-width-medium-1-4">

        <?php
        if($c->getCollectionID()==194):
          echo '<div id="bloc_baincthun">';
          echo '<h2>À la découverte de Bainchun</h2>';
          $nav = BlockType::getByHandle('autonav');
          $nav->controller->displayPages = 'custom';
          $nav->controller->displayPagesCID = 194;
          $nav->controller->orderBy = 'display_asc';
          $nav->controller->displaySubPages = 'all';
          $nav->controller->displaySubPageLevels = 'all';
          $nav->render('view');
          echo '</div>';
        else:
          ?>
          <a id="bloc_baincthun" href="<?php echo $this->url('/decouvrir-baincthun'); ?>">
            <h2>À la découverte de Bainchun</h2>
          </a>
          <?php
        endif;
        ?>

        <?php
        if($c->getCollectionID()==184):
          echo '<div id="bloc_mairie">';
          echo '<h2>Votre mairie</h2>';
          $nav = BlockType::getByHandle('autonav');
          $nav->controller->displayPages = 'custom';
          $nav->controller->displayPagesCID = 184;
          $nav->controller->orderBy = 'display_asc';
          $nav->controller->displaySubPages = 'all';
          $nav->controller->displaySubPageLevels = 'all';
          $nav->render('view');
          echo '</div>';
        else:
          ?>
          <a id="bloc_mairie" href="<?php echo $this->url('/mairie'); ?>">
            <h2>Votre mairie</h2>
          </a>
          <?php
        endif;
        ?>

        <?php
        if($c->getCollectionID()==185):
          echo '<div id="bloc_jeunesse">';
          echo '<h2>Jeunesse & éducation</h2>';
          $nav = BlockType::getByHandle('autonav');
          $nav->controller->displayPages = 'custom';
          $nav->controller->displayPagesCID = 185;
          $nav->controller->orderBy = 'display_asc';
          $nav->controller->displaySubPages = 'all';
          $nav->controller->displaySubPageLevels = 'all';
          $nav->render('view');
          echo '</div>';
        else:
          ?>
          <a id="bloc_jeunesse" href="<?php echo $this->url('/jeunesse-education'); ?>">
            <h2>Jeunesse & éducation</h2>
          </a>
          <?php
        endif;
        ?>

        <?php
        if($c->getCollectionID()==186):
          echo '<div id="bloc_tourisme">';
          echo '<h2>Tourisme & vie économique</h2>';
          $nav = BlockType::getByHandle('autonav');
          $nav->controller->displayPages = 'custom';
          $nav->controller->displayPagesCID = 186;
          $nav->controller->orderBy = 'display_asc';
          $nav->controller->displaySubPages = 'all';
          $nav->controller->displaySubPageLevels = 'all';
          $nav->render('view');
          echo '</div>';
        else:
          ?>
          <a id="bloc_tourisme" href="<?php echo $this->url('/tourisme-vie-economique'); ?>">
            <h2>Tourisme & vie économique</h2>
          </a>
          <?php
        endif;
        ?>

        <h3>SUIVEZ LA MAIRIE</h3>
        <a href="#" class="uk-icon-button uk-icon-twitter" rel="me" title="Suivez-nous sur Twitter"></a>
        <a href="#" class="uk-icon-button uk-icon-facebook" rel="me" title="Suivez-nous sur Facebook"></a>
        <a href="#" class="uk-icon-button uk-icon-google" rel="me" title="Suivez-nous sur Google+"></a>

        <?php
        $as = new Area('Sidebar');
        $as->display($c);
        ?>
      </div><!--/ .content-col-right -->

    </div>
  </div>
</div><!--/ #content-wrap -->

<?php $this->inc('elements/footer.php'); ?>
