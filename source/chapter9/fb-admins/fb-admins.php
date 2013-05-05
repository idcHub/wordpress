<?php
/*
Plugin Name: Fb admins
Plugin URI: http://www.prime-strategy.co.jp/
Description: Facebook의 fb:admins 패러미터를 관리화면에서 설정합니다.
Author: Prime Strategy Co.,Ltd.
Version: 1.0
Author URI: http://www.prime-strategy.co.jp/
*/

function add_fb_admins_menu() {
  add_options_page('Fb admins 설정', 'Fb admins', 'manage_options', 'fb-admins.php', 'fb_admins_page' );
}
add_action('admin_menu', 'add_fb_admins_menu');

function fb_admins_page() {
?>
<div class="wrap">
  <?php screen_icon(); ?>
  <h2>Fb admins</h2>
<?php
  if (isset($_POST['fb_admins'])) {
    check_admin_referer('fb_admins_action', 'fb_admins_nonce');
    $fb_admins = stripslashes($_POST['fb_admins']);
    if (is_numeric($fb_admins)) {
      update_option('fb_admins', $fb_admins);
      echo '<p>저장했습니다.</p>';
    } else {
      echo '<p style="color: #F00">숫자로 입력합니다.</p>';
    }   
  } else {
    $fb_admins = get_option('fb_admins');
    echo '<p>관리자 ID을 입력합니다.</p>';
  }
  
?>
  <form action="" method="post">
    <?php wp_nonce_field('fb_admins_action', 'fb_admins_nonce'); ?>
    <input type="text" name="fb_admins" value="<?php echo esc_attr($fb_admins); ?>" />
    <?php submit_button(); ?>
  </form>
</div>
<?php
}

function fb_admins() {
  echo esc_attr(get_option('fb_admins'));
}