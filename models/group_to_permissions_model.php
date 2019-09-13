<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');

require_once(FUEL_PATH.'models/Base_module_model.php');

class Group_to_permissions_model extends Base_module_model {
	
	public $foreign_keys = array('group_id' => array(GROUP_ACCESS_FOLDER=>'groups_model'),'permission_id'=>array('fuel'=>'permissions_model'));	
	public $required = array();
	
	function __construct()
	{
		parent::__construct('module_group_to_permissions'); // table name
	}
}

class Group_to_permission_model extends Data_record {

}
