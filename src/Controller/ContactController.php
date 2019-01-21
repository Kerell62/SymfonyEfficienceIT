<?php
/**
 * Created by PhpStorm.
 * User: kerell
 * Date: 14/01/2019
 * Time: 16:16
 */

namespace App\Controller;

use App\Form\ContactType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;

class ContactController extends AbstractController{

    public function index(Request $request, \Swift_Mailer $mailer){
        $form = $this->createForm(ContactType::class);

        $form->handleRequest($request);


        dump($form);
        if ($form->isSubmitted() && $form->isValid()){
            $contactFormData = $form->getData();

            $message = (new \Swift_Message('Vous avez un nouvel Email'))
                ->setFrom($form->getData()->getMailFrom())
                ->setTo($form->getData()->getMailTo())
                ->setBody(
                    $form->getData()->getMessage(),
                    'text/plain'
                )
            ;

            $mailer->send($message);
            $this->addFlash('success', 'Votre Email à bien été envoyé');

            return $this->redirectToRoute('home');
        }


        return $this->render('pages/formulaire.html.twig', [
            'our_form' => $form->createView()
        ]);
    }
}
