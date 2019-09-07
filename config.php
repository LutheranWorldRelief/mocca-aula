<?php  // Moodle configuration file
require(dirname(__FILE__).'/../vendor/autoload.php');
//$dotenv = Dotenv\Dotenv::create('..');
$dotenv = Dotenv\Dotenv::create(__DIR__.'/../');
$dotenv->load();

unset($CFG);
global $CFG;
$CFG = new stdClass();

$CFG->dbtype    = 'mysqli';
$CFG->dblibrary = 'native';
$CFG->dbhost    = getenv('DBHOST');
$CFG->dbname    = getenv('DBNAME');
$CFG->dbuser    = getenv('DBUSER');
$CFG->dbpass    = getenv('DBPASS');
$CFG->prefix    = 'mdl_';
$CFG->dboptions = array (
  'dbpersist' => 0,
  'dbport' => '',
  'dbsocket' => '',
  'dbcollation' => 'utf8mb4_unicode_ci',
);

$CFG->wwwroot   = getenv('WWWROOT');
$CFG->dataroot  = getenv('DATAROOT');
$CFG->admin     = 'admin';

$CFG->directorypermissions = 0777;

require_once(__DIR__ . '/lib/setup.php');

// There is no php closing tag in this file,
// it is intentional because it prevents trailing whitespace problems!