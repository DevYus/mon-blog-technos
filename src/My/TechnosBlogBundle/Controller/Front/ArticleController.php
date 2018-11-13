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
        $entMa = $this->getDoctrine()->getManager();
        $article = $entMa->getRepository('MyTechnosBlogBundle:Articles')->find(23);

        $comment = new Comments();
        $comment->setPseudo('Ja');
        $comment->setContent('marcheeeeeee');
        $comment->setArticle($article);

        $entMa->persist($article);
        $entMa->persist($comment);
        $entMa->flush();

        return $this->render('@MyTechnosBlog/Front/Article\article.html.twig', array(
            'category' => $category,
            'slug' => $slug,
            'id' => $id,
        ));
    }
}
