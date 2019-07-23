<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class FrontController extends AbstractController
{
    
    /**
     * @Route("/", name="main_page")
     */
    public function index()
    {
        return $this->render('front/index.html.twig', [
            'controller_name' => 'FrontController',
        ]);
    }
    
    
    /**
     * @Route("/video-list", name="video_list")
     */
    public function videoList()
    {
        return $this->render('front/videolist.html.twig');
    }
    
    
    /**
     * @Route("/video-details", name="video_details")
     */
    public function videoDetails()
    {
        return $this->render('front/video_details.html.twig');
    }
    
    
    /**
     * @Route("/search-results", name="search_results", methods={"POST"})
     */
    public function searchResults()
    {
        
        return $this->render( 'front/search_results.html.twig' );
        
    }
    
    
    /**
     * @Route("/pricing", name="pricing")
     */
    public function pricing()
    {
        
        return $this->render('front/pricing.html.twig');
        
    }
    
    
    /**
     * @Route("/register", name="register")
     */
    public function register()
    {
        
        return $this->render('front/register.html.twig');
        
    }
    
    
    /**
     * @Route("/login", name="login")
     */
    public function login()
    {
        
        return $this->render('front/login.html.twig');
        
    }
    
}
