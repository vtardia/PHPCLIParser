<?php
/**
 * Complete suite for CLIParser
 * 
 * Tests are run sequentially, to stop on failure use
 * 
 * <code>phpunit --stop-on-failure CLIParserSuite</code>
 */

require_once 'PHPUnit/Framework.php';

// Test Case(s) to run
require_once 'CLIBasicTest.php';  // Basic Tests


class CLIParserSuite extends PHPUnit_Framework_TestSuite {

    public static function suite() {
        
		$suite =  new CLIParserSuite();

		$suite->addTestSuite('CLIBasicTest');

		return $suite;
    } // end function
 
    protected function setUp() {
        //print __METHOD__ . "\n";
    } // end function
 
    protected function tearDown() {
        //print __METHOD__ . "\n";
    } // end function
}
?>
