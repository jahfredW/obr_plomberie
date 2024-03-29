<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\User;
use APP\Form\RegisterType;

class RegisterController extends AbstractController
{
    #[Route('/inscription', name: 'register')]
    public function index(): Response
    {

        $user = new User();
        $form = $this->createForm(RegisterType::class, $user);
        return $this->render('register/index.html.twig', [
            'form' => $form->createView()
        ]);
    }
}
