<?php
class FirePHPComponent {
	private $instance;
 
	public function __construct() {
		$ob_setting = ini_get('output_buffering');
		if (!$ob_setting) {
			ob_start();
		}
		$this->instance = FirePHP::getInstance(true);
		$this->instance->setEnabled(Configure::read('debug'));
	}
 
	public function __call($name, $args) {
		return call_user_func_array(array($this->instance, $name), $args);
	}
}
?>
