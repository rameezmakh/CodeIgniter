<?php

	class User_details extends CI_Controller
	{
		public function index()
		{
			$this->load->model('user_model');
			$data['user_array'] = $this->user_model->return_users();
			$this->load->view('user_details',$data);

		}
	}