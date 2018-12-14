 <section id="main-slider" class="no-margin">
    <div class="carousel slide">
      <div class="carousel-inner">
        <div class="item active" style="background-image: url(<?php echo SWB; ?>template/mdpus/img/slider/bg1.jpg)">
          <div class="container">
            <div class="row slide-margin">
              <div class="col-sm-6">
                <div class="carousel-content">
                  <h2 class="animation animated-item-1"><?php echo __('Welcome'); ?></h2>
                  <form action="index.php" method="get" autocomplete="off">                    
                    <div class="marquee down">
                      <p class="s-search-info">
                      <?php echo __('start it by typing one or more keywords for title, author or subject'); ?>
                      <!--
                      <?php echo __('use logical search "title=library AND author=robert"'); ?>
                      <?php echo __('just click on the Search button to see all collections'); ?>
                      -->
                      </p>
                    </div>
                    <input type="text"  class="s-search animated fadeInUp delay4" id="keyword" name="keywords" value="" lang="<?php echo $sysconf['default_lang']; ?>" aria-hidden="true" autocomplete="off">
                    <button type="submit" name="search" value="search" class="s-btn animated fadeInUp delay4"><?php echo __('Search'); ?></button>
                    <div id="fkbx-spch" tabindex="0" aria-label="Telusuri dengan suara" style="display: block;"></div>
                  </form>
                </div>
              </div>

              <div class="col-sm-6 hidden-xs animation animated-item-4">
                <div class="slider-img">
                  <img src="<?php echo SWB; ?>template/mdpus/img/slider/img3.png" class="img-responsive">
                </div>
              </div>

            </div>
          </div>
        </div>
        <!--/.item-->
      </div>
      <!--/.carousel-inner-->
    </div>
    <!--/.carousel-->
  </section>
  <!--/#main-slider-->