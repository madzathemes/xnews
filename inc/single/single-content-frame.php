<?php function xnews_single_content_frame() { ?>
<?php $review = get_post_meta(get_the_ID(), "magazin_review_location", true); if($review=="before"){ if(function_exists("mt_review_title")) { echo mt_review_single(); }} ?>
    <div class="mt-single-02">
      <div class="row">
        <div class="col-md-1 mt-signle-share-sidebar"><?php xnews_single_share(); ?></div>
        <div class="entry-content col-md-11" itemprop="mainContentOfPage">
          <div><?php xnews_single_count(); ?></div>
          <?php $optionz = get_option("magazin_theme_options");
          if (!empty($optionz['article_ad_top'])) {  ?>
            <div class="advertise text-center">
              <?php echo do_shortcode(html_entity_decode($optionz['article_ad_top'])); ?>
            </div>
          <?php } ?>
          <?php the_content(); ?>

          <div><?php xnews_single_bottom(); ?></div>
          </div>
      </div>
    </div>

<?php } ?>
