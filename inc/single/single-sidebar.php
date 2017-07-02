<?php function xnews_single_sidebar() {
if ( false == get_theme_mod( 't_p_featured_post', false ) ) { $t_p_featured_post = esc_html__("Featured Post", "xnews");  } else { $t_p_featured_post = get_theme_mod( 't_p_featured_post' ); }
if ( false == get_theme_mod( 't_p_trending_posts', false ) ) { $t_p_trending_posts = esc_html__("Trending Posts", "xnews");  } else { $t_p_trending_posts = get_theme_mod( 't_p_trending_posts' ); }
?>
  <?php $allowed_html = array('ins' => array( 'class' => array(), 'style' => array(),'data-ad-client' => array(),'data-ad-slot' => array(),'data-ad-format' => array()), 'iframe' => array( 'id' => array(),'name' => array(),'src' => array(),'style' => array(),'scrolling' => array(),'frameborder' => array()), 'script' => array( 'async' => array(), 'type' => array(),'src' => array()), 'noscript' => array(), 'small' => array( 'class' => array()), 'img' => array( 'src' => array(), 'alt' => array(), 'class' => array(), 'width' => array(), 'height' => array() ), 'a' => array( 'href' => array(), 'title' => array() ), 'br' => array(), 'i' => array('class' => array()),  'em' => array(), 'strong' => array(), 'div' => array('class' => array()), 'span' => array('class' => array())); ?>
  <?php $option = get_option("xnews_theme_options"); ?>
  <?php $optionz = get_option("magazin_theme_options"); ?>
  <?php if ( is_active_sidebar( 'sidebar-single-widget-area' ) ) { ?>

    <?php dynamic_sidebar( 'sidebar-single-widget-area' ); ?>

  <?php } else { ?>

    <?php if  (!empty($optionz['sidebar_ad_top'])) {  ?>
      <div class="advertise text-center">
        <?php echo do_shortcode(html_entity_decode($optionz['sidebar_ad_top'])); ?>
      </div>
    <?php } ?>

    <?php if ( shortcode_exists( 'posts' ) ) { echo do_shortcode('[posts type=normal title="'. esc_html($t_p_featured_post) .'" title_type="center" review_star="off" offset="0" item_nr=1]'); } ?>

    <?php if  (!empty($optionz['sidebar_ad_middle'])) {  ?>
      <div class="advertise text-center">
        <?php echo do_shortcode(html_entity_decode($optionz['sidebar_ad_middle'])); ?>
      </div>
    <?php } ?>
    <?php if ( shortcode_exists( 'posts_trending' ) ) { ?>
    <h2 class="heading"><span><?php echo esc_html($t_p_trending_posts); ?></span></h2>
    <?php echo do_shortcode('[posts_trending type=trending-normal review_star="off" item_nr=5]'); } ?>
    <div class="space-20"></div>
    <?php if  (!empty($optionz['sidebar_ad_bottom'])) {  ?>
      <div class="advertise text-center">
        <?php echo do_shortcode(html_entity_decode($optionz['sidebar_ad_bottom'])); ?>
      </div>
    <?php } ?>

  <?php } ?>
<?php } ?>
