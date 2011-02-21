<?php
/* Upload Test cases generated on: 2011-02-21 18:02:11 : 1298311691*/
App::import('Model', 'Upload');

class UploadTestCase extends CakeTestCase {
	var $fixtures = array('app.upload');

	function startTest() {
		$this->Upload =& ClassRegistry::init('Upload');
	}

	function endTest() {
		unset($this->Upload);
		ClassRegistry::flush();
	}

}
?>