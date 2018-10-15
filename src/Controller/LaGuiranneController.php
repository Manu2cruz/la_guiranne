<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class LaGuiranneController extends AbstractController
{
    /**
     * @Route("/laguiranne", name="la_guiranne")
     */
    public function index()
    {
        return $this->render('la_guiranne/actualite.html.twig', [
            'controller_name' => 'LaGuiranneController',
        ]);
    }
    /**
     * @Route("/", name="home")
     */
    public function home() {
        return $this->render('la_guiranne/home.html.twig');
    }
    /**
     * @route("/plan", name="plan")
     */
    public function plan() {
        return $this->render('la_guiranne/plan.html.twig');
    }
}
