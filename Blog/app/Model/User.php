<?php 

class User extends AppModel
{
	public $hasMany = 'Post'; //one to many relationship
	//public $displayField = 'email';//i.e what is the displayed in the dropdown menu	

/*	public $hasMany = array(
		'Post' => array(
			'className' => 'Post',
			'foreignKey' => 'user_id'
			)
		);*/
}

?>