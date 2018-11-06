<?php

namespace My\TechnosBlogBundle\Repository;

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\Tools\Pagination\Paginator;
use InvalidArgumentException;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;



/**
 * ArticlesRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class ArticlesRepository extends \Doctrine\ORM\EntityRepository
{
    public function paginate($page, $maxInPage, $category = null) // Ici ajouter un argument qui sera la variable SQL envoyé en post par AJAX
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

        if($category)
        {

            $queryBuilder = $this->createQueryBuilder('p')
                ->where('p.category = :category')
                ->setParameter('category',$category)
                ->orderBy('p.date', 'DESC');

            $query = $queryBuilder->getQuery();

            $firstResult = ($page - 1) * $maxInPage;
            $query->setFirstResult($firstResult)->setMaxResults($maxInPage);
            $paginator = new Paginator($query);

            if (($paginator->count() <= $firstResult) && $page != 1) {
                throw new NotFoundHttpException('La page demandée n\'existe pas.');
            }

            return $paginator;

        }

        else
        {
            $queryBuilder = $this->createQueryBuilder('p')
                ->orderBy('p.date', 'DESC');

            $query = $queryBuilder->getQuery();

            $firstResult = ($page - 1) * $maxInPage;
            $query->setFirstResult($firstResult)->setMaxResults($maxInPage);
            $paginator = new Paginator($query);

            if (($paginator->count() <= $firstResult) && $page != 1) {
                throw new NotFoundHttpException('La page demandée n\'existe pas.');
            }

            return $paginator;

        }

    }


    public function getResultsForJsonReponse($category)
    {
        $sql = "SELECT * FROM Articles WHERE category = ?";
        $em = $this->getEntityManager();
        $sm = $em->getConnection()->prepare($sql);
        $sm->execute([$category]);
        return $sm->fetchAll();
    }

}