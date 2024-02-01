<?php

namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class HomeController extends AbstractController
{
    #[Route('/home', name: 'app_home')]
    public function index(): Response
    {
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }

    #[Route('/cv', name: 'cv')]
    public function cv(Request $request): Response
    {
        // Create the form directly in the controller
        $form = $this->createFormBuilder()
            ->add('nom', TextType::class)
            ->add('prenom', TextType::class)
            ->add('email', EmailType::class)
            ->add('message', TextareaType::class, ['required' => false])
            ->getForm();
    
        // Handle form submission
        $form->handleRequest($request);
    
        // Check if the form is submitted and valid
        if ($form->isSubmitted() && $form->isValid()) {
            // Process form data as needed
            $data = $form->getData();
    
            // Example: Create a BinaryFileResponse for the file 'public/cv2.png'
            $filePath = $this->getParameter('kernel.project_dir') . '/public/cv2.png';
            $response = new BinaryFileResponse($filePath);
    
            // Set the response headers for file download
            $response->headers->set('Content-Type', 'application/png');
            $response->headers->set('Content-Disposition', 'attachment; filename="cv2.png"');
    
            // Return the BinaryFileResponse to trigger the file download
            return $response;
        }
    
        // Render the CV page with the form
        return $this->render('cv/index.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    #[Route('/plus', name: 'app_plus')]
    public function plus(): Response
    {
        return $this->render('plus/index.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }

    #[Route('/portfolio', name: 'app_portfolio')]
    public function portfolio(): Response
    {
        return $this->render('portfolio/index.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }
}
