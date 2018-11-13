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
     * @param Request $request
     * @param $page
     * @param $cat
     * @return Response
     */
    public function allArticleAction(Request $request, $page, $cat)
    {
        /******* Pagination and display all articles ******/

        $nbArticlesByPage = 3;

        if($request->isMethod('POST'))
        {
            $cat = $request->request->get('category');

            $articles = $this->findArticlesForPagination($page,$nbArticlesByPage,$cat);

            // ici ajouter le 3e argument à la methode paginate
            $pagination = $this->paginationParams($page,$articles,$nbArticlesByPage,$cat);

            return $this->render('@MyTechnosBlog/Back/AllArticle\allArticle.html.twig', [
                'articles' => $articles,
                'pagination' => $pagination,
                'cat' => $cat
            ]);
        }

        else if($cat)
        {
            $articles = $this->findArticlesForPagination($page,$nbArticlesByPage,$cat);
            $pagination = $this->paginationParams($page,$articles,$nbArticlesByPage,$cat);

            return $this->render('@MyTechnosBlog/Back/AllArticle\allArticle.html.twig', [
                'articles' => $articles,
                'pagination' => $pagination,
                'cat' => $cat
            ]);
        }

        $entMa = $this->getDoctrine()->getManager();

        $articles = $entMa->getRepository('MyTechnosBlogBundle:Articles')->paginate($page, $nbArticlesByPage);
        // ici ajouter le 3e argument à la methode paginate
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

    private function findArticlesForPagination($page, $nbArticlesByPage, $cat)
    {
        $entMa = $this->getDoctrine()->getManager();
        return $entMa->getRepository('MyTechnosBlogBundle:Articles')->paginate($page, $nbArticlesByPage, $cat);

    }

    private function paginationParams($page, $articles, $nbArticlesByPage, $cat)
    {
        return $pagination = [
            'page' => $page,
            'nbPages' => ceil(count($articles) / $nbArticlesByPage),
            'routeName' => 'admin_all_article',
            'paramsRoute' => [
                'cat' => $cat,
            ]
        ];
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
            $entMa = $this->getDoctrine()->getManager();
            $entMa->persist($article);
            $entMa->flush();

            $request->getSession()->getFlashBag()->add('notice', 'L\'article a bien enregistré.');

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

        $entMa = $this->getDoctrine()->getManager();
        $article = $entMa->getRepository('MyTechnosBlogBundle:Articles')->find($id);

        $form = $this->get('form.factory')->create(UpdateArticleType::class, $article);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid())
        {
            // Flush to database
            $entMa = $this->getDoctrine()->getManager();
            $entMa->persist($article);
            $entMa->flush();

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

        $entMa = $this->getDoctrine()->getManager();
        $article = $entMa->getRepository('MyTechnosBlogBundle:Articles')->find($id);

        $form = $this->get('form.factory')->create(DeleteType::class, $article);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid())
        {
            // Flush to database
            $entMa = $this->getDoctrine()->getManager();
            $entMa->remove($article);
            $entMa->flush();

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
