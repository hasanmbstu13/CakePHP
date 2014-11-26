<?php
/**
* 
*/
class TutorialsController extends AppController
{
	public function view()
	{
		$request = $this->Tutorial->find('all');
		$this->set('turorial',$request);
	}
	
	 
}