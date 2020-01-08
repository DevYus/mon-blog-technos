<?php

namespace My\TechnosBlogBundle\Controller\Back;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use My\TechnosBlogBundle\Form\DeleteType;
use My\TechnosBlogBundle\Entity\Comments;
use My\TechnosBlogBundle\Entity\Articles;

/**
 * Class IndexController
 * @package My\TechnosBlogBundle\Controller\Back
 */
class AllCommentsController extends Controller
{
    /**
     * @param int $page
     * @return Response
     */
    public function allCommentsAction($page)
    {
        /******* Pagination and display all comments ******/

            $nbCommentsByPage = 10;

            $entMa = $this->getDoctrine()->getManager();
            $comments = $entMa->getRepository('MyTechnosBlogBundle:Comments')->paginate($page, $nbCommentsByPage);

            $pagination = [
                'page' => $page,
                'nbPages' => ceil(count($comments) / $nbCommentsByPage),
                'routeName' => 'admin_all_comments',
                'paramsRoute' => [],
            ];

            return $this->render('@MyTechnosBlog/Back/AllComments\allComments.html.twig', [
                'comments' => $comments,
                'pagination' => $pagination,
            ]);
    }

    /**
     * @param Request $request
     * @param Id      $id
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|Response
     */
    public function deleteCommentAction(Request $request, $id)
    {
        $entMa = $this->getDoctrine()->getManager();
        $comment = $entMa->getRepository('MyTechnosBlogBundle:Comments')->find($id);

        $form = $this->get('form.factory')->create(DeleteType::class, $comment);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entMa = $this->getDoctrine()->getManager();
            $entMa->remove($comment);
            $entMa->flush();

            $request->getSession()->getFlashBag()->add('notice', 'Le commentaire a bien été supprimé');

            return $this->redirectToRoute('admin_all_comments', array('page' => 1));
        }

        return $this->render('@MyTechnosBlog/Back/DeleteComment\deleteComment.html.twig', [
                'form' => $form->createView(),
                'comment' => $comment,
        ]);
    }
}
