<?php

namespace AppBundle\Manager;

use AppBundle\Entity\Stuff;
use Doctrine\ORM\EntityManager;
use AppBundle\Manager\BaseManager;

class StuffManager extends BaseManager
{
    protected $em;

    public function __construct( EntityManager $em )
    {
        $this->em = $em;
    }

    /**
     * Permet de récupérer un truc à partir d'un ID
     *
     * @param $stuffId
     *
     * @return null|object
     */
    public function loadStuff( $stuffId )
    {
        return $this->getRepository()
            ->findOneBy(array( 'id' => $stuffId ));
    }

    /**
     * Save Desk entity
     *
     * @param Stuff $stuff
     */
    public function saveStuff( Stuff $stuff )
    {
        $this->add($stuff);
    }

    /**
     * @return mixed
     */
    public function allStuff()
    {
        return $this->getRepository()
            ->allStuff()
            ->getQuery()
            ->getArrayResult();
    }

    /**
     * Permet uniquement de récupérer le repository de l'entité
     *
     * @return \Doctrine\ORM\EntityRepository
     */
    public function getRepository()
    {
        return $this->em->getRepository('AppBundle:Stuff');
    }

}