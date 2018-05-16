
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
