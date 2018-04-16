<?php

// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) {
  exit;
}

if (!class_exists("CMT_Customize_Login_Screen")) :
  /**
   * Customize the user login screen to show CMT brand.
   */
  class CMT_Customize_Login_Screen {
    public static function init() {
      self::changeDefaultLogo();
    } // init()
    
    /**
     * Changes the logo from WordPress to CMT.
     */
    private function changeDefaultLogo() { ?>
      <style type="text/css">
        #login h1 a, .login h1 a {
          background-image: url("https://www.celmatrixtechnologies.com/wp-content/uploads/2018/02/00001_Celmatrix_Logo_PAGE10.png");
          height: 79px;
          width: 350px;
          background-size: 350px auto;
          background-repeat: no-repeat;
          padding-bottom: 30px;
        }
      </style>
    <?php } // changeDefaultLogo()
  } // CMT_Customize_Login_Screen

endif; // class exists check

?>