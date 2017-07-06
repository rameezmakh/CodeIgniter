<?php
	class User_model extends CI_Model
	{
		function return_users()
		{
			$this->load->database();// This statement will load the Database;
			//$query = $this->db->get('users'); Same as "SELECT * from users"

			$query = $this->db->get_where('users',array('name'=>'rameez'));
			// SELECT * from users WHERE 'name'="rameez" AND company=Green Packet;
			$query->result_array();
			// return ["username" =>'Rameez',
			// 		"company" =>'Green Packet',
			// 		"Location" => 'Kelenajaya'
			//  ];
			// echo "<pre>";
			return $query->result_array();
			// echo "</pre>";
		}
	}