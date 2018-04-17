<?php

// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) {
  exit;
}

if (!class_exists("CMT_Redirect_Subscriber")) :

  class CMT_Redirect_Subscriber {
    /**
     * Removes WP Admin Bar for Subscriber.
     */
    public static function init($redirect_to, $request, $user) {
      return ( is_array( $user->roles ) && in_array( 'subscriber', $user->roles ) ) ? site_url("/terms-of-use/") : admin_url();
    } // init()
  } // CMT_Redirect_Subscriber

endif;

?>