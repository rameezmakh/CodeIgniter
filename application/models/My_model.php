<?php
class My_model extends CI_Model
{
	public function firstName()
	{
		$lastName = $this->lastName();
		return "Rameez ".$lastName ;
	}

	private function lastName()
	{
		return "Makhdoomi";
	}
}
?>