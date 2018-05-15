
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
