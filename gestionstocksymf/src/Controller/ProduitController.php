<?php

namespace App\Controller;
use App\Entity\Produit;
use App\Repository\ProduitRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\Common\Persistence\ObjectManager;
class ProduitController extends AbstractController
{
    /**
     * @Route("/Produit/liste", name="produit_liste")
     */
    public function index(ProduitRepository $repository)
    {
        //$produit = $this->getDoctrine()->getRepository(Produit::class);
        $produits = $repository->findAll();
        return $this->render('produit/liste.html.twig',['produits'=>$produits]);
    }
    /**
     * @Route("/Produit/get/{id}", name="produit_get")
     */
    public function getProduit(Produit $produit)
    {
        //$repos = $this->getDoctrine()->getRepository(Produit::class);
        //$produits = $repos->find($id);
        return $this->render('produit/edit.html.twig',['produit'=>$produit]);
    }
    /**
     * @Route("/Produit/add", name="produit_add")
     */
    public function add(Request $request)
    {
        //var_dump($request);
        $msgE="";
        if($request->request->count() > 0)
        {
            $produit = new Produit();
            $produit->setLibelle($request->request->get('libelle'))
                    ->setQtStock($request->request->get('qteStock'));
            $em = $this->getDoctrine()->getManager();
            $em->persist($produit);
            $em->flush();
            $msgS="Insertion réussie avec succès";
            return $this->render('produit/liste.html.twig',array('message_success'=>$msgS));
        }
        else{
            $msgE="Erreur d'insertion";
            return $this->render('produit/add.html.twig',array('message_error'=>$msgE));
        }
        return $this->render('produit/add.html.twig');
        // $p = new Produit();
        // $p->setLibelle("Clavier");
        // $p->setQtStock(0.0);

        // $em = $this->getDoctrine()->getManager();
        // $em->persist($p);
        // $em->flush();
        // return $this->render('produit/liste.html.twig');
    }
}