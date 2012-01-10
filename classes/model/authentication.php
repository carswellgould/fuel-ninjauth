<?php

namespace NinjAuth;

class Model_Authentication extends \Orm\Model {
	
	public static $_properties = array(
		'id', 'provider', 'uid', 'access_token', 'secret', 'expires', 'refresh_token', 'user_id', 'profile_fields', 'created_at', 'updated_at'
	);
	
	protected static $_observers = array(
		'\NinjAuth\Observer_Authentications',
		'Orm\Observer_CreatedAt' => array(
			'events' => array('before_insert'),
			'mysql_timestamp' => false,
		),
		'Orm\Observer_UpdatedAt' => array(
			'events' => array('before_save'),
			'mysql_timestamp' => false,
		),
	);
}
