<?php 

class Post extends AppModel{
		public $belongsTo = 'User'; //many to one relationship

		public $validate = array(
				'title'=>'notEmpty',
				'user_id'=>'numeric'
				/*'year'=>array(
					'rule' => 'numeric',
					'message' => 'Please enter a 4 digit year.'
					)*/
				);

/*	public $belongsTo = array(
		'User' => array(
			'className' => 'User',
			'foreignKey' => 'user_id'
			)
		);
*/
}
