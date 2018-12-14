<div class="lates">
    <div class="container">
      <div class="text-center">
        <h2>Berita Terbaru</h2>
      </div>
      <div class="col-md-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
        <img src="images/4.jpg" class="img-responsive" />
        <h3>Diklat Teknis Pegawai Perpustakaan</h3>
        <p>Pada akhir tahun 2017 kepala UPT Perpustakaan IAHN-TP Palangka Raya berserta tiga orang staff mengikuti diklat teknis perpustakaan di Jakarta selama 16 (enam belas) hari kalender.
        </p>
      </div>

      <div class="col-md-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
        <img src="images/4.jpg" class="img-responsive" />
        <h3>Visitasi dan Kunjungan</h3>
        <p>Dalam rangka meningkatkan kualitas layanan terhadap pemustaka, Perpustakaan IAHN-TP Palangka Raya menerima kunjungan sekaligus divisitasi oleh Perpustakaan Nasional Republik Indonesia.
        </p>
      </div>

      <div class="col-md-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="900ms">
        <img src="images/4.jpg" class="img-responsive" />
        <h3>Workshop</h3>
        <p>Perpustakaan IAHN-TP Palangka Raya telah melaksanakan Workshop
        </p>
      </div>
    </div>
  </div>
  
  <?php
  $_GET['p'] = "news"; 
 
    if(isset($_GET['p'])) {    
      switch ($_GET['p']) {
      case ''             : $page_title = __('Collections'); break;
      case 'show_detail'  : $page_title = __("Record Detail"); break;              
      case 'member'       : $page_title = __("Member Area"); break;              
      case 'member'       : $page_title = __("Member Area"); break;              
      default             : $page_title; break; }            
    } else {
      $page_title = __('Collections');  
    }
    echo $_GET['p'];
          // Generate Output
          // catch empty list
        
            echo $main_content;
       
      function news_list_tpl($title, $path, $date, $summary) {
        echo $_GET['p'];
      ?>
        <div class="col-md-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
          <img src="images/4.jpg" class="img-responsive" />
          <h3><?php echo $title ?></h3>
          <p><?php echo $date ?><br/>
            <?php echo $summary ?>...
          </p>
          <div class="content-readmore"><a class="btn btn-info btn-small" href="<?php echo SWB.'index.php?p='.$path ?>"><?php echo __('Read More') ?></a></div>
        </div>

      <?php
      }