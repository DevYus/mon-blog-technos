<?php

namespace My\TechnosBlogBundle\Controller\Front;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use My\TechnosBlogBundle\Entity\Comments;
use My\TechnosBlogBundle\Entity\Articles;


/**
 *  Controller that handle Category Blog
 */

class ArticleController extends Controller
{
    /**
     * @param $category
     * @param $slug
     * @param $id
     * @return \Symfony\Component\HttpFoundation\Response
     */

    public function articleAction($category, $slug, $id)
    {
        $em = $this->getDoctrine()->getManager();
        $article = $em->getRepository('MyTechnosBlogBundle:Articles')->find(23);

        $comment = new Comments();
        $comment->setPseudo('Ja');
        $comment->setContent('marcheeeeeee');

        $comment->setArticle($article);

        $em->persist($article);
        $em->persist($comment);
        $em->flush();

        //$listComments = $em->getRepository('MyTechnosBlogBundle:Comments')->findBy(['id' => $article]);


        return $this->render('@MyTechnosBlog/Front/Article\article.html.twig', array(
            'category' => $category,
            'slug' => $slug,
            'id' => $id,
        ));
    }
}
