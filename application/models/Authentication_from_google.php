<?php
	class Authentication_from_google extends CI_Model
	{
		public function firstName()
		{
			$lastName = $this->lastName();
			return "Rameez ".$lastName ;
		}

		public function lastName()
		{
			return "Makhdoomi" ;
		}
	}
?>