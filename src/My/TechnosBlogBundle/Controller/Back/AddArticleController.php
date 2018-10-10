<?php

namespace My\TechnosBlogBundle\Controller\Back;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use My\TechnosBlogBundle\Entity\Articles;
use My\TechnosBlogBundle\Form\AddArticleType;


/**
 * Class IndexController
 * @package My\TechnosBlogBundle\Controller\Back
 */

class AddArticleController extends Controller
{

    /**
     * @param Request $request
     * @return Response
     */
    public function addArticleAction(Request $request)
    {
        $article = new Articles();
        $form = $this->get('form.factory')->create(AddArticleType::class, $article);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid())
        {
            // Flush to database
            $em = $this->getDoctrine()->getManager();
            $em->persist($article);
            $em->flush();

            $request->getSession()->getFlashBag()->add('notice', 'Annonce bien enregistrée.');

            return $this->render('@MyTechnosBlog/Back/AddArticle\addArticle.html.twig',
                [
                    'form' => $form->createView()
                ]);


        }

        return $this->render('@MyTechnosBlog/Back/AddArticle\addArticle.html.twig',
            [
                'form' => $form->createView()
            ]);
    }

}
