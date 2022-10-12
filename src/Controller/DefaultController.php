<?php

namespace App\Controller;

use App\Entity\TypeRestaurant;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    #[Route('accueil', name: 'app_home')]
    public function accueil()
    {
        return $this->render('vue/home.html.twig');
    }

    #[Route('/restaurant', name: 'app_restaurant')]
    public function restaurant()
    {
        return $this->render('vue/restaurant.html.twig');
    }

    #[Route('/page_restaurant', name: 'app_page_restaurant')]
    public function pageRestaurant()
    {
        return $this->render('vue/page_restaurant.html.twig');
    }

    #[Route('/mon_compte', name: 'app_my_account')]
    public function monCompte()
    {
        return $this->render('vue/my_account.html.twig');
    }
}
