<?php

namespace My\TechnosBlogBundle\Controller\Back;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use My\TechnosBlogBundle\Entity\Articles;
use My\TechnosBlogBundle\Form\DeleteArticleType;


/**
 * Class IndexController
 * @package My\TechnosBlogBundle\Controller\Back
 */

class DeleteArticleController extends Controller
{
    /**
     * @param Request $request
     * @param $id
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|Response
     */
    public function deleteArticleAction(Request $request, $id)
    {

        $em = $this->getDoctrine()->getManager();
        $article = $em->getRepository('MyTechnosBlogBundle:Articles')->find($id);

        $form = $this->get('form.factory')->create(DeleteArticleType::class, $article);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid())
        {
            // Flush to database
            $em = $this->getDoctrine()->getManager();
            $em->remove($article);
            $em->flush();

            $request->getSession()->getFlashBag()->add('notice', 'L\'article a bien été supprimé');

            return $this->redirectToRoute('admin_all_article', array('page' => 1));

        }

        return $this->render('@MyTechnosBlog/Back/DeleteArticle\deleteArticle.html.twig',
            [
                'form' => $form->createView(),
                'article' => $article

            ]);
    }

}
