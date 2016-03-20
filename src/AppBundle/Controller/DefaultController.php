<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="index")
     */
    public function indexAction(Request $request)
    {
        /* * sa generam un array de test * */ 
        for($i=0;$i<=30;$i++){ 
            for($j=0;$j<8;$j++){ 
            $rez[$i][] ="text $i,$j"; 
            } 
        }
        
        $capTabel = ['Partner id', 'Alias', 'Street', 'Number', 'City', 'Country', 'Phone', 'Email' ];
        
        
        return $this->render('default/index.html.twig', array( 'entities' => $rez, 'capTabel' => $capTabel));
        
    }
    

    
    
    
    
    
}   // end DefaultController
