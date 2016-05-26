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
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        $navbar = array(
            'news',
            'members',
            'about',
            'wars',
            'links',
            'forum',
            'contact',
            'intern',
            
            'chat',
            'events',
            'fightus',
            'files',
            'macht',
            'pub',
            'server',
            'tactic',
            'tips'
        );
        
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', [
            'navbar' => $navbar,
            'base_dir' => realpath($this->getParameter('kernel.root_dir') . '/..')
        ]);
    }

    
    
    /**
     * @Route("/show/{id}")
     */
    public function showAction($id)
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

    
    /**
     * @Route("/add", name="test")
     */
    public function createAction()
    {
        
        $product = new Product();
        $product->setName('Keyboard');
        $product->setPrice(19.99);
        $product->setDescription('Ergonomic and stylish!');
        
        $em = $this->getDoctrine()->getManager();
        
        // tells Doctrine you want to (eventually) save the Product (no queries yet)
        $em->persist($product);
        
        // actually executes the queries (i.e. the INSERT query)
        $em->flush();
        
        return new Response('Saved new product with id ' . $product->getId());
    }
    
    /**
     * @Route("/news/add", name="test")
     */
    public function addAction()
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
     * @Route("/news", name="homepage")
     */
    public function showNewsAction()
    {
    
        $em = $this->getDoctrine()->getManager();
        $news = $em->getRepository('AppBundle:News')->findAll();
        
        #print_r($news);
        
        $navbar = array(
            'news',
            'members',
            'about',
            'wars',
            'links',
            'forum',
            'contact',
            'intern',
        
            'chat',
            'events',
            'fightus',
            'files',
            'macht',
            'pub',
            'server',
            'tactic',
            'tips'
        );
        
        return $this->render('default/index.html.twig', [
            'name'  => 'news',
            'navbar' => $navbar,
            'base_dir' => realpath($this->getParameter('kernel.root_dir') . '/..'),
            'news' => $news,
        ]);
    
    
        #return new Response('News: ');
    
    
        // replace this example code with whatever you need
        /*
        return $this->render('default/index.html.twig', [
        'navbar' => $navbar,
        'base_dir' => realpath($this->getParameter('kernel.root_dir') . '/..')
        ]);
        */
    }
    
    
    
    /**
     * @Route("/news/{id}")
     */
    public function showNewsByIdAction($id)
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
