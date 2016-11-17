<?php
namespace SeleniumBridge;

class Main {

    public $oMessage;
    public $envsArray;
    private $db_access;

    public function DbInit($env) {

        $env = !empty($env) ? $env : 'default';
        $this->db_access = $this->envsArray[$env];
        $this->db_access['dbname'] = empty($_GET['database_dbname']) ? $this->db_access['dbname'] : $_GET['database_dbname'];
        $this->db_access['database_auth_dbname'] = empty($_GET['database_auth_dbname']) ? $this->db_access['database_auth_dbname'] : $_GET['database_auth_dbname'];
        $this->db = new \mysqli($this->db_access['server'], $this->db_access['login'], $this->db_access['password'], $this->db_access['dbname']);
	if ($this->db->connect_errno) {
	    $debug = print_r($this->db_access, true);
	    $this->oMessage->setMessage('Problem with DB connection')->setStatus(-1)->setDebug($debug);
	}
    }

    function __construct($env) {
        $this->oMessage = new \Messages\Message();
        $this->oMessage->setProject($env['project']);
        $this->oMessage->setEnv($env['env']);
        $this->oMessage->setAction($env['action']);
        $this->oMessage->setValue($env['value']);

	switch ($env) {
	    case 'devorange' :  parent::DbInit($this->envsArray['devorange']); break;
            case 'intorange' :  parent::DbInit($this->envsArray['intorange']); break;
	    case 'extorange' :  parent::DbInit($this->envsArray['extorange']); break;
	    default: 
		$this->oMessage->setMessage('ENV parametr not defined')->setStatus(-1);
		return $this->oMessage;
		exit;
	    break;
	}

    }

    public function selGetPin() {
	if ($this->oMessage->getValue() == '') {
	    $this->oMessage->setMessage('telephone number (value) is not set')->setStatus(-1);
            return $this->oMessage;
	}

	$query = 'SELECT value as value FROM communications WHERE RIGHT(identifier, 8) =  RIGHT("'.$this->oMessage->getValue().'", 8)  order by id desc limit 1' ;
        $result = $this->db->query($query) ;
        $row = $result->fetch_row();
        if ($result->num_rows == 0) { $this->oMessage->setMessage('problem with getting PIN')->setStatus(-1)->setDebug($query); }
        else  $this->oMessage->setMessage($row[0])->setStatus(1)->setDebug($query);
        return $this->oMessage;
    }
}

