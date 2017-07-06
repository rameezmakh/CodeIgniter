<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Test extends CI_Controller {

	public function great()
	{
		echo "hello";
	}

	public function testModel()
	{
		$this->load->model('Authentication_from_google','smallName');
		$firstName = $this->smallName->firstName();
		echo $firstName;
	}
}