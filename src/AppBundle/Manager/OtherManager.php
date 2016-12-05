<?php

namespace AppBundle\Manager;

use AppBundle\Entity\Other;
use AppBundle\Entity\Stuff;
use Doctrine\ORM\EntityManager;
use AppBundle\Manager\BaseManager;

class OtherManager extends BaseManager
{
    protected $em;

    public function __construct( EntityManager $em )
    {
        $this->em = $em;
    }


    /**
     * @param Other $stuff
     */
    public function saveOther( Other $stuff )
    {
        $this->add($stuff);
    }

    /**
     * @return mixed
     */
    public function all()
    {
        return $this->getRepository()
            ->all();
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