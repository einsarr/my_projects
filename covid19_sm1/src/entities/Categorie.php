<?php
use Doctrine\ORM\Annotation as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @Entity @Table(name="categorie")
 **/
class Categorie
{
    /** @Id @Column(type="integer") @GeneratedValue **/
    private $id;
    /** @Column(type="string") **/
    private $libelle;
   /** @Column(type="string") **/
    private $description;
    
    public function __construct()
    {
    }
    public function getId()
    {
        return $this->id;
    }
    public function setId($id)
    {
        $this->id = $id;
    }

    public function getLibelle()
    {
        return $this->libelle;
    }
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;
    }

    public function getDescription()
    {
        return $this->description;
    }
    
    public function setDescription($description)
    {
        $this->description = $description;
    }
    

}

?>