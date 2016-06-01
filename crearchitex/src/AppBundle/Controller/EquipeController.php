<?php

    namespace AppBundle\Controller;

    use Symfony\Bundle\FrameworkBundle\Controller\Controller;
    use Symfony\Component\HttpFoundation\Request;
    use Symfony\Component\Routing\Annotation\Route;

/*
     * Symfony creArchiteX project
     * by Alexandre HARELIMANA
     * under Pr. Gregory Berger's advises
     */

    class EquipeController extends Controller
    {
/**
 * 
 * @param Request $request
 * @return type
 * @Route("/admin/equipe", name="adminEquipe")
 */
        public function indexAction(Request $request)
        {
            $equipe = array();
            $view   = '/crearchitex/equipe/homepage.html.twig';
            return $this->render($view, array('EquipeContents' => $equipe));
        }

    }
    