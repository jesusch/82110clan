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
    
    protected $name;
    
    /**
     * array of available navbar elements
     * @var array
     */
    protected $navbar = array(
            'news',
            'members',
            'about',
            #'wars',
            'links',
            #'forum',
            #'contact',
            'intern',
            
            #'chat',
            #'events',
            #'fightus',
            #'files',
            #'macht',
            #'pub',
            #'server',
            #'tactic',
            #'tips'
        );
    
}
