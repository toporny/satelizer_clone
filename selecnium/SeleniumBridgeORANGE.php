<?php
use SeleniumBridge;
/*
 * ORANGE extension to main Bridge
 */

class Orange extends Main {

    public $envsArray = array(
        'devorange' => array('server' => 'devcreek', 'login' => 'selenium',  'password' => 'sdfERFe4', 'dbname' => 'OrangeSpainBaseline', 'database_auth_dbname' => 'AuthBaseline'),
        'intorange' => array('server' => 'testdb',   'login' => 'selenium',  'password' => 'sdfERFe4', 'dbname' => 'OrangeSpain_ORMB_120_INTERNAL', 'database_auth_dbname' => 'Auth_ORMB_120_INTERNAL'),
        'extorange' => array('server' => 'testdb',   'login' => 'selenium',  'password' => 'sdfERFe4', 'dbname' => 'OrangeSpain_ORMB_120_EXTERNAL', 'database_auth_dbname' => 'Auth_ORMB_120_EXTERNAL' )
    );

    function __construct($env) {
	parent::__construct($env);

    }

    public function __call($name, $arguments)
    {
        if(method_exists($this, $name)) {
    	    $this->$name($arguments);
        }
	else {
	    $oMessage = new \Messages\Message();
	    $methods = get_class_methods($this);
	    $available_commands = '';
	    foreach ($methods as $method) {
	      if (substr($method,0,6)=='selGet') $available_commands .= $method. ' ';
	    }
	    $oMessage->setMessage('unknown ACTION. Available actions: '.$available_commands)->setStatus(-1);
	    return $oMessage;
	}
   }

    public function selGetFreeNumber() {
        echo "orange\n";
    }
}
