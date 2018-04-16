<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) {
  exit;
}

if (!class_exists(CMT_Customize_Login_Screen)) :
  /**
   * Customize the user login screen to show CMT brand.
   */
  class CMT_Customize_Login_Screen {
    public static function init() {
      
    } // init()
  } // CMT_Customize_Login_Screen

endif; // class exists check

?>