<?php
/* Upload Fixture generated on: 2011-02-21 18:02:11 : 1298311691 */
class UploadFixture extends CakeTestFixture {
	var $name = 'Upload';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'name' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 75, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'license' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'file' => array('type' => 'string', 'null' => false, 'default' => NULL, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'basename' => array('type' => 'string', 'null' => false, 'default' => NULL, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'dirname' => array('type' => 'string', 'null' => false, 'default' => NULL, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'checksum' => array('type' => 'string', 'null' => false, 'default' => NULL, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'MyISAM')
	);

	var $records = array(
		array(
			'id' => 1,
			'name' => 'Lorem ipsum dolor sit amet',
			'created' => '2011-02-21 18:08:11',
			'modified' => '2011-02-21 18:08:11',
			'license' => 1,
			'file' => 'Lorem ipsum dolor sit amet',
			'basename' => 'Lorem ipsum dolor sit amet',
			'dirname' => 'Lorem ipsum dolor sit amet',
			'checksum' => 'Lorem ipsum dolor sit amet'
		),
	);
}
?>