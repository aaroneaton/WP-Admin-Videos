<?php

require_once( '../../wp-admin-vids.php' );

class WP_Vids_Tests extends WP_UnitTestCase {

  private $plugin;

  function setUp() {
  
    parent::setUp();
    $this->plugin = $GLOBALS['wp-admin-vids'];
  
  } // end setUp

  function testPluginInitialization() {
    $this->assertFalse( null == $this->plugin );
  } // end testPluginInitialization



} // end class WP_Vids_Tests
