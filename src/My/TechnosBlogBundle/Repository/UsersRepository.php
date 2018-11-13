<?php

namespace My\TechnosBlogBundle\Repository;

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\Tools\Pagination\Paginator;
use InvalidArgumentException;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

/**
 * UsersRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class UsersRepository extends EntityRepository
{
    public function paginate($page, $maxInPage, $category = null)
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

            // Je recois role-admin
            if($category == 'role-admin')
            {
                $role = '["ROLE_ADMIN"]';

                $queryBuilder = $this->createQueryBuilder('p')
                    ->where('p.roles = :roles')
                    ->setParameter('roles', $role)
                    ->orderBy('p.date', 'DESC');


            }

            elseif($category == 'role-user')
            {
                $role = '["ROLE_USER"]';

                $queryBuilder = $this->createQueryBuilder('p')
                    ->where('p.roles = :roles')
                    ->setParameter('roles', $role)
                    ->orderBy('p.date', 'DESC');


            }

            else
            {
                $queryBuilder = $this->createQueryBuilder('p')
                    ->orderBy('p.date', 'DESC');

            }


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




}
