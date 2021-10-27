<?php

namespace My\TechnosBlogBundle\Controller\Front;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use My\TechnosBlogBundle\Entity\Comments;
use Symfony\Component\HttpFoundation\Request;
use My\TechnosBlogBundle\Form\CommentsType;

/**
 * Class ArticleController
 * @package My\TechnosBlogBundle\Controller\Front
 */
class ArticleController extends Controller
{
    /**
     * @param Request $request
     * @param Int     $id
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function articleAction(Request $request, $id)
    {
        $entMa = $this->getDoctrine()->getManager();
        
        // Recover the article with the id in argument
        $article = $entMa->getRepository('MyTechnosBlogBundle:Articles')->find($id);
       
        // Shows articles according to the connexion
        if ($this->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_FULLY')) {
            $idUser = $this->getUser()->getId();
            $user = $entMa->getRepository('MyTechnosBlogBundle:Users')->find($idUser);
        }
        
        // Get articles of the side and the new articles
        $lastArticles = $entMa->getRepository('MyTechnosBlogBundle:Articles')->getLastArticles();
        $othersArticles = $entMa->getRepository('MyTechnosBlogBundle:Articles')->getOthersArticles();
        
        // Get comment's article
        $allComments = $entMa->getRepository('MyTechnosBlogBundle:Comments')->getAllComments($article->getId());

        $comment = new Comments();
        
        // Get form if user want to comment
        $form = $this->get('form.factory')->create(CommentsType::class, $comment);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Set Comment User
            $comment->setPseudo($user->getPseudo());
            $comment->setContent($request->request->get('content'));
            $comment->setArticle($article);

            $entMa->persist($article);
            $entMa->persist($comment);
            $entMa->flush();

            return $this->redirectToRoute('article', [
                'category' => $article->getCategory(),
                'slug' => $article->getSlug(),
                'id' => $article->getId(),
            ]);
        }

        return $this->render(
            '@MyTechnosBlog/Front/Article\article.html.twig',
            [
                'article' => $article,
                'lastArticles' => $lastArticles,
                'othersArticles' => $othersArticles,
                'form' => $form->createView(),
                'allComments' => $allComments,
            ]
        );
    }
}
