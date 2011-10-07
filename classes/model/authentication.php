<?php

namespace NinjAuth;

class Model_Authentication extends \Orm\Model {
	protected static $_observers = array(
		'\NinjAuth\Observer_Authentications',
		'Orm\Observer_CreatedAt' => array('before_insert'),
		'Orm\Observer_UpdatedAt' => array('before_save'),
		
	);
}
