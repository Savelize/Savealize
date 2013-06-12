<?php

namespace Site\SavalizeBundle\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * UserNotificationRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class UserNotificationRepository extends EntityRepository {

    public function count($id) {
        $query = $this->getEntityManager()->createQuery('
            SELECT count(n) as notfCount
            FROM SiteSavalizeBundle:UserNotification n
            where n.user = :id
            ');

        $query->setParameter('id', $id);
        return $query->getResult();
    }

    public function showNotifications($id, $page, $maxResults) {
        if ($page < 1) {
            return array();
        }
        $page--;   // to start from zero

        $query = $this->getEntityManager()->createQuery('
        SELECT N
        FROM SiteSavalizeBundle:UserNotification N
        WHERE N.user = :id  ');

        if ($maxResults) {
            $query->setFirstResult($page * $maxResults);
            $query->setMaxResults($maxResults);
        }
        $query->setParameter('id', $id);
        return $query->getResult();
    }

}
