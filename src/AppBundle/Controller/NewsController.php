<?php
namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use AppBundle\Entity\News;
use AppBundle\Entity\Users;


class NewsController extends DefaultController
{
    
    protected $name = 'news';

    /**
     * @Route("/")
     */
    public function index(Request $request)
    {
        
        $em = $this->getDoctrine()->getManager();
        
        $groups = $em->getRepository('AppBundle:Groups')->findAll();
        $news = $em->getRepository('AppBundle:News')->findAll();
  
        // replace this example code with whatever you need
        return $this->render(sprintf('%s.html.twig', $this->name), [
            'name'  => $this->name,
            'navbar' => $this->navbar,
            'base_dir' => realpath($this->getParameter('kernel.root_dir') . '/..'),
            'news' => $news,
            'groups'    => $groups,
        ]);
    }
    
    
    /**
     * @Route("/news", name="news")
     */
    public function newsIndex(Request $request)
    {
        return $this->index($request);
    }
    

    
    /**
     * @Route("/news/add")
     */
    public function add()
    {
    
        $em = $this->getDoctrine()->getManager();
    
        $user = $em->getRepository('AppBundle:Users')->findOneByUser('jesusch');
    
    
        if (!$user) {
            $user = new Users();
        }
    
    
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
    
    
    /**
     * @Route("/news/{id}")
     */
    public function showById($id)
    {
        $em = $this->getDoctrine()->getManager();
    
        $repository = $em->getRepository('AppBundle:Product');
    
    
        $product = $repository->find($id);
        $products = $repository->findAll();
    
        $product instanceof Product;
    
        if (!$product) {
            throw $this->createNotFoundException(
                'No product found for id '.$id
                );
        }
    
        $product->setName('newname');
    
    
        var_dump($products);
        $em->flush();
    
        return new Response('Product with id: ' . $product->getId());
    
        // ... do something, like pass the $product object into a template
    }
    
}
