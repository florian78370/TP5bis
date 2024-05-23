<?php

namespace App\Controller;

use App\Repository\ContactRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ContactController extends AbstractController
{
    /**
     * @Route("/contacts", name="contacts", methods={"GET"})
     */
    public function listeContacts(ContactRepository $repo)
    {
        
        $Contacts=$repo->findAll();
        return $this->render('contact/listeContacts.html..twig',[
            'lesContacts' => $Contacts
        ]);
            
        
    }
    /**
     * @Route("/contact/{id}", name="fichecontacts", methods={"GET"})
     */
    public function ficheContacts($id, ContactRepository $repo)
    {
        
        $Contact=$repo->find($id);
        return $this->render('contact/ficheContact.html.twig',[
            'leContact' => $Contact
        ]);
            
        
    }
}
