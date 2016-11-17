<?php
use SeleniumBridge;
/*
 * DNA extension to main Bridge
 */

class Dna extends Main {
    public $available_actions = array ('getFreeNumber', 'getPin', 'getProxy', 'getLinkedCardPassword');

    public $envsArray = array(
	'dev'  => array('server' => 'devcreek',  'login' => 'selenium',   'password' => 'sdfERFe4',   'dbname' => 'DNABaseline2',        'database_auth_dbname' => 'AuthBaseline' ),
	'int'  => array('server' => 'testdb',    'login' => 'selenium',   'password' => 'sdfERFe4',   'dbname' => 'DNA_DNA_90_INTERNAL', 'database_auth_dbname' => 'Auth_DNA_90_INTERNAL' ),
	'ext'  => array('server' => 'testdb',    'login' => 'selenium',   'password' => 'sdfERFe4',   'dbname' => 'DNA_DNA_90_EXTERNAL', 'database_auth_dbname' => 'Auth_DNA_90_EXTERNAL' )
    );

    public function selGetFreeNumber() {
        echo "Dna\n";
    }
}
