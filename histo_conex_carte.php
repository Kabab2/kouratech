<?php 
class Histo_conex_carte
{
	private $id_historique_carte;
	private $id_carte;
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
	public function getId_historique_carte()
	{
		return $this->id_historique_carte;
	}
	public function getId_carte()
	{
		return $this->id_carte;
	}
	public function getUser_id()
	{
		return $this->user_id;
	}
	public function getDate_vu()
	{
		return $this->date_vu;
	}
	public function setId_historique_carte($id_historique_carte)
	{
		$this->id_historique_carte=$id_historique_carte;
	}
	public function setId_carte($id_carte)
	{
		$this->id_carte=$id_carte;
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