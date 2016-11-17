<?php
namespace Messages;

class Message {

  private $message = '';
  private $status = 0;
  private $debug = '';
  private $project = '';
  private $env = '';
  private $action = '';
  private $value = '';


  // -------------------------------
  public function setMessage($message) {
    $this->message = $message;
    return $this;
  }

  public function getMessage() {
    return $this->message;
  }

  // -------------------------------
  public function setStatus($status) {
    $this->status = $status;
    return $this;
  }
  public function getStatus() {
    return $this->status;
  }

  // -------------------------------
  public function getDebug() {
    return $this->debug;
  }

  public function setDebug($debug) {
    $this->debug = $debug;
    return $this;
  }

  // -------------------------------
  public function getProject() {
    return $this->project;
  }

  public function setProject($project) {
    $this->project = $project;
    return $this;
  }

  // -------------------------------
  public function getEnv() {
    return $this->env;
  }

  public function setEnv($env) {
    $this->env = $env;
    return $this;
  }
  // -------------------------------

  public function getAction() {
    return $this->action;
  }

  public function setAction($action) {
    $this->action = $action;
    return $this;
  }

  // -------------------------------
  public function getValue() {
    return $this->value;
  }

  public function setValue($value) {
    $this->value = $value;
    return $this;
  }

  // -------------------------------
  public function getAllMessages() {
    $array = array (
	'message'  => $this->message,
	'status'   => $this->status,
	'debug'      => $this->debug,
	'project'  => $this->project,
	'env'      => $this->env,
	'action'   => $this->action,
	'value'    => $this->value
    );

    if (PHP_SAPI === 'cli' || empty($_SERVER['REMOTE_ADDR'])) {
      $return = '';
      foreach ($array as $key => $item) {
         $return .= $key. ' = '. $item . "\n";
      }
      return $return."\n";
    } else 
        return json_encode($array);

  }

}
