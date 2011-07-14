#!/usr/bin/php
<?php
/**
 * Example of use for PHPCLIParser
 * 
 * Use this file to make your tests customizing options' setting.
 * 
 * @package    PHPCLIParser
 * @author     Vito Tardia <info@vtardia.com>
 * @copyright  2011 Vito Tardia <http://www.vtardia.com>
 * @license    http://www.opensource.org/licenses/gpl-3.0.html GPL-3.0
 * @version    1.0
 * @since      File available since Release 1.0
 *
 */

// Include CLI library file
require_once 'lib/CLIParser.class.php';

// Define short options list. 
// A colon (:) after an option denotes a required attribute
$shortOptions = 'vo:';

// Define long options list
// Each option is an array structured like this: 
//  - optionName (string)
//  - needs argument (bool)
//  - short option equivalent (char)
$longOptions = array(
	array('authinfo', TRUE),
	array('name', TRUE),
	array('verbose', FALSE, 'v'),
	array('output', TRUE, 'o'),
);

// Instance a new parser: the arguments are taken directly from the command line
$cli = new CLIParser($shortOptions, $longOptions);

// Get parsed values
$me = $cli->program();
$options = $cli->options();
$args = $cli->arguments();

// Display results
echo "\n";
echo "## Program: ";
var_dump($me);
echo "\n";

echo "## Options: ";
var_dump($options);
echo "\n";

echo "## Arguments: ";
var_dump($args);
echo "\n";

?>