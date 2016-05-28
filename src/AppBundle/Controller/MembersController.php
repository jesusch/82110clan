<?php
namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use AppBundle\Entity\News;
use AppBundle\Entity\Users;


class MembersController extends DefaultController
{
    
    protected $name = 'members';

    /**
     * @Route("/members", name="members")
     */
    public function index(Request $request)
    {
        
        $em = $this->getDoctrine()->getManager();
        
        $users = $em->getRepository('AppBundle:Users')->findAll();
        
        # $user instanceof Users;

  
        // replace this example code with whatever you need
        return $this->render(sprintf('%s.html.twig', $this->name), [
            'name'  => $this->name,
            'navbar' => $this->navbar,
            'base_dir' => realpath($this->getParameter('kernel.root_dir') . '/..'),
            'users' => $users,
        ]);
    }
    
    /**
     * @Route("/members/{id}", name="memberDetail")
     */
    public function showDetail(Request $request, $id)
    {
    
        $em = $this->getDoctrine()->getManager();
        $user = $em->getRepository('AppBundle:Users')->find($id);
    
        // replace this example code with whatever you need
        return $this->render('memberDetail.html.twig', [
        'name'  => $this->name,
        'navbar' => $this->navbar,
        'base_dir' => realpath($this->getParameter('kernel.root_dir') . '/..'),
        'user' => $user,
        ]);
    }

    
}
