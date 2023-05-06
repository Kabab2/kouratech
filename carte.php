<?php 
class Carte
{
	private $id_carte;
	private $tube;
	private $ville;
	private $quartier;
	private $operation;
	private $legende;
	private $originalite;
	private $echelle;
	private $date_carte;
	private $cote;
	private $lien;
	
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
	public function getId_carte()
	{
		return $this->id_carte;
	}
	public function getTube()
	{
		return $this->tube;
	}
	public function getVille()
	{
		return $this->ville;
	}
	public function getQuartier()
	{
		return $this->quartier;
	}
	public function getOperation()
	{
		return $this->operation;
	}
	public function getLegende()
	{
		return $this->legende;
	}
	public function getOriginalite()
	{
		return $this->originalite;
	}
	public function getEchelle()
	{
		return $this->echelle;
	}
	public function getDate_carte()
	{
		return $this->date_carte;
	}
	public function getCote()
	{
		return $this->cote;
	}
	public function getLien()
	{
		return $this->lien;
	}
	public function setId_carte($id_carte)
	{
		$this->id_carte=$id_carte;
	}
	public function setTube($tube)
	{
		$this->tube=$tube;
	}
	public function setVille($ville)
	{
		$this->ville=$ville;
	}
	public function setQuartier($quartier)
	{
		$this->quartier=$quartier;
	}
	public function setOperation($operation)
	{
		$this->operation=$operation;
	}
	public function setLegende($legende)
	{
		$this->legende=$legende;
	}
	public function setOriginalite($originalite)
	{
		$this->originalite=$originalite;
	}
	public function setEchelle($echelle)
	{
		$this->echelle=$echelle;
	}
	public function setDate_carte($date_carte)
	{
		$this->date_carte=$date_carte;
	}
	public function setCote($cote)
	{
		$this->cote=$cote;
	}
	public function setLien($lien)
	{
		$this->lien=$lien;
	}
}
 ?>