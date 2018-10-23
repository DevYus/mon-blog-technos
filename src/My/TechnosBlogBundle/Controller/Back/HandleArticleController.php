<?php

namespace My\TechnosBlogBundle\Controller\Back;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use My\TechnosBlogBundle\Entity\Articles;
use My\TechnosBlogBundle\Form\AddArticleType;
use My\TechnosBlogBundle\Form\UpdateArticleType;
use My\TechnosBlogBundle\Form\DeleteType;


/**
 * Class IndexController
 * @package My\TechnosBlogBundle\Controller\Back
 */

class HandleArticleController extends Controller
{

    /**
     * @param $page
     * @return Response
     */
    public function allArticleAction($page)
    {
        /******* Pagination and display all articles ******/

        $nbArticlesByPage = 8;

        $em = $this->getDoctrine()->getManager();

        $articles = $em->getRepository('MyTechnosBlogBundle:Articles')->paginate($page, $nbArticlesByPage);

        $pagination = [
            'page' => $page,
            'nbPages' => ceil(count($articles) / $nbArticlesByPage),
            'routeName' => 'admin_all_article',
            'paramsRoute' => []
        ];

        /**********/

        return $this->render('@MyTechnosBlog/Back/AllArticle\allArticle.html.twig', [
            'articles' => $articles,
            'pagination' => $pagination,

        ]);

    }


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

            return $this->redirectToRoute('admin_all_article', array('page' => 1));
        }

        return $this->render('@MyTechnosBlog/Back/AddArticle\addArticle.html.twig',
            [
                'form' => $form->createView()
        ]);
    }


    /**
     * @param Request $request
     * @param $id
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|Response
     */
    public function updateArticleAction(Request $request, $id)
    {

        $em = $this->getDoctrine()->getManager();
        $article = $em->getRepository('MyTechnosBlogBundle:Articles')->find($id);

        $form = $this->get('form.factory')->create(UpdateArticleType::class, $article);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid())
        {
            // Flush to database
            $em = $this->getDoctrine()->getManager();
            $em->persist($article);
            $em->flush();

            $request->getSession()->getFlashBag()->add('notice', 'L\'article a bien été modifié');

            return $this->redirectToRoute('admin_all_article', array('page' => 1));

        }

        return $this->render('@MyTechnosBlog/Back/UpdateArticle\updateArticle.html.twig',
            [
                'form' => $form->createView(),

            ]);
    }

    /**
     * @param Request $request
     * @param $id
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|Response
     */
    public function deleteArticleAction(Request $request, $id)
    {

        $em = $this->getDoctrine()->getManager();
        $article = $em->getRepository('MyTechnosBlogBundle:Articles')->find($id);

        $form = $this->get('form.factory')->create(DeleteType::class, $article);

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
