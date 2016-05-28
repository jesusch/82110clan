<?php
namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use AppBundle\Entity\News;
use AppBundle\Entity\Users;


class InternController extends DefaultController
{
    
    protected $name = 'intern';

    /**
     * @Route("/intern", name="intern")
     */
    public function index(Request $request)
    {
        
        $authenticationUtils = $this->get('security.authentication_utils');
        
        // get the login error if there is one
        $error = $authenticationUtils->getLastAuthenticationError();
        
        // last username entered by the user
        $lastUsername = $authenticationUtils->getLastUsername();
        
        // replace this example code with whatever you need
        return $this->render(sprintf('%s.html.twig', $this->name), [
            'name'  => $this->name,
            'navbar' => $this->navbar,
            'base_dir' => realpath($this->getParameter('kernel.root_dir') . '/..'),
            'last_username' => $lastUsername,
            'error'         => $error,
        ]);
    }
    
 
    
}
