<?php 
class Histo_conex_vpl
{
	private $id_historique_vpl;
	private $id_vpl;
	private $user_id;
	private $date_vu;
	public function __construct($data)
	{
		$this->initiale_maj($data);
	}
	public function initiale_maj(array $data)
	{
		foreach ($data as $key => $value) 
		{
			$method ='set'.ucfirst($key);
			if (method_exists($this,$method)) 
			{
				$this->$method($value);
			}
		}
	}
	public function getId_historique_vpl()
	{
		return $this->id_historique_vpl;
	}
	public function getId_vpl()
	{
		return $this->id_vpl;
	}
	public function getUser_id()
	{
		return $this->user_id;
	}
	public function getDate_vu()
	{
		return $this->date_vu;
	}
	public function setId_historique_vpl($id_historique_vpl)
	{
		$this->id_historique_vpl=$id_historique_vpl;
	}
	public function setId_vpl($id_vpl)
	{
		$this->id_vpl=$id_vpl;
	}
	public function setUser_id($user_id)
	{
		$this->user_id=$user_id;
	}
	public function setDate_vu($date_vu)
	{
		$this->date_vu=$date_vu;
	}
}
 ?>