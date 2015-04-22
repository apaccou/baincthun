<?php defined('C5_EXECUTE') or die(_("Access Denied.")); ?>

    <div id="footer-wrap" role="contentinfo" class="uk-clearfix">
        <div id="footer-top">
            <div class="uk-container uk-container-center uk-margin-large-top uk-margin-large-bottom">
                <a id="back-to-top" href="#top" data-uk-smooth-scroll><i class="uk-icon-chevron-circle-up"></i></a>

                <div class="uk-grid">
                    <div class=" uk-width-medium-1-4">
                        <h3 class="contact">Contact</h3>
                        <!-- http://schema.org/PostalAddress    https://support.google.com/webmasters/answer/146861?hl=fr -->
                        <div class="vcard" itemscope itemtype="http://schema.org/Organization">
                            <span class="org" itemprop="name"><a class="fn org url" itemprop="url" href="www.baincthun.fr">Mairie de Baincthun</a></span>

                            <p class="adr" itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
                                <span class="street-address" itemprop="streetAddress">78 Route de Desvres</span><br />
                                <span class="postal-code" itemprop="postalCode">62360</span>
                                <span class="locality" itemprop="addressLocality">Baincthun</span><br />
                                <span class="country-name" itemprop="addressCountry">France</span> &gt;
                                <span class="region" itemprop="addressRegion">Nord Pas-de-Calais</span>

                            </p>
                            <p>
                                <span class="tel"><i class="uk-icon-phone"></i> <span class="value" itemprop="telephone">03 21 10 08 51</span></span><br />
                                <span class="tel"><span class="type"><i class="uk-icon-fax"></i></span> <span class="value" itemprop="faxNumber">03 21 10 08 51</span></span>
                            </p>

                    <?php //ProtectionEmail-http://www.aspirine.org/emailcode_en.html ?>
                    <script type="text/javascript" language="javascript">
                    <!--
                    var x8="";for(var r7=0;r7<337;r7++)x8+=String.fromCharCode(("#4~*EDyDYMb=~0#&Z?$=-?+-,1#34#-Z?0&\'2bK10#&Zyy$+byD\'*~-W2K0yD.*#!#~LbE%IL?F?EEH+~yD\'__0\'_#__K0yD.*#!#~L_E%ILk??13K12 EN0FHF]??!&K0^~EM2HyDFS~ ,S\'2&!,>3$0SK0yD.*#!#~LSE%IL??xxMzFFz0#K*~.#E!yy>L%ILK??FHFyyyDyD=-?R+,31--3#Z?2&\'2KR10#&Zyy$yyyDyD[R?~\'+\'#0@6CMXQ~\' !2,&3RC@,MQMX$SYL0[yD~0#K*~.#E!RLLI?%?FDK0#.*~!#ELEKKFEKFL%I?AOAN?FK13 120ENFF".charCodeAt(r7)-(29)+63)%(0x5f)+3*6+14);document.write(eval(x8))
                    //-->
                    </script>

                            <span class="geo" itemprop="geo" itemscope="" itemtype="http://schema.org/GeoCoordinates">
                              <?php http://www.itilog.com/ ?>
                                <meta itemprop="latitude" content="50.710149" />
                                <meta itemprop="longitude" content="1.6802040000000034" />
                            </span>
                        </div>

                    </div>
                    <div class="uk-width-medium-1-4">

                        <h3 class="horaire">Horaires</h3>
                        <p>Du Lundi au Vendredi<br/>
                        de 8h30 à 12h<br/>
                        et de 13h30 à 17h00.</p>

                        <p>Ouvert le mardi jusqu'à 18h30.</p>
                        <h3 class="plan"><a href="<?php echo $this->url('/plan-interactif'); ?>">Plan interactif</a></h3>

                    </div>
                    <div class="uk-width-medium-1-4">
                      <h3 class="info">Infos pratiques</h3>
                      <ul class="uk-list">
                        <li><a href="<?php echo $this->url('/situation'); ?>">Situation et accès</a></li>
                        <li><a href="<?php echo $this->url('/meteo'); ?>">Météo et marées</a></li>
                        <li><a href="<?php echo $this->url('/liens'); ?>">Liens</a></li>
                        <li><a href="<?php echo $this->url('/telechargements'); ?>">Téléchargements</a></li>
                        <li><a href="<?php echo $this->url('/plan-de-site'); ?>">Plan du site</a></li>
                      </ul>
                    </div>
                    <div class="uk-width-medium-1-4">
                    </div>
                </div>
            </div>
        </div><!--/ #footer-top -->
        <div id="footer-bottom">
            <div class="uk-container uk-container-center uk-margin-top uk-margin-bottom">
                <p class="copyright">
                  <a href="<?php echo $this->url('/mentions-legales/'); ?>">Mentions légales</a> &copy; 2015 <a rel="license" href="http://www.coteo.com/"><abbr title="Conception, Intégration et Développement de site internet Concrete5">Agence</abbr> Web COTEO <img src="<?php echo $this->getThemePath(); ?>/images/logo-coteo-web.png" alt="Coteo Web - Création de site internet" /></a>
                </p>
            </div>
        </div><!--/ #footer-bottom -->
    </div><!--/ #footer-wrap -->



<script type="text/javascript" src="<?= $this->getThemePath(); ?>/js/javascripts.js.php"></script>

<?php Loader::element('footer_required'); ?>

</div><!--/ .page -->

</body>
</html>
