<?php
// src/AppBundle/Controller/LuckyController.php
namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Request;

class ContactController extends Controller
{
    /**
     * @Route("/contact", name="contact", methods={"GET"})
     * @Template()
     */
    public function contactAction()
    {
        return [];
    }
    
    /**
     * @Route("/contact", methods={"POST"})
     */
    public function messageAction(Request $request)
    {
        dump($request);
        exit();
        return [];
    }
}