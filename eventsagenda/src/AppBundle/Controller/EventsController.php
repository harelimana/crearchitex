<?php

    /* 
 * Symfony creArchiteX project
 * by Alexandre HARELIMANA
 * under Pr. Gregory Berger's advises
 */
    namespace AppBundle\Controller;
    
    Use AppBundle\Entity\Events;
    use Symfony\Component\HttpFoundation\Request;
    
    class EventsController extends Controller{
        /**
         * @Route(/"listevents", name="listevents")
         */
        public function listEventsAction(){
            $events = $this->Doctrine();
                    $events->getRepository('AppBundle:Events');
                    findAll();
                    return $this->render('events/index_events.html.twig', array('events'=>$events));
        }
    } 
  
    
    
