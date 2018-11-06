<?php

namespace My\TechnosBlogBundle\Repository;


use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\Tools\Pagination\Paginator;
use InvalidArgumentException;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

use My\TechnosBlogBundle\Entity\Comments;
use My\TechnosBlogBundle\Entity\Articles;

/**
 * CommentsRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class CommentsRepository extends \Doctrine\ORM\EntityRepository
{
    public function paginate($page, $maxInPage)
    {
        if(!is_numeric($page))
        {
            throw new InvalidArgumentException(
                'La valeur de l\'argument '.$page.' est incorrecte.'
            );
        }

        if($page < 1)
        {
            throw new NotFoundHttpException('La page demandée n\'existe pas');
        }

        if (!is_numeric($maxInPage)) {
            throw new InvalidArgumentException(
                'La valeur de l\'argument '.$page.' est incorrecte.'
            );
        }

        $queryBuilder = $this->createQueryBuilder('c')
            ->join('c.article','a')->addSelect('a')
            ->orderBy('c.date');

        $query = $queryBuilder->getQuery();

        $firstResult = ($page - 1) * $maxInPage;
        $query->setFirstResult($firstResult)->setMaxResults($maxInPage);
        $paginator = new Paginator($query);

        if ( ($paginator->count() <= $firstResult) && $page != 1)
        {
            throw new NotFoundHttpException('La page demandée n\'existe pas.');
        }

        return $paginator;

    }

    public function getTitleOfArticleComment()
    {
        $queryBuilder = $this->createQueryBuilder('c')
            ->join('c.article','a')->addSelect('a')
            ->orderBy('c.date');

        $query = $queryBuilder->getQuery();


        $results = $query->getResult();

        return $results;
    }


}