<?php

namespace AppBundle\Entity;

use Doctrine\ORM\EntityRepository;

class ChartsRepository extends EntityRepository
{
 	public function findChartsByTitle($title){
        $dql = 'SELECT c FROM AppBundle:Charts c WHERE c.title LIKE :title ORDER BY c.title';
        $query = $this->getEntityManager()->createQuery($dql);
        $query->setParameter('title', '%'.$title.'%');
        return $query->getResult();
    }

        public function findAllChartsASC(){
        $dql = 'SELECT c FROM AppBundle:Charts c ORDER BY c.title ASC';
        $query = $this->getEntityManager()->createQuery($dql);
        return $query->getResult();
    }

    public function findChartsByLetter($letter){
        $dql = 'SELECT c FROM AppBundle:Charts c WHERE c.title LIKE :title ORDER BY c.title';
        $query = $this->getEntityManager()->createQuery($dql);
        $query->setParameter('title', $letter.'%');
        return $query->getResult();
    }

    public function findNewestCharts(){
        $dql = 'SELECT c FROM AppBundle:Charts c ORDER BY c.id DESC';
        $query = $this->getEntityManager()->createQuery($dql);
        return $course = $query->setMaxResults(4)->getResult();
;
    }
}