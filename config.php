<?php  // Moodle configuration file

unset($CFG);
global $CFG;
$CFG = new stdClass();

$CFG->dbtype    = 'mariadb';
$CFG->dblibrary = 'native';
$CFG->dbhost    = '5525f9a4e0b8cdf2f400025';
$CFG->dbname    = 'aula';
$CFG->dbuser    = '';
$CFG->dbpass    = 'J6m6CP';
$CFG->prefix    = 'mdl_';
$CFG->dboptions = array (
  'dbpersist' => 0,
  'dbport' => 59106,
  'dbsocket' => '',
);

$CFG->wwwroot   = 'http://cursos.sawers.com.bo';
$CFG->dataroot  = '/var/lib/openshift/5525f8944382ec25oodledata';
$CFG->admin     = 'admin';

$CFG->directorypermissions = 0777;

require_once(dirname(__FILE__) . '/lib/setup.php');

// There is no php closing tag in this file,
// it is intentional because it prevents trailing whitespace problems!
