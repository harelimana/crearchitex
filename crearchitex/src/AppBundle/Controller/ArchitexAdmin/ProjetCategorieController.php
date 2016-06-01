<?php

    namespace AppBundle\Controller\ArchitexAdmin;

    use Symfony\Bundle\FrameworkBundle\Controller\Controller;
    use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

/*
     * Symfony creArchiteX project
     * by Alexandre HARELIMANA
     * under Pr. Gregory Berger's advises
     */

    class ProjetCategorieController extends Controller
    {
        //put your code here

        /**
         * @Route("/addcateg",name="add")
         */
        public function addAction()
        {
            $categ   = new Projetcategorie();
            $categ->setCategorie('Construction');
            $categ->setDescription('Testtesteteste categorie description');
            $categ->setIsVisible('1');
            $manager = $this->getDoctrine()->getManager();
            $manager->persist($categ);
            $manager->flush();
            return ('OK => categorie created');
        }

        /**
         * 
         * @route("/listcateg",name="listcategorie")
         */
        public function readAction()
        {
            $doctrine   = $this->getDoctrine();
            $repository = $doctrine->getRepository('AppBundle:ProjetCategorie');
            return $this->$repository->findAll();
        }

//        /**
//         * 
//         *  @route("/updatecateg",name="updatecategorie")
//         */
//        public function UpdateAction(){
//            
//        }
//        /**
//         * 
//       
//         *  @route("/deletecateg",name="deletecategorie")
//         */
//         public function DeleteAction(Request $request){
//            
//        }
    }
    