<?php

// If this file is called directly, abort.
if (! defined('WPINC')) {
    die;
}

ob_start();
?>

<div class="presentation-mode-container">
  <div class="presentation-mode-button">
    <div class="enable-pm">
      <?php include plugin_dir_path(__FILE__) . '../assets/enable_pm.svg'; ?>
    </div>
    <div class="disable-pm">
      <?php include plugin_dir_path(__FILE__) . '../assets/disable_pm.svg'; ?>
  </div>
</div>

<?php return ob_get_clean(); ?>