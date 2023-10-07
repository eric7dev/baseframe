<?php

# Main Session Model Class

class Session {
  public $name='anonymous';
  public $sskey='00000000';
  public $hash='00000000';
  public $status=false;

  public function __construct () { echo "test"; }
  public function session_new ($data) { echo "test"; }
  public function session_kill ($data) { echo "test"; }
  public function session_timeout ($data) { echo "test"; }
  public function session_status ($data) {
    if ($this->status) {
      echo 'loged';
    }else{
      echo 'not loged';
    }
  }
}

?>
