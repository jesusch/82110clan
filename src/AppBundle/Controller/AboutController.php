<?php
namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use AppBundle\Entity\News;
use AppBundle\Entity\Users;


class AboutController extends DefaultController
{
    
    protected $name = 'about';

    /**
     * @Route("/about", name="about")
     */
    public function index(Request $request)
    {
        
        $em = $this->getDoctrine()->getManager();
        
        $news = $em->getRepository('AppBundle:News')->findAll();
  
        // replace this example code with whatever you need
        return $this->render(sprintf('%s.html.twig', $this->name), [
            'name'  => $this->name,
            'navbar' => $this->navbar,
            'base_dir' => realpath($this->getParameter('kernel.root_dir') . '/..'),
            'news' => $news,
        ]);
    }

    
}
