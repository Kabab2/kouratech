<?php 
class Histo_conex_adp
{
	private $id_historique_adp;
	private $id_adp;
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
	public function getId_historique_adp()
	{
		return $this->id_historique_adp;
	}
	public function getId_adp()
	{
		return $this->id_adp;
	}
	public function getUser_id()
	{
		return $this->user_id;
	}
	public function getDate_vu()
	{
		return $this->date_vu;
	}
	public function setId_historique_adp($id_historique_adp)
	{
		$this->id_historique_adp=$id_historique_adp;
	}
	public function setId_adp($id_adp)
	{
		$this->id_adp=$id_adp;
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