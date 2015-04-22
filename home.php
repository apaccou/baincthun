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
            <article class="uk-article">
              <h3 class="article-title">Récital de Noël de Patrick Damie</h3>
              <p class="article-meta">28/11/2014 : 20:30</p>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores, est! Esse voluptatum aperiam dolorem odit quasi, cupiditate commodi error natus ea! Officiis, amet!
              </p>
              <a href="#" class="uk-button">Lire la suite</a>
            </article>
          </div>
        </div>
        <div class="uk-width-medium-1-4">
          <div class="uk-panel">
            <article class="uk-article">
              <h3 class="article-title">Marché de Noël</h3>
              <p class="article-meta">28/11/2014 : 20:30</p>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam culpa possimus, tempora, veritatis aut ab, quos mollitia consequatur quia laborum beatae veniam cumque?
              </p>
              <a href="#" class="uk-button">Lire la suite</a>
            </article>
          </div>
        </div>
        <div class="uk-width-medium-1-4">
          <div id="bloc_home_archive" class="uk-panel">
            <h2>Archives</h2>
            <ul>
              <li><a>Lorem ipsum dolor sit amet.</a></li>
              <li><a>Tempore, maxime dolorum culpa deserunt.</a></li>
              <li><a>Quibusdam minima nobis error nihil!</a></li>
              <li><a>Magni cum, consequuntur. Nisi, quaerat.</a></li>
              <li><a>Quod dolorem corporis illo quibusdam.</a></li>
              <li><a>Doloribus officia perferendis, officiis temporibus?</a></li>
            </ul>
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
