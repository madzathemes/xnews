<?php function xnews_single_content_frame() { ?>
<?php $review = get_post_meta(get_the_ID(), "magazin_review_location", true); if($review=="before"){ if(function_exists("mt_review_title")) { echo mt_review_single(); }} ?>
    <div class="mt-single-02">
      <div class="row">
        <div class="col-md-1 mt-signle-share-sidebar"><?php xnews_single_share(); ?></div>
        <div class="entry-content col-md-11" itemprop="mainContentOfPage">
          <div><?php xnews_single_count(); ?></div>
          <?php the_content(); ?></div>

          <?php xnews_single_bottom_after(); ?>
      </div>
    </div>

<?php } ?>
