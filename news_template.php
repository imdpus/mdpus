


<?php
function news_list_tpl($title, $path, $date, $summary) {
$tanggal=date("d-M-Y", strtotime($date));
?>

<div class="blog-item">
            <div class="row">
              <div class="col-xs-12 col-sm-2">
                <div class="entry-meta">
                  <span id="publish_date"><?php echo $tanggal ?></span>
                  <span><i class="fa fa-user"></i> admin</span>                  
                  <!--<span><i class="fa fa-heart"></i><a href="#">56 Likes</a></span>-->
                </div>
              </div>

              <div class="col-xs-12 col-sm-10 blog-content">
                <a href="#"><img class="img-responsive img-blog" src="images/news/2.jpg" width="100%" alt="" /></a>
                <h4><?php echo $title ?></h4>
                <p><?php echo $summary ?>...</p>
                <a class="btn btn-primary readmore" href="<?php echo SWB.'index.php?p='.$path ?>"><?php echo __('Read More') ?> <i class="fa fa-angle-right"></i></a>
              </div>
            </div>
          </div>
<?php
}
