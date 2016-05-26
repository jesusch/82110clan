<?php
namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use AppBundle\Entity\News;
use AppBundle\Entity\Users;


class DefaultController extends Controller
{


    
    /**
     * @Route("/news/add", name="test")
     */
    public function addAction()
    {
        
        $user = new Users();
        $user->setUser('jesusch');
        $user->setPass($pass='pass');
        
        $news = new News();
        $news->setDate(new \DateTime());
        $news->setPost('toller text');
        $news->setSubject('tolle überschrift');
        $news->setUser($user);
        
        $em = $this->getDoctrine()->getManager();
        
        // tells Doctrine you want to (eventually) save the Product (no queries yet)
        $em->persist($user);
        $em->persist($news);
        
        // actually executes the queries (i.e. the INSERT query)
        $em->flush();
        
        return new Response('Saved new news with id ' . $news->getId());
    }
}
