<?php

namespace My\TechnosBlogBundle\Controller\Front;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use My\TechnosBlogBundle\Entity\Comments;
use My\TechnosBlogBundle\Entity\Articles;

/**
 * Class ArticleController
 * @package My\TechnosBlogBundle\Controller\Front
 */
class ArticleController extends Controller
{
    /**
     * @param  \Article $id
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function articleAction($id)
    {
        $entMa = $this->getDoctrine()->getManager();
        $article = $entMa->getRepository('MyTechnosBlogBundle:Articles')->find($id);

        $lastArticles = $entMa->getRepository('MyTechnosBlogBundle:Articles')->getLastArticles();
        $othersArticles = $entMa->getRepository('MyTechnosBlogBundle:Articles')->getOthersArticles();

        /*

        $comment = new Comments();
        $comment->setPseudo('Ja');
        $comment->setContent('marcheeeeeee');
        $comment->setArticle($article);

        $entMa->persist($article);
        $entMa->persist($comment);
        $entMa->flush();

        */

        return $this->render(
            '@MyTechnosBlog/Front/Article\article.html.twig',
            array(
            'article' => $article,
            'lastArticles' => $lastArticles,
            'othersArticles' => $othersArticles,
            )
        );
    }
}
