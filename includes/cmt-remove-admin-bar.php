<?php

// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) {
  exit;
}

if (!class_exists("CMT_Remove_Admin_Bar")) :

  class CMT_Remove_Admin_Bar {
    public static function init() {
      self::removeAdminForSubscriber();
    } // init()
    
    /**
     * Removes WP Admin Bar for Subscriber.
     */
    private function removeAdminForSubscriber() {
      if (!current_user_can('administrator') && !is_admin()) {
        show_admin_bar(false);
      }
    } // removeAdminForSubscriber()
  } // CMT_Remove_Admin_Bar

endif;

?>