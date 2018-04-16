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
      add_action("login_enqueue_scripts", array($this, "changeDefaultLogo"));
    } // init()
    
    /**
     * Changes the logo from WordPress to CMT.
     */
    private function changeDefaultLogo() { ?>
      <style type="text/css">
        #login h1 a, .login h1 a {
            background-image: url("https://dv1ko3cnumxhb.cloudfront.net/celmatrixtechnologies.com/images/logo-wp-login.jpg");
            height:65px;
            width:320px;
            background-size: 320px 65px;
            background-repeat: no-repeat;
                  padding-bottom: 30px;
          }
      </style>
    <?php } // changeDefaultLogo()
  } // CMT_Customize_Login_Screen

endif; // class exists check

?>