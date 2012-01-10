<?php
namespace NinjAuth;

class Observer_Authentications extends \Orm\Observer {

    public function before_save(\Orm\Model $model)
    {
    	$model->profile_fields = serialize($model->profile_fields);
    }
    public function after_save(\Orm\Model $model){
    	$model->profile_fields = unserialize($model->profile_fields);
    }
    public function after_create(\Orm\Model $model){
    	if(is_string($model->profile_fields))
    		$model->profile_fields = unserialize($model->profile_fields);
    }
    public function after_load(\Orm\Model $model){
        if($model->profile_fields == '')
            $model->profile_fields = array();
        else if(is_string($model->profile_fields))
            $model->profile_fields = unserialize($model->profile_fields);        
    }
}
