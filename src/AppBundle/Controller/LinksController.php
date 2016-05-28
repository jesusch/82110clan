<?php
namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use AppBundle\Entity\News;
use AppBundle\Entity\Users;
use AppBundle\Entity\Links;


class LinksController extends DefaultController
{
    
    protected $name = 'links';

    /**
     * @Route("/links", name="links")
     */
    public function index(Request $request)
    {
        
        $em = $this->getDoctrine()->getManager();
        
        $links = $em->getRepository('AppBundle:Links')->findAll();
  
        // replace this example code with whatever you need
        return $this->render(sprintf('%s.html.twig', $this->name), [
            'name'  => $this->name,
            'navbar' => $this->navbar,
            'base_dir' => realpath($this->getParameter('kernel.root_dir') . '/..'),
            'links' => $links,
        ]);
    }
    
    /**
     * @Route("/links/{id}")
     */
    public function addCount(Request $request, $id)
    {
    
        $em = $this->getDoctrine()->getManager();
        
        $link = $em->getRepository('AppBundle:Links')->find($id);

        
        $count = $link->getCount();
        $count++;
        
        $link->setCount($count);
        
        $em->persist($link);
        $em->flush();
        
        return $this->redirect('http://' . $link->getHref());
    
    }

    
}
