<?php
/*==================================================
MODELE MVC DEVELOPPE PAR Ngor SECK
ngorsecka@gmail.com
(+221) 77 - 433 - 97 - 16
PERFECTIONNEZ CE MODELE ET FAITES MOI UN RETOUR
POUR TOUTE MODIFICATION VISANT A L'AMELIORER.
VOUS ETES LIBRE DE TOUTE UTILISATION.
===================================================*/ 
use libs\system\Controller; 
use src\model\CategorieRepository;

class CategorieController extends Controller{
    private $data;
    public function __construct(){
        parent::__construct();
        session_start();
        if(isset($_SESSION['user_session'])) {
            $this->data['user'] = $_SESSION['user_session'];
        } else {
            $this->view->redirect('Login');
        }
    }
    /** 
     * url pattern for this method
     * localhost/projectName/Categorie/
     */

    public function liste(){
        $categorie = new CategorieRepository();
        $data['categories'] = $categorie->listeCategories();
       
        return $this->view->load("categories/liste",$data);
         
    }
    public function add(){
        $this->view->load("categories/add");
    }
     /** 
     * url pattern for this method
     * localhost/projectName/Categorie/add
     */
    public function save(){
        $categorie = new CategorieRepository();
        
        extract($_POST);
        $categorieObject = new Categorie();
        $categorieObject->setlibelle(addslashes($libelle));
        $categorieObject->setDescription(addslashes($description));
        $categorie->addCategorie($categorieObject);
        $data['message_success'] = "Enrégistrement réussie";
        $this->view->load("categories/add",$data); 
    }
    /** 
     * url pattern for this method
     * localhost/projectName/Categorie/edit/value
     */
    public function edit($id){
        
        $categorie = new CategorieRepository();
        $employeur = new EmployeurRepository();
        $data['categorie'] = $categorie->getCategorie($id);
        $data['employeurs'] = $employeur->listeEmployeur();

        $tab = array(
           // $this->view->load("layout/header"),
            //$this->view->load("layout/sidebar"),
            //$this->view->load("layout/topbar"),
            $this->view->load("categories/edit",$data),
            //$this->view->load("layout/footer"),
        );
        return $tab;
    }
     /** 
     * url pattern for this method
     * localhost/projectName/Categorie/update
     */
    public function update(){
        $categorie = new CategorieRepository();
        extract($_POST);
        $categorieObject = new Categorie();
        $categorieObject->setId($id);
        $categorieObject->setPrenom(addslashes($prenom));
        $categorieObject->setNom(addslashes($nom));
        $categorieObject->setCni(addslashes($cni));
        $categorieObject->setEmail(addslashes($email));
        $categorieObject->setTelephone(addslashes($telephone));
        $categorieObject->setAdresse(addslashes($adresse));
        $categorieObject->setLogin(addslashes($login));
        $categorieObject->setPassword(addslashes($password));
        $categorieObject->setEmployeur($categorie->getEmployeur($employeur_id));
        $categorie->updateCategorie($categorieObject);
        return $this->index();
    }
    /** 
     * url pattern for this method
     * localhost/projectName/Categorie/getId/value
     */

    
    
    public function getId($id){
        $data['id'] = $id;

        return $this->view->load("categories/get_id", $data);
    }
    public function get($id){
        
        $data['categorie'] = $tdb->getCategorie($id);
        
        return $this->view->load("categories/get", $data);
    }
    
    
    
     /** 
     * url pattern for this method
     * localhost/projectName/Categorie/delete/value
     */
    public function delete($id){
        
        $tdb = new CategorieRepository();
        $tdb->deleteCategorie($id);
        return $this->index();
    }
    
}
?>