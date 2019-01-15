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

    public function index(Request $request){
        $form = $this->createForm(ContactType::class);

        $form->handleRequest($request);

        dump($request);

        return $this->render('pages/formulaire.html.twig', [
            'our_form' => $form->createView()
        ]);
    }
}
