<?php
/*==================================================
MODELE MVC DEVELOPPE PAR Ngor SECK
ngorsecka@gmail.com
(+221) 77 - 433 - 97 - 16
PERFECTIONNEZ CE MODELE ET FAITES MOI UN RETOUR
POUR TOUTE MODIFICATION VISANT A L'AMELIORER.
VOUS ETES LIBRE DE TOUTE UTILISATION.
===================================================*/
namespace src\model; 

use libs\system\Model; 
	
class CategorieRepository extends Model{
	
	/**
	 * Methods with DQL (Doctrine Query Language) 
	 */
	public function __construct(){
		parent::__construct();
	}
	public function addCategorie($categorie)
	{
		if($this->db != null)
		{
			$this->db->persist($categorie);
			$this->db->flush();

			return $categorie->getId();
		}
	}
	public function listeCategories(){
		if($this->db != null)
		{
			return $this->db->createQuery("SELECT p FROM Categorie p")->getResult();
		}
	}
	public function getCategorie($id)
	{
		if($this->db != null)
		{
			return $this->db->getRepository('Categorie')->find(array('id' => $id));
		}
	}
	
	
	public function deleteCategorie($id){
		if($this->db != null)
		{
			$categorie = $this->db->find('Categorie', $id);
			if($categorie != null)
			{
				$this->db->remove($categorie);
				$this->db->flush();
			}else {
				die("Objet ".$id." does not existe!");
			}
		}
	}
	
	public function updateCategorie($categorie){
		if($this->db != null)
		{
			$getCategorie = $this->db->find('Categorie', $categorie->getId());
			if($getCategorie != null)
			{
				$getCategorie->setLibelle($categorie->getLibelle());
				$getCategorie->setAdresse($categorie->getAdresse());
				$getCategorie->setStandard($categorie->getStandard());
				$getCategorie->setNumero_categorie($categorie->getNumero_categorie());
				$this->db->flush();
			}else {
				die("Objet ".$categorie->getId()." does not existe!!");
			}	
		}
	}
	

	
	public function listeCategoriesById($id)
	{
		if($this->db != null)
		{
			return $this->db->getRepository('Categorie')->findBy(array('id' => $id));
		}
	}
	
	public function listeOfCategoriesById($id)
	{
		if($this->db != null)
		{
			return $this->db->createQuery("SELECT t FROM Categorie t WHERE t.id = " . $id)->getSingleResult();
		}
	}

	public function listeOfCategories()
	{
		if($this->db != null)
		{
			return $this->db->getRepository('Categorie')->findAll();
		}
	}
	
}