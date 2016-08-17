<?php

namespace Acme\CarBundle\Service;

use Doctrine\ORM\EntityManager;

class Car
{
    /** @var EntityManager */
    private $entityManager;

    /**
     * Car constructor.
     * @param $entityManager
     */
    public function __construct(EntityManager $entityManager)
    {
        $this->entityManager = $entityManager;
    }


    public function findCarById($id)
    {
        return $this->entityManager->getRepository('AcmeCarBundle:Car')->find($id);
    }
}
