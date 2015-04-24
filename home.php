<?php defined('C5_EXECUTE') or die(_("Access Denied.")); ?>
<?php $this->inc('elements/header.php'); ?>

<div id="content-wrap" role="main">
  <div class="uk-container uk-container-center uk-margin-top uk-margin-large-bottom">

    <div id="bloc_home_menu" class="uk-grid">

      <div class="uk-width-medium-1-4">
        <?php
          echo '<div id="bloc_home_baincthun">';
          echo '<h2>À la découverte de Bainchun</h2>';
          $nav = BlockType::getByHandle('autonav');
          $nav->controller->displayPages = 'custom';
          $nav->controller->displayPagesCID = 194;
          $nav->controller->orderBy = 'display_asc';
          $nav->controller->displaySubPages = 'all';
          $nav->controller->displaySubPageLevels = 'all';
          $nav->render('view');
          echo '</div>';
          ?>
      </div>

      <div class="uk-width-medium-1-4">
        <?php
          echo '<div id="bloc_home_mairie">';
          echo '<h2>Votre mairie</h2>';
          $nav = BlockType::getByHandle('autonav');
          $nav->controller->displayPages = 'custom';
          $nav->controller->displayPagesCID = 184;
          $nav->controller->orderBy = 'display_asc';
          $nav->controller->displaySubPages = 'all';
          $nav->controller->displaySubPageLevels = 'all';
          $nav->render('view');
          echo '</div>';
          ?>
      </div>

      <div class="uk-width-medium-1-4">
        <?php
          echo '<div id="bloc_home_jeunesse">';
          echo '<h2>Jeunesse & éducation</h2>';
          $nav = BlockType::getByHandle('autonav');
          $nav->controller->displayPages = 'custom';
          $nav->controller->displayPagesCID = 185;
          $nav->controller->orderBy = 'display_asc';
          $nav->controller->displaySubPages = 'all';
          $nav->controller->displaySubPageLevels = 'all';
          $nav->render('view');
          echo '</div>';
          ?>
      </div>

      <div class="uk-width-medium-1-4">
        <?php
          echo '<div id="bloc_home_tourisme">';
          echo '<h2>Tourisme & vie économique</h2>';
          $nav = BlockType::getByHandle('autonav');
          $nav->controller->displayPages = 'custom';
          $nav->controller->displayPagesCID = 186;
          $nav->controller->orderBy = 'display_asc';
          $nav->controller->displaySubPages = 'all';
          $nav->controller->displaySubPageLevels = 'all';
          $nav->render('view');
          echo '</div>';
          ?>
      </div>

    </div>

    <div id="bloc_home_actu" class="uk-margin-large-top uk-margin-large-bottom">

      <div class="uk-grid uk-grid-match uk-grid-collapse">
        <div class="uk-width-medium-1-4">
          <div class="uk-panel uk-text-center uk-margin-large-top uk-margin-large-bottom">
            <h2>Actu</h2>
            <a href="#" class="uk-icon-button uk-icon-twitter" rel="me" title="Suivez-nous sur Twitter"></a>
            <a href="#" class="uk-icon-button uk-icon-facebook" rel="me" title="Suivez-nous sur Facebook"></a>
            <a href="#" class="uk-icon-button uk-icon-google" rel="me" title="Suivez-nous sur Google+"></a>
          </div>
        </div>
        <?php
        Loader::model('page_list');
        $pl = new PageList();
        $nh = Loader::helper('navigation');
        $pl->filterByCollectionTypeHandle('page');
        $pl->filterByParentID(204);
        $pl->sortByDisplayOrder();
        $pages = $pl->get(3,0);

        foreach($pages as $page) {
          $url = $nh->getCollectionURL($page);
          echo '<div class="uk-width-medium-1-4">';
            echo '<div class="uk-panel">';
              echo '<h3>'. $page->getCollectionName() .'</h3>';
              echo '<p>'. $page->getCollectionDescription() .'</p>';
              echo '<a href="'. $url .'" class="uk-button">Lire la suite</a>';
            echo '</div>';
          echo '</div>';
        }
        ?>
        <!--
        <div class="uk-width-medium-1-4">
          <div class="uk-panel">
            <h3>Règles d'urbanisme</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            <a class="uk-button" href="#">Lire la suite</a>
          </div>
        </div>
        <div class="uk-width-medium-1-4">
          <div class="uk-panel"><h3>TELEPOINTS.INFO</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim venit mollit anim id est laborum.</p>
            <a class="uk-button" href="#">Lire la suite</a>
          </div>
        </div>
        <div class="uk-width-medium-1-4">
          <div class="uk-panel"><h3>Inscriptions aux temps d'activités périscolaires</h3>
            <p>Lorem ipsum dolor sit amam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            <a class="uk-button" href="#">Lire la suite</a>
          </div>
        </div>
        -->
      </div>

      <div class="uk-grid">
        <div class="uk-width-1-1 uk-clearfix">
          <h3><a id="voirtoutelactu" href="<?php echo $this->url('/actus'); ?>" class="uk-align-right">VOIR TOUTE L'ACTU</a></h3>
        </div>
      </div>

    </div>

    <div id="bloc_home_calendrier">
      <div class="uk-grid">
        <div class="uk-width-medium-1-4">
          <div class="uk-panel">
            <div class="uk-panel uk-text-center uk-margin-large-top uk-margin-large-bottom">
              <h2>Calendrier</h2>
            </div>
          </div>
        </div>
        <div class="uk-width-medium-1-4">
          <div class="uk-panel">
            <?php
            Loader::model('page_list');
            $pl = new PageList();
            $nh = Loader::helper('navigation');
            $pl->filterByCollectionTypeHandle('page');
            $pl->filterByParentID(205);
            $pl->sortByDisplayOrder();
            $pages = $pl->get(1,0);

            foreach($pages as $page) {
              $url = $nh->getCollectionURL($page);
              echo '<article>';
                echo '<h3 class="article-title">'. $page->getCollectionName() .'</h3>';
                echo '<p class="article-meta">'. $page->getCollectionDatePublic('d/m/Y') .'</p>';
                echo '<p>'. $page->getCollectionDescription() .'</p>';
                echo '<a href="'. $url .'" class="uk-button">Lire la suite</a>';
              echo '</article>';
            }
            ?>
          </div>
        </div>
        <div class="uk-width-medium-1-4">
          <div class="uk-panel">
            <?php
            Loader::model('page_list');
            $pl = new PageList();
            $nh = Loader::helper('navigation');
            $pl->filterByCollectionTypeHandle('page');
            $pl->filterByParentID(205);
            $pl->sortByDisplayOrder();
            $pages = $pl->get(1,1);

            foreach($pages as $page) {
              $url = $nh->getCollectionURL($page);
              echo '<article>';
                echo '<h3 class="article-title">'. $page->getCollectionName() .'</h3>';
                echo '<p class="article-meta">'. $page->getCollectionDatePublic('d/m/Y') .'</p>';
                echo '<p>'. $page->getCollectionDescription() .'</p>';
                echo '<a href="'. $url .'" class="uk-button">Lire la suite</a>';
              echo '</article>';
            }
            ?>
          </div>
        </div>
        <div class="uk-width-medium-1-4">
          <div id="bloc_home_archive" class="uk-panel">
            <h2>Archives</h2>
            <?php
            $a = new Area('Archives');
            $a->display($c);
            ?>
          </div>
        </div>
      </div>
    </div>

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
