
Data Get from DataBase
<?php
  global $wpdb;
  $result = $wpdb->get_results("SELECT Ihrss_path FROM wp_Ihrss_plugin");
?>

<?php foreach($result as $res){ ?>
  <li class='bndv-img'>
      <img alt="Education" width="100%" src="<?php echo $res->Ihrss_path; ?>" >
  </li>
<?php } ?>



Photo Gallery
<?php
  global $wpdb;
  $result = $wpdb->get_results("SELECT * FROM `wp_bwg_image` order By `order` ASC ");
?>

<?php foreach($result as $res){ ?>
  <div class="item">
    <div class="gallery-img-box" data-src="<?php echo site_url().'/wp-content/uploads/photo-gallery'.$res->image_url; ?>">
        <a href="#"><figure><img src="<?php echo site_url().'/wp-content/uploads/photo-gallery'.$res->thumb_url; ?>" alt="<?php echo $res->alt; ?>"></figure></a>
      </div>
  </div>
<?php } ?>


// Get Blog
// get page description
<?php
  $post_7 = get_post(7); 
  $excerpt = $post_7->post_excerpt;
  echo $excerpt
?>
<?php
  $args = array(
      'posts_per_page'   => 3,
      'offset'           => 0,
      'orderby'          => 'date',
      'order'            => 'DESC',
      'post_type'        => 'blog',
      'author_name'      => '',
      'post_status'      => 'publish',
      'suppress_filters' => true 
  );
  $posts_array = get_posts( $args );
  ?>
  <?php foreach ( $posts_array as $recent_post ) { 
      $post_title = $recent_post->post_title;
      $post_image = wp_get_attachment_url( get_post_thumbnail_id($recent_post->ID), 'thumbnail' );
  } ?>
