<?php 

class Post extends AppModel{
		public $belongsTo = 'User';
/*	public $belongsTo = array(
		'User' => array(
			'className' => 'User',
			'foreignKey' => 'user_id'
			)
		);
*/
}
