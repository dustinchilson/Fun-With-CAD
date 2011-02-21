<?php
class Upload extends AppModel {
    var $displayField = 'title';
    var $actsAs = array(
        'Media.Transfer',
        'Media.Coupler',
        'Media.Generator',
        'Media.Meta'
    );
    var $virtualFields = array(
        'path' => "CONCAT_WS('/', dirname, basename)"
    );
	var $name = 'Upload';
	var $validate = array(
		'name' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
        ),
		'size' => array(
			'rule' => array('checkSize' , '5M'
            )
		),
		'basename' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'dirname' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'checksum' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
        ),
        'file' => array(
			'size' => array(
                'rule' => array('checkSize', '5M')
            ),
            'extension' => array(
                'rule' => array('checkExtension', false, array(
                    'jpg',
                    'jpeg',
                    'png',
                    'tiff',
                    'gif')
                )
           ),
           'mimeType' => array(
               'rule' => array('checkMimeType', false, array(
                   'image/jpeg', 
                   'image/png', 
                   'image/tiff', 
                   'image/gif')
                )        
            )
        )
    );
    function transferTo($via, $from) {
		extract($from);

		$irregular = array(
			'image' => 'img',
			'text' => 'txt'
		);
		$name = Mime_Type::guessName($mimeType ? $mimeType : $file);

		if (isset($irregular[$name])) {
			$short = $irregular[$name];
		} else {
			$short = substr($name, 0, 3);
		}

		$path  = $short . DS;
		$path .= uniqid(); // <--- This is the important part.
		$path .= !empty($extension) ? '.' . strtolower($extension) : null;

		return $path;
	}
    
}
?>
