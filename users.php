<?php
class Users
{
	private $user_id;
	private $nom_user;
	private $prenom_user;
	private $contact;
	private $email;
	private $pwd;
	private $confirmation;
	private $photo_user;
	private $actif;
	private $groupe_id;
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
	
	public function getUser_id()
	{
		return $this->user_id;
	}
	public function getNom_user()
	{
		return $this->nom_user;
	}
	public function getPrenom_user()
	{
		return $this->prenom_user;
	}
	public function getContact()
	{
		return $this->contact;
	}
	public function getEmail()
	{
		return $this->email;
	}
	public function getPwd()
	{
		return $this->pwd;
	}
	public function getConfirmation()
	{
		return $this->confirmation;
	}
	public function getPhoto_user()
	{
		return $this->photo_user;
	}
	public function getActif()
	{
		return $this->actif;
	}
	public function getGroupe_id()
	{
		return $this->groupe_id;
	}	
	public function setUser_id($user_id)
	{
		 $this->user_id=$user_id;
	}
	public function setNom_user($nom_user)
	{
		 $this->nom_user=$nom_user;
	}
	public function setPrenom_user($prenom_user)
	{
		 $this->prenom_user=$prenom_user;
	}
	public function setContact($contact)
	{
		 $this->contact=$contact;
	}
	public function setEmail($email)
	{
		 $this->email=$email;
	}
	public function setPwd($pwd)
	{
		 $this->pwd=$pwd;
	}
	public function setConfirmation($confirmation)
	{
		 $this->confirmation=$confirmation;
	}
	public function setphoto_user($photo_user)
	{
		 $this->photo_user=$photo_user;
	}
	public function setActif($actif)
	{
		 $this->actif=$actif;
	}
	public function setGroupe_id($groupe_id)
	{
		 $this->groupe_id=$groupe_id;
	}
}
?>