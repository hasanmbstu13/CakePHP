<?php 

class Post extends AppModel{
		public $belongsTo = 'User'; //many to one relationship
/*	public $belongsTo = array(
		'User' => array(
			'className' => 'User',
			'foreignKey' => 'user_id'
			)
		);
*/
}
