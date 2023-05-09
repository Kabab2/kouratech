<?php 
class Adp
{
	private $id_adp;
	private $annee;
	private $code;
	private $boite;
	private $logement;
	private $document;
	private $date_document;
	private $client;
	private $fonctions;
	private $adresse;
	private $contact;
	private $ville;
	private $commune_quartier;
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
	public function getId_adp()
	{
		return $this->id_adp;
	}
	public function getAnnee()
	{
		return $this->annee;
	}
	public function getCode()
	{
		return $this->code;
	}
	public function getBoite()
	{
		return $this->boite;
	}
	public function getLogement()
	{
		return $this->logement;
	}
	public function getDocument()
	{
		return $this->document;
	}
	public function getDate_document()
	{
		return $this->date_document;
	}
	public function getClient()
	{
		return $this->client;
	}
	public function getFonctions()
	{
		return $this->fonctions;
	}
	public function getAdresse()
	{
		return $this->adresse;
	}
	public function getContact()
	{
		return $this->contact;
	}
	public function getVille()
	{
		return $this->ville;
	}
	public function getCommune_quartier()
	{
		return $this->commune_quartier;
	}
	public function getCote()
	{
		return $this->cote;
	}
	public function getLien()
	{
		return $this->lien;
	}
	public function setId_adp($id_adp)
	{
		$this->id_adp=$id_adp;
	}
	public function setAnnee($annee)
	{
		$this->annee=$annee;
	}
	public function setCode($code)
	{
		$this->code=$code;
	}
	public function setBoite($boite)
	{
		$this->boite=$boite;
	}
	public function setLogement($logement)
	{
		$this->logement=$logement;
	}
	public function setDocument($document)
	{
		$this->document=$document;
	}
	public function setDate_document($date_document)
	{
		$this->date_document=$date_document;
	}
	public function setClient($client)
	{
		$this->client=$client;
	}
	public function setFonctions($fonctions)
	{
		$this->fonctions=$fonctions;
	}
	public function setAdresse($adresse)
	{
		$this->adresse=$adresse;
	}
	public function setContact($contact)
	{
		$this->contact=$contact;
	}
	public function setVille($ville)
	{
		$this->ville=$ville;
	}
	public function setCommune_quartier($commune_quartier)
	{
		$this->commune_quartier=$commune_quartier;
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

<!-- koura tech -->
Hello worl

Salut comment vous allez

Namadou vient d'arriver à la mosquée
