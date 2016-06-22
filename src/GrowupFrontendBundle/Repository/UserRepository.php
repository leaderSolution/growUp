<?php
/**
 * Created by PhpStorm.
 * User: achouri
 * Date: 29/05/2016
 * Time: 5:18 PM
 */

namespace GrowupFrontendBundle\Repository;


class UserRepository extends \Doctrine\ORM\EntityRepository
{
    const ALIAS ='candidate';
    public function selectCurrent($id){
        $queryBuilder = $this->getEntityManager()
            ->createQueryBuilder()->select(self::ALIAS.'.id')
            ->from('GrowupFrontendBundle:User',self::ALIAS)
            ->where(self::ALIAS.'.id = :id')
            ->setParameter('id',$id)
        ;
        return $queryBuilder;

    }
}