<?php
require 'SeleniumBridgeDNA.php';
require 'SeleniumBridgeORANGE.php';
require 'SeleniumBridgePOKERSTARS.php';
require 'GetOptReq.php';
require 'Message.php';

//$message = new Message\Message();

$errors = 0;
$cli = (PHP_SAPI === 'cli' || empty($_SERVER['REMOTE_ADDR']));
$opts = getoptreq('project:env:action:value:', array('project:', 'env:', 'action:', 'value:',));
  if (empty($opts['project'])) $errors++;
  if (empty($opts['env'])) $errors++;
  if ($errors > 0) {;
    if ($cli) {
      print "usage:\n".$argv[0]." --project=[ORMB|DNAMB|PSMB] --env=[INT|EXT|DEV] --action[getFreeNumber|getGetPinFromDatabase|getProxyNumber|getLinkedCardPhonePassword] --value=12345678\n";
      print $argv[0]." --project=ORMB --env=INT --action=getGetPinFromDatabase --value=123456789\n";
    }
    else {
	print "<pre>usage:<br>SeleniumBridge.php?project=ORMB&env=INT<br>";
$var = <<<EOF
<pre>SELENIUM BRIDGE - 2013 Przemyslaw Rzeznik /przemyslaw.rzeznik@3vcorporate.com/

docs:
  http://selenium.front.local/README.md

available commands:
  - getFreeNumber
  - getGetPinFromDatabase
  - getProxyNumber
  - getLinkedCardPhonePassword

example:
  http://selenium.front.local/?action=getGetPinFromDatabase&env=intdna&value=12345678
  http://selenium.front.local/?action=getFreeNumber&env=intdna
EOF;
	print $var; 
	exit;
    }
    exit(1);
  }

    
    switch ($opts['project']) {
        case 'DNAMB': $bridge = new SeleniumBridge\Dna($opts);break;
        case 'ORMB': $bridge = new SeleniumBridge\Orange($opts);break;
        //case 'PSMB': $bridge = new SeleniumBridge\Pokerstars($opts);break;
	default: 
	    $message_init = new \Messages\Message();
	    $message_init->setMessage('variable PROJECT is not set. Available projects: DNAMB, ORMB, PSMB')->setStatus(-1);
	    print $message_init->getAllMessages();
        exit;
    }

    $action = $opts['action'];
    $result =  $bridge->$action();
    print $result->getAllMessages();
